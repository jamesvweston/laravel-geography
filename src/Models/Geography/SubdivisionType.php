<?php

namespace app\Models\Geography;

use Respect\Validation\Validator as v;
use Doctrine\Common\Collections\ArrayCollection;

class SubdivisionType extends BaseModel implements \JsonSerializable {

    public $id;
    public $name;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    //  BEGIN manyToOne relationships
    protected $routeTransaction;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
    protected $subdivisions;
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

        $this->subdivisions                     =       new ArrayCollection();

        return [
            v::attribute('symbol',                      v::notEmpty()->alpha()->length(3, 50)->UniqueCarrierSymbol()),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $subdivisionType                        =       call_user_func('get_object_vars', $this);
        return array_except($subdivisionType, ['__initializer__', '__cloner__', '__isInitialized__']);
    }

    /**
     * Get an ArrayCollection of Subdivision objects that use this SubdivisionType
     * @return ArrayCollection
     */
    public function getSubdivisions() {
        return $this->subdivisions;
    }


}