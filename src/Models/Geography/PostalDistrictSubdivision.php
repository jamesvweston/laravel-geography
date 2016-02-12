<?php
namespace app\Models\Geography;


use Respect\Validation\Validator as v;
use Auth;

class PostalDistrictSubdivision extends BaseModel implements \JsonSerializable {

    public $id;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    //  BEGIN manyToOne relationships
    protected $routeTransaction;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
    protected $postalDistrict;
    protected $subdivision;
    //  END oneToMany relationships

    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');
        $this->routeTransaction                 =       Auth::getSession()->get('routeTransaction');

        if (is_array($data)) {
        }
    }

    protected function getValidationRules() {
        return [
            v::attribute('symbol',                      v::notEmpty()->alpha()->length(3, 50)->UniqueCarrierSymbol()),
            v::attribute('routeTransaction',            v::instance('app\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $postalDistrictSubdivision              =       call_user_func('get_object_vars', $this);
        return array_except($postalDistrictSubdivision, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get the PostalDistrict that owns the PostalDistrictSubdivision
     * @return PostalDistrict $postalDistrict
     */
    public function getPostalDistrict() {
        return $this->postalDistrict;
    }

    /**
     * Get the Subdivision for the PostalDistrictSubdivision
     * @return Subdivision $subdivision
     */
    public function getSubdivision() {
        return $this->subdivision;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the PostalDistrict for the PostalDistrictSubdivision
     * @param PostalDistrict $postalDistrict
     */
    public function setPostalDistrict(PostalDistrict $postalDistrict) {
        $this->postalDistrict = $postalDistrict;
    }
    /**
     * Set the Subdivision for the PostalDistrictSubdivision
     * @param Subdivision $subdivision
     */
    public function setSubDivision(Subdivision $subdivision) {
        $this->subdivision = $subdivision;
    }
    // END Setters

}