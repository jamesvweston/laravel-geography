<?php namespace postage\Repositories;

use postage\Utilities\ArrayUtil;
use Doctrine\ORM\Query;
use postage\Utilities\StringUtil;
use postage\Exceptions\ValidationFailureException;

class SubdivisionRepository extends BaseRepository {

    function where($params) {
        $qb = $this->_em->createQueryBuilder();

        if (ArrayUtil::get($params['selector'], NULL)) {
            $qb->select(['subdivision.id, subdivision.name']);
        } else if (!is_null(ArrayUtil::get($params['lexicon'], NULL))) {
            $qb->select([
                'COUNT(subdivision.id) AS total',
                'country.id AS countries_id', 'country.name AS countries_name',
                'subdivisionType.id AS subdivisionTypes_id', 'subdivisionType.name AS subdivisionTypes_name',
            ]);
        } else {
            $qb->select(['subdivision']);
        }

        $qb->from('postage\Models\Subdivision', 'subdivision')
            ->innerJoin('subdivision.country', 'country', Query\Expr\Join::ON)
            ->innerJoin('subdivision.subdivisionType', 'subdivisionType', Query\Expr\Join::ON);

        if (!is_null(ArrayUtil::get($params['countryIds'], NULL))) {
            $qb->andWhere($qb->expr()->in('IDENTITY(subdivision.country)', $params['countryIds']));
        }

        if (!is_null(ArrayUtil::get($params['subdivisionTypeIds'], NULL))) {
            $qb->andWhere($qb->expr()->in('IDENTITY(subdivision.subdivisionType)', $params['subdivisionTypeIds']));
        }

        // Order by
        if (is_null(ArrayUtil::get($params['orderBy'], NULL))) {
            $qb->orderBy('subdivision.id', 'ASC');
        }


        if (is_null(ArrayUtil::get($params['lexicon'], NULL))) {
            return $qb->getQuery()->getResult();
        } else {
            $qb->addGroupBy('country');
            $qb->addGroupBy('subdivisionType');
            $result                                 =       $qb->getQuery()->getResult();

            $lexicon = [
                'countries'             =>  [],
                'subdivisionTypes'      =>  [],
            ];

            return $this->buildLexicon($lexicon, $result);
        }
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
            throw new ValidationFailureException('Subdivision validation failed', ['Only one value expected']);
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
        else if (sizeof($symbol) == 2)
            return $this->queryLocalSymbol($symbol, $throwsError);
        else if (StringUtil::isCamelUpper($symbol))
            return $this->querySymbol($symbol, $throwsError);
        else
            return $this->queryName($symbol, $throwsError);
    }

    public function queryId($id, $throwsError = true) {
        $result                 =   $this->find($id);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Subdivision validation failed', ['Invalid id (' . $id. ')']);

        return $result;
    }

    public function querySymbol($symbol, $throwsError = true) {
        $result                 =   $this->findOneBy(['symbol' => $symbol]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Subdivision validation failed', ['Invalid symbol (' . $symbol . ')']);

        return $result;
    }

    public function queryLocalSymbol($localSymbol, $throwsError = true) {
        $result                 =   $this->findOneBy(['localSymbol' => $localSymbol]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Subdivision validation failed', ['Invalid localSymbol (' . $localSymbol . ')']);

        return $result;
    }

    public function queryName($name, $throwsError = true) {
        $result                 =   $this->findOneBy(['name' => $name]);

        if (is_null($result) && $throwsError == true)
            throw new ValidationFailureException('Subdivision validation failed', ['Invalid name (' . $name . ')']);

        return $result;
    }
}