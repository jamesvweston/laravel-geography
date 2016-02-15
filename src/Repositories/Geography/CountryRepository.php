<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Country;
use Doctrine\ORM\Query;
use LaravelDoctrine\ORM\Pagination\Paginatable;

class CountryRepository extends BaseGeographyRepository {

    use Paginatable;


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