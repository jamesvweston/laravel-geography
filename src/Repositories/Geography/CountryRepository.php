<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Country;
use app\Utilities\ArrayUtil;
use Doctrine\ORM\Query;
use LaravelDoctrine\ORM\Pagination\Paginatable;

class CountryRepository extends BaseGeographyRepository {

    use Paginatable;

    /**
     * Query against all fields
     * @param       []                      $query              Values to query against
     * @param       bool                    $ignorePagination   If true will not return pagination
     * @param       int                     $maxLimit           If provided limit is greater than this value, set is to this value
     * @param       int                     $maxPage            If the provided page is greater than this value, restrict it to this value
     * @return      Country[]|\Illuminate\Pagination\LengthAwarePaginator
     */
    function where ($query, $ignorePagination = true, $maxLimit = 5000, $maxPage = 100)
    {
        $pagination                 =   $this->buildPagination($query, $maxLimit, $maxPage);
        $qb                         =   $this->_em->createQueryBuilder();

        $qb->from('postage\Models\Country', 'country')
            ->leftJoin('country.continent', 'continent', Query\Expr\Join::ON)
            ->innerJoin('country.subdivisions', 'subdivision', Query\Expr\Join::ON);

        if (!is_null(ArrayUtil::get($query['countryIds'])))
            $qb->andWhere($qb->expr()->in('country.id', $query['countryIds']));

        if (!is_null(ArrayUtil::get($query['continentIds'])))
            $qb->andWhere($qb->expr()->in('continent.id', $query['continentIds']));

        if (!is_null(ArrayUtil::get($query['subdivisionIds'])))
            $qb->andWhere($qb->expr()->in('subdivision.id', $query['subdivisionIds']));

        if (!is_null(ArrayUtil::get($query['isEU'])))
        {
            $qb->andWhere('country.isEU                 =               :isEU')
                ->setParameter('isEU',                                  $query['isEU']);
        }

        if (!is_null(ArrayUtil::get($query['isUK'])))
        {
            $qb->andWhere('country.isUK                 =               :isUK')
                ->setParameter('isUK',                                  $query['isUK']);
        }

        if (!is_null(ArrayUtil::get($query['isUSTerritory'])))
        {
            $qb->andWhere('country.isUSTerritory        =              :isUSTerritory')
                ->setParameter('isUSTerritory',                         $query['isUSTerritory']);
        }

        $qb->orderBy('country.id', 'ASC');

        if ($ignorePagination)
            return $qb->getQuery()->getResult();
        else
            return $this->paginate($qb->getQuery(), $pagination['limit']);
    }


    /**
     * Get a single Country object by its id
     * @param       int                 $id                 Id to query against
     * @return      Country|null
     */
    public function getOneById($id)
    {
        return $this->find($id);
    }

    /**
     * Get a single Country object by its name
     * @param       string              $name               Name to query against
     * @return      Country|null
     */
    public function getOneByName($name)
    {
        return $this->findOneBy(['name' => $name]);
    }

    /**
     * Get a single Country object by its $iso2
     * @param       string              $iso2               ISO2 to query against
     * @return      Country|null
     */
    public function getOneByISO2($iso2)
    {
        return $this->findOneBy(['iso2' => $iso2]);
    }

    /**
     * Get a single Country object by its ISO3
     * @param       string              $iso3               ISO3 to query against
     * @return      Country|null
     */
    public function getOneByISO3($iso3)
    {
        return $this->findOneBy(['iso3' => $iso3]);
    }

    /**
     * Get a single Country object by its ISO Numeric
     * @param       string              $isoNumeric         ISO Numeric to query against
     * @return      Country|null
     */
    public function getOneByISONumeric($isoNumeric)
    {
        return $this->findOneBy(['isoNumeric' => $isoNumeric]);
    }

    /**
     * Get a single Country object by its FIPs Code
     * @param       string              $fipsCode           FIPs Code to query against
     * @return      Country|null
     */
    public function getOneByFIPSCode($fipsCode)
    {
        return $this->findOneBy(['fipsCode' => $fipsCode]);
    }



    /**
     * Get the Australia Country object
     * @return      Country|null
     */
    public function getAustralia()
    {
        return $this->find(8);
    }

    /**
     * Get the Canada Country object
     * @return      Country|null
     */
    public function getCanada()
    {
        return $this->find(27);
    }

    /**
     * Get the China Country object
     * @return      Country|null
     */
    public function getChina()
    {
        return $this->find(32);
    }

    /**
     * Get the France Country object
     * @return      Country|null
     */
    public function getFrance()
    {
        return $this->find(47);
    }

    /**
     * Get the Germany Country object
     * @return      Country|null
     */
    public function getGermany()
    {
        return $this->find(47);
    }

    /**
     * Get the Mexico Country object
     * @return      Country|null
     */
    public function getMexico()
    {
        return $this->find(104);
    }

    /**
     * Get the United Kingdom Country object
     * @return      Country|null
     */
    public function getUnitedKingdom()
    {
        return $this->find(50);
    }

    /**
     * Get the United States Country object
     * @return      Country|null
     */
    public function getUnitedStates()
    {
        return $this->find(151);
    }







    /**
     * Get all Countries in the European Union
     * @return      Country[]
     */
    public function getAllEuropeanCountries()
    {
        return $this->findBy([
            'isEU'      =>  true
        ]);
    }

    /**
     * Get all Countries in the United Kingdom
     * @return      Country[]
     */
    public function getAllUnitedKingdomCountries()
    {
        return $this->findBy([
            'isUK'      =>  true
        ]);
    }

    /**
     * Get all Countries that are US Territories
     * @return      Country[]
     */
    public function getAllUSTerritoryCountries()
    {
        return $this->findBy([
            'isUSTerritory'      =>  true
        ]);
    }

}