<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Continent;
use app\Utilities\ArrayUtil;
use LaravelDoctrine\ORM\Pagination\Paginatable;
use Doctrine\ORM\Query;

class ContinentRepository extends BaseGeographyRepository
{

    use Paginatable;

    /**
     * Query against all fields
     * @param       []                      $query              Values to query against
     * @param       bool                    $ignorePagination   If true will not return pagination
     * @param       int                     $maxLimit           If provided limit is greater than this value, set is to this value
     * @param       int                     $maxPage            If the provided page is greater than this value, restrict it to this value
     * @return      Continent[]|\Illuminate\Pagination\LengthAwarePaginator
     */
    function where($query, $ignorePagination = true, $maxLimit = 5000, $maxPage = 100)
    {
        $pagination                 =   parent::buildPagination($query, $maxLimit, $maxPage);
        $qb                         =   $this->_em->createQueryBuilder();
        $qb->from('postage\Models\Continent', 'continent');

        if (!is_null(ArrayUtil::get($query['continentIds'])))
            $qb->andWhere($qb->expr()->in('continent.id', $query['continentIds']));

        if (!is_null(ArrayUtil::get($query['countryIds'])))
        {
            $qb->leftJoin('continent.countries', 'country', Query\Expr\Join::ON);
            $qb->andWhere($qb->expr()->in('country.id', $query['countryIds']));
        }


        $qb->orderBy('continent.id', 'ASC');

        $qb->select(['continent']);

        if ($ignorePagination)
            return $qb->getQuery()->getResult();
        else
            return $this->paginate($qb->getQuery(), $pagination['limit']);
    }


    /**
     * Get a single Continent object by its id
     * @param       int                 $id                 Id to query against
     * @return      Continent|null
     */
    public function getOneById($id)
    {
        return $this->find($id);
    }

    /**
     * Get a single Continent object by its name
     * @param       string              $name               Name to query against
     * @return      Continent|null
     */
    public function getOneByName($name)
    {
        return $this->findOneBy(['name' => $name]);
    }

    /**
     * Get a single Continent object by its symbol
     * @param       string              $symbol             Symbol to query against
     * @return      Continent|null
     */
    public function getOneBySymbol($symbol)
    {
        return $this->findOneBy(['symbol' => $symbol]);
    }

    /**
     * Get the Africa continent object
     * @return      Continent
     */
    public function getAfrica()
    {
        return $this->find(1);
    }

    /**
     * Get the Antarctica continent object
     * @return      Continent
     */
    public function getAntarctica()
    {
        return $this->find(2);
    }

    /**
     * Get the Asia continent object
     * @return      Continent
     */
    public function getAsia()
    {
        return $this->find(3);
    }

    /**
     * Get the Europe continent object
     * @return      Continent
     */
    public function getEurope()
    {
        return $this->find(4);
    }

    /**
     * Get the North America continent object
     * @return      Continent
     */
    public function getNorthAmerica()
    {
        return $this->find(5);
    }

    /**
     * Get the Oceania continent object
     * @return      Continent
     */
    public function getOceania()
    {
        return $this->find(6);
    }

    /**
     * Get the South America continent object
     * @return      Continent
     */
    public function getSouthAmerica()
    {
        return $this->find(7);
    }

}