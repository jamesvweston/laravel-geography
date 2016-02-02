<?php namespace postage\Repositories;

use postage\Utilities\ArrayUtil;
use Doctrine\ORM\Query;
use postage\Exceptions\ValidationFailureException;
use postage\Helpers\InputValidator;
use LaravelDoctrine\ORM\Pagination\Paginatable;

class CountryRepository extends BaseRepository {

    use Paginatable;

    public function findOneByISO2 ($iso2) {
        return $this->findOneBy(['iso2' => $iso2]);
    }

    function where ($query) {
        $query                      =   $this->validateQuery($query);

        $qb                         =   $this->_em->createQueryBuilder();

        if ($query['selector'] == true)
            $qb->select(['country.id, country.name']);
        else if ($query['lexicon'] == true) {
            $qb->select([
                'COUNT(country.id) AS total',
                'country.isEU',
                'country.isUK',
                'country.isUSTerritory',
                'continent.id AS continents_id', 'continent.name AS continents_name',
            ]);
        } else {
            $qb->select(['country']);
        }

        $qb->from('postage\Models\Country', 'country')
            ->innerJoin('country.continent', 'continent', Query\Expr\Join::ON);

        if (!is_null($query['continents'])) {
            foreach ($query['continents'] AS $continent) {
                $qb->orWhere($qb->expr()->in('IDENTITY(country.continent)', $continent->id));
            }
        }


        if (!is_null($query['isEU'])) {
            $qb->andWhere('country.isEU                 =               :isEU')
                ->setParameter('isEU',                                  $query['isEU']);
        }

        if (!is_null($query['isUK'])) {
            $qb->andWhere('country.isUK                 =               :isUK')
                ->setParameter('isUK',                                  $query['isEU']);
        }

        if (!is_null($query['isUSTerritory'])) {
            $qb->andWhere('country.isUSTerritory        =              :isUSTerritory')
                ->setParameter('isUSTerritory',                         $query['isUSTerritory']);
        }

        $qb->orderBy($query['orderBy']['field'], $query['orderBy']['order']);

        if ($query['lexicon'] == true) {
            $qb->addGroupBy('continent');
            $qb->addGroupBy('country.isEU');
            $qb->addGroupBy('country.isUK');
            $qb->addGroupBy('country.isUSTerritory');
            $result                                 =       $qb->getQuery()->getResult();

            $lexicon = [
                'continents'        =>  [],
            ];

            return $this->buildLexicon($lexicon, $result);
        } else if ($query['selector'] == true) {
            return $qb->getQuery()->getResult();
        } else
            return $this->paginate($qb->getQuery(), $query['limit']);
    }

    public function validateQuery($query) {
        $inputValidator             =   new InputValidator();
        $pagination                 =   $inputValidator->validatePagination(
            ArrayUtil::get($query['selector'], NULL),
            ArrayUtil::get($query['lexicon'], NULL),
            ArrayUtil::get($query['limit'], NULL),
            ArrayUtil::get($query['page'], NULL));

        return [
            'selector'              =>  $pagination['selector'],
            'lexicon'               =>  $pagination['lexicon'],
            'limit'                 =>  $pagination['limit'],
            'page'                  =>  $pagination['page'],
            'orderBy'               =>  [
                'field'             => 'continent.id',
                'order'             =>  'ASC'],

            'continents'            =>  $inputValidator->continentSearch(ArrayUtil::get($query['continentIds'], NULL), 'continentIds', true, false),
            'isEU'                  =>  $inputValidator->isBool(ArrayUtil::get($query['isEU'], NULL), 'isEU', true),
            'isUK'                  =>  $inputValidator->isBool(ArrayUtil::get($query['isUK'], NULL), 'isUK', true),
            'isUSTerritory'         =>  $inputValidator->isBool(ArrayUtil::get($query['isUSTerritory'], NULL), 'isUSTerritory', true),
        ];
    }


    private function buildLexicon($lexicon, $result) {
        $lexiconKeySet = array_keys($lexicon);
        foreach($result AS $resultItem) {
            foreach ($lexiconKeySet AS $lexiconKey) {
                $key = array_search($resultItem[$lexiconKey.'_'.'id'], array_column($lexicon[$lexiconKey], 'id'));
                if ($key !== false) {
                    $lexicon[$lexiconKey][$key]['total'] += $resultItem['total'];
                } else {
                    echo array_search($resultItem[$lexiconKey.'_'.'id'], array_column($lexicon[$lexiconKey], 'id')) . PHP_EOL;
                    array_push($lexicon[$lexiconKey], [
                        'id' => $resultItem[$lexiconKey.'_'.'id'],
                        'name' => $resultItem[$lexiconKey.'_'.'name'],
                        'total' => $resultItem['total']
                    ]);
                }
            }
        }
        return $lexicon;
    }


    /**
     * Query against any field with an array of values
     * @param $input
     * @param $namedInput
     * @param bool $required
     * @param bool $throwsError
     * @param bool $singleton
     * @return array|null
     */
    public function inputSearch($input, $namedInput, $required = true, $throwsError = true, $singleton = false) {
        $input                  =   trim($input);
        if ((is_null($input) || empty($input)) && $required == true) {
            if ($throwsError)
                throw new ValidationFailureException($namedInput . ' is required');
            else
                return null;
        }


        $symbolArray            =   explode(',', $input);
        $sizeOfInput            =   sizeof($symbolArray);

        if ($sizeOfInput == 0 && $throwsError == true) {
            $message            =   $namedInput . ' is required';
            throw new ValidationFailureException($message);
        } else if ($sizeOfInput == 0 && $throwsError == false) {
            return null;
        } else if ($sizeOfInput > 1 && $singleton == true) {        // Always throw the error here if singleton is expected to be true
            throw new ValidationFailureException('Country validation failed', ['Only one value expected']);
        }

        $result                 =   [];
        foreach ($symbolArray AS $symbol) {
            $result[]           =   $this->lazyQuery($symbol, $throwsError);
        }

        if ($singleton == true)
            return $result[0];
        else
            return $result;
    }

    public function lazyQuery($symbol, $throwsError = true) {
        if (is_numeric($symbol))
            return $this->queryId($symbol, $throwsError);
        else if (strlen($symbol) == 2)
            return $this->queryISO2($symbol, $throwsError);
        else if (strlen($symbol) == 3)
            return $this->queryISO3($symbol, $throwsError);
        else
            return $this->queryName($symbol, $throwsError);
    }

    public function queryId($id, $throwsError = true) {
        $result                 =   $this->find($id);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Country validation failed', ['Invalid id (' . $id. ')']);

        return $result;
    }


    public function queryISO2($iso2, $throwsError = true) {
        $result                 =   $this->findOneBy(['iso2' => $iso2]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Country validation failed', ['Invalid iso2 (' . $iso2 . ')']);

        return $result;
    }

    public function queryISO3($iso3, $throwsError = true) {
        $result                 =   $this->findOneBy(['iso3' => $iso3]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Country validation failed', ['Invalid iso3 (' . $iso3 . ')']);

        return $result;
    }

    public function queryName($name, $throwsError = true) {
        $result                 =   $this->findOneBy(['name' => $name]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Country validation failed', ['Invalid name (' . $name . ')']);

        return $result;
    }
}