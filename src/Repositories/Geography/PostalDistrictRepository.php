<?php
namespace app\Repositories\Geography;


use app\Models\Geography\PostalDistrict;
use Doctrine\ORM\Query;
use LaravelDoctrine\ORM\Pagination\Paginatable;

class PostalDistrictRepository extends BaseGeographyRepository
{

    use Paginatable;


    /**
     * Get a single PostalDistrict object by its id
     * @param       int                 $id                 Id to query against
     * @return      PostalDistrict|null
     */
    public function getOneById($id)
    {
        return $this->find($id);
    }

    /**
     * Get a single PostalDistrict object by its name
     * @param       string              $name               Name to query against
     * @return      PostalDistrict|null
     */
    public function getOneByName($name)
    {
        return $this->findOneBy(['name' => $name]);
    }

    /**
     * Get a single PostalDistrict object by its symbol
     * @param       string              $symbol             Symbol to query against
     * @return      PostalDistrict[]
     */
    public function getOneBySymbol($symbol)
    {
        return $this->findOneBy(['symbol' => $symbol]);
    }

    public function getAllCanadianPostalDistricts()
    {
        return $this->findBy([
            'countryId'     =>  38
        ]);
    }
}