<?php
namespace app\Repositories\Geography;


use app\Models\Geography\Address;
use LaravelDoctrine\ORM\Pagination\Paginatable;
use Doctrine\ORM\Query;

class AddressRepository extends BaseGeographyRepository
{

    use Paginatable;

    /**
     * Get a single Address object by its id
     * @param       int                 $id                 Id to query against
     * @return      Address|null
     */
    public function getOneById($id)
    {
        return $this->find($id);
    }
}