<?php namespace postage\Models;

use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validator as v;
use postage\Utilities\ArrayUtil;
use Auth;

class Address extends BaseModel implements \JsonSerializable {

    public $id;
    public $name;
    public $company;
    public $street1;
    public $street2;
    public $city;
    public $stateProvince;
    public $postalCode;
    public $phone;
    public $email;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;


    //  BEGIN manyToOne relationships
    protected $subdivision;
    protected $country;
    //  END manyToOne relationships

    //  BEGIN oneToMany relationships
    //  END oneToMany relationships

    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');

        if (is_array($data)) {
            $this->name                         =       ArrayUtil::get($data['name'], NULL);
            $this->company                      =       ArrayUtil::get($data['company'], NULL);
            $this->street1                      =       ArrayUtil::get($data['street1'], NULL);
            $this->street2                      =       ArrayUtil::get($data['street2'], NULL);
            $this->city                         =       ArrayUtil::get($data['city'], NULL);
            $this->stateProvince                =       ArrayUtil::get($data['stateProvince'], NULL);
            $this->postalCode                   =       ArrayUtil::get($data['postalCode'], NULL);
            $this->subdivision                  =       ArrayUtil::get($data['subdivision'], NULL);
            $this->country                      =       ArrayUtil::get($data['country'], NULL);
            $this->phone                        =       ArrayUtil::get($data['phone'], NULL);
            $this->email                        =       ArrayUtil::get($data['email'], NULL);
        }
    }

    protected function getValidationRules() {
        return [
            v::attribute('name',                        v::notEmpty()->length(3, 50)),
            v::attribute('company',                     v::length(NULL, 50)),
            v::attribute('street1',                     v::notEmpty()->length(3, 50)),
            v::attribute('street2',                     v::length(NULL, 50)),
            v::attribute('city',                        v::length(NULL, 50)),
            v::attribute('stateProvince',               v::oneOf(v::nullValue(), v::length(NULL, 50))),
            v::attribute('postalCode',                  v::oneOf(v::nullValue(), v::length(NULL, 50))),
            v::attribute('subdivision',                 v::oneOf(v::nullValue(), v::instance('postage\\Models\\Subdivision'))),
            v::attribute('country',                     v::instance('postage\\Models\\Country')),
            v::attribute('phone',                       v::oneOf(v::nullValue(), v::notEmpty()->length(NULL, 20))),
            v::attribute('email',                       v::length(NULL, 50)),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $address                                =       $this->getPublicVars();
        $address['subdivision']                 =       !is_null($this->subdivision) ? $this->subdivision->jsonSerialize() : NULL;
        $address['country']                     =       !is_null($this->country) ? $this->country->jsonSerialize() : NULL;
        return array_except($address, ['__initializer__', '__cloner__', '__isInitialized__']);
    }

    // BEGIN Getters

    /**
     * Get the Country for the Address
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * Get the Subdivision for the Address
     * @return Subdivision
     */
    public function getSubdivision() {
        return $this->subdivision;
    }
    // END Getters


    // BEGIN Setters

    /**
     * Set the Country for the Address
     * @param Country $country
     */
    public function setCountry(Country $country) {
        $this->country = $country;
    }

    /**
     * Set the Subdivision for the Address
     * @param Subdivision $subdivision
     */
    public function setSubdivision(Subdivision $subdivision) {
        $this->subdivision = $subdivision;
    }
    // END Setters
}
