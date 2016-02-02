<?php namespace postage\Models;

use Respect\Validation\Validator as v;
use Doctrine\Common\Collections\ArrayCollection;
use Auth;

class Subdivision extends BaseModel implements \JsonSerializable {

    public $id;
    public $name;
    public $symbol;
    public $localSymbol;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    //  BEGIN manyToOne relationships
    protected $altNames;
    protected $routeTransaction;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
    protected $country;
    protected $subdivisionType;
    //  END oneToMany relationships


    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');
        $this->routeTransaction                 =       Auth::getSession()->get('routeTransaction');

        $this->altNames                         =       new ArrayCollection();

        if (is_array($data)) {
        }
    }

    protected function getValidationRules() {

        return [
            v::attribute('symbol',                      v::notEmpty()->alpha()->length(3, 50)),
            v::attribute('localSymbol',                 v::notEmpty()->alpha()->length(1, 50)),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $subdivision                            =       call_user_func('get_object_vars', $this);
        $subdivision['subdivisionType']         =       $this->subdivisionType->jsonSerialize();
        $subdivision['country']                 =       $this->country->jsonSerialize();
        return array_except($subdivision, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get an ArrayCollection of SubdivisionAltName objects for this Subdivision
     * @return ArrayCollection
     */
    public function getAltNames() {
        return $this->altNames;
    }
    /**
     * Get the primary Country object that the Subdivision belongs to
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }
    /**
     * Get the primary SubdivisionType object for the Subdivision
     * @return SubdivisionType
     */
    public function getSubdivisionType() {
        return $this->subdivisionType;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Add a SubdivisionAltName object to the Subdivision
     * @param SubdivisionAltName $subdivisionAltName
     */
    public function addAltName(SubdivisionAltName $subdivisionAltName) {
        $this->altNames->add($subdivisionAltName);
    }
    /**
     * Set the Country that the Subdivision belongs to
     * @param Country $country
     */
    public function setCountry(Country $country) {
        $this->country = $country;
    }
    /**
     * Set the SubdivisionType for the Subdivision
     * @param SubdivisionType $subdivisionType
     */
    public function setSubdivisionType(SubdivisionType $subdivisionType) {
        $this->subdivisionType = $subdivisionType;
    }
    // END Setters

}