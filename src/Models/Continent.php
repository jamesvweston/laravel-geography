<?php namespace JamesVweston\LaravelGeography\Models;

use Respect\Validation\Validator as v;

class Continent implements \JsonSerializable {

    public $id;
    public $name;
    public $symbol;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    // BEGIN oneToMany relationships
    protected $countries;
    // END oneToMany relationships

    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');

        $this->countries                        =       new ArrayCollection();

        if (is_array($data)) {
            $this->name                         =       ArrayUtil::get($data['name'], '');
        }
    }

    protected function getValidationRules() {
        return [
            v::attribute('name',                        v::notEmpty()->length(1, 30)->alpha()),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $continent                              =       call_user_func('get_object_vars', $this);
        return array_except($continent, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get an ArrayCollection of Country objects that belong to this Continent
     * @return ArrayCollection Country
     */
    public function getCountries() {
        return $this->countries;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Add a Country object to the Continent
     * @param Country $country
     */
    public function addCountry(Country $country) {
        $this->countries->add($country);
    }

    // END Setters

}