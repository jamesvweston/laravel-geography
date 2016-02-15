<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Continent;
use LaravelDoctrine\ORM\Pagination\Paginatable;
use Doctrine\ORM\Query;

class ContinentRepository extends BaseGeographyRepository
{

    use Paginatable;


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
     * Get the Antartica continent object
     * @return      Continent
     */
    public function getAntartcica()
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