<?php

namespace app\Models\Geography;

use Respect\Validation\Validator as v;
use Doctrine\Common\Collections\ArrayCollection;
use Auth;

class PostalDistrict extends BaseModel implements \JsonSerializable {

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

    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');

        if (is_array($data)) {
        }
    }

    protected function getValidationRules() {
        return [
            v::attribute('symbol',                      v::notEmpty()->alpha()->length(3, 50)->UniqueCarrierSymbol()),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $PostalDistrict                         =       call_user_func('get_object_vars', $this);
        return array_except($PostalDistrict, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters

    /**
     * Get the Country object that owns the PostalDistrict
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Get an ArrayCollection of Subdivision objects that this PostalDistrict owns
     * @return ArrayCollection
     */
    public function getSubdivisions() {
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
    public function setCountry(Country $country) {
        $this->country = $country;
    }

    /**
     * Add a Subdivision object that the PostalDistrict owns
     * @param Subdivision $subdivision
     */
    public function addSubdivision(Subdivision $subdivision) {
        $this->postalDistrictSubdivisions->add($subdivision);
    }
    // END Setters


}