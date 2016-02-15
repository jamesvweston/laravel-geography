<?php
namespace app\Models\Geography;


use Respect\Validation\Validator as v;
use Doctrine\Common\Collections\ArrayCollection;

class PostalDistrict extends BaseModel implements \JsonSerializable
{

    public $id;
    public $name;
    public $french;
    public $symbol;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    //  BEGIN manyToOne relationships
    protected $country;
    protected $routeTransaction;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
    protected $postalDistrictSubdivisions;
    //  END oneToMany relationships

    public function __construct ($data = null)
    {
        $this->id                               =   NULL;
        $this->statusId                         =   1;
        $this->createdAt                        =   new \DateTime();
        $this->expiresAt                        =   new \DateTime('2038-01-01 01:01:01');

        if (is_array($data))
        {

        }
    }

    public function validate()
    {

    }

    public function jsonSerialize()
    {
        $postalDistrict                         =   call_user_func('get_object_vars', $this);
        return array_except($postalDistrict, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters

    /**
     * Get the Country object that owns the PostalDistrict
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get an ArrayCollection of Subdivision objects that this PostalDistrict owns
     * @return ArrayCollection
     */
    public function getSubdivisions()
    {
        $postalDistrictSubdivisions = $this->postalDistrictSubdivisions->toArray();
        $subdivisions = [];
        foreach ($postalDistrictSubdivisions AS $tempA) {
            $subdivisions[] = $tempA->getSubdivision();
        }
        return $subdivisions;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the Country that owns the PostalDistrict
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * Add a Subdivision object that the PostalDistrict owns
     * @param Subdivision $subdivision
     */
    public function addSubdivision(Subdivision $subdivision)
    {
        $this->postalDistrictSubdivisions->add($subdivision);
    }
    // END Setters


}