<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Subdivision;
use Doctrine\ORM\Query;
use LaravelDoctrine\ORM\Pagination\Paginatable;

class SubdivisionRepository extends BaseGeographyRepository
{

    use Paginatable;


    /**
     * Get a single Subdivision object by its id
     * @param       int                 $id                 Id to query against
     * @return      Subdivision|null
     */
    public function getOneById($id)
    {
        return $this->find($id);
    }

    /**
     * Get a single Subdivision object by its symbol
     * @param       string              $symbol               Name to query against
     * @return      Subdivision|null
     */
    public function getOneBySymbol($symbol)
    {
        return $this->findOneBy(['symbol' => $symbol]);
    }



    /**
     * Get all Subdivisions in the United States
     * @return      Subdivision[]
     */
    public function getAllUnitedStatesSubdivisions()
    {
        return $this->findBy([
            'countryId'     =>  151
        ]);
    }

}