<?php
namespace app\Repositories\Geography;


class SubdivisionAltNameRepository extends BaseGeographyRepository
{

    function where($query) {
        $qb = $this->_em->createQueryBuilder()
            ->select(['subdivisionAltName'])
            ->from('app\Models\Geography\SubdivisionAltName', 'subdivisionAltName');


        // Order by
        if (is_null(ArrayUtil::get($query['orderBy'], NULL))) {
            $qb->orderBy('subdivisionAltName.id', 'ASC');
        }

        $limit                                  =       is_null(ArrayUtil::get($query['limit'], NULL)) ? 80 : (int)$query['limit'];
        $qb->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

}