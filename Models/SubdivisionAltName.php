<?php namespace postage\Models;

use Respect\Validation\Validator as v;
use Auth;

class SubdivisionAltName extends BaseModel implements \JsonSerializable {

    public $id;
    public $name;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    //  BEGIN manyToOne relationships
    protected $routeTransaction;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
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
        v::with('postage\\Models\\Validation\\');

        return [
            v::attribute('symbol',                      v::notEmpty()->alpha()->length(3, 50)->UniqueCarrierSymbol()),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $subdivisionAltName                     =       call_user_func('get_object_vars', $this);
        $subdivisionAltName['subdivision']      =       $this->subdivision;
        return array_except($subdivisionAltName, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get the Subdivision object for the SubdivisionAltName
     * @return Subdivision
     */
    public function getSubdivision() {
        return $this->subdivision;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the Subdivision for the SubdivisionAltName
     * @param Subdivision $subdivision
     */
    public function setSubdivision(Subdivision $subdivision) {
        $this->subdivision = $subdivision;
    }
    // END Setters


}