<?php

namespace app\Repositories\Geography;

use app\Utilities\ArrayUtil;
use Doctrine\ORM\Query;

class PostalDistrictRepository extends BaseGeographyRepository {

    function where($params) {
        $qb = $this->_em->createQueryBuilder();

        if (ArrayUtil::get($params['selector'], NULL)) {
            $qb->select(['postalDistrict.id, postalDistrict.name']);
        } else if (!is_null(ArrayUtil::get($params['lexicon'], NULL))) {
            $qb->select([
                'COUNT(postalDistrict.id) AS total',
                'country.id AS countries_id', 'country.name AS countries_name',
            ]);
        } else {
            $qb->select(['postalDistrict']);
        }

        $qb->from('app\Models\Geography\PostalDistrict', 'postalDistrict')
            ->innerJoin('postalDistrict.country', 'country', Query\Expr\Join::ON);


        if (!is_null(ArrayUtil::get($params['countryIds'], NULL))) {
            $qb->andWhere($qb->expr()->in('IDENTITY(postalDistrict.country)', $params['countryIds']));
        }

        // Order by
        if (is_null(ArrayUtil::get($params['orderBy'], NULL))) {
            $qb->orderBy('postalDistrict.id', 'ASC');
        }


        if (is_null(ArrayUtil::get($params['lexicon'], NULL))) {
            return $qb->getQuery()->getResult();
        } else {
            $qb->addGroupBy('country');
            $result                                 =       $qb->getQuery()->getResult();

            $lexicon = [
                'countries'         =>  [],
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

}