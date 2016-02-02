<?php

namespace app\Models\Geography;

use Respect\Validation\Validator as v;

class Country implements \JsonSerializable {

    public $id;
    public $name;
    public $iso2;
    public $iso3;
    public $isoNumeric;
    public $fipsCode;
    public $capital;
    public $isEU;
    public $isUK;
    public $isUSTerritory;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    // BEGIN manyToOne relationships
    protected $currency;
    protected $continent;
    // END manyToOne relationships


    // BEGIN oneToMany relationships
    protected $subdivisions;
    protected $postalDistricts;
    protected $restrictedPostalCodeCharacters;
    protected $supportedPostalCodeCharacters;
    // END oneToMany relationships


    public function __construct ($data = null) {
        $this->id                               =       NULL;
        $this->statusId                         =       1;
        $this->createdAt                        =       new \DateTime();
        $this->expiresAt                        =       new \DateTime('2038-01-01 01:01:01');
        $this->routeTransaction                 =       Auth::getSession()->get('routeTransaction');

        $this->subdivisions                     =       new ArrayCollection();
        $this->postalDistricts                  =       new ArrayCollection();
        $this->restrictedPostalCodeCharacters   =       new ArrayCollection();
        $this->supportedPostalCodeCharacters    =       new ArrayCollection();

        if (is_array($data)) {
            $this->name                         =       ArrayUtil::get($data['name'], '');
            $this->iso2                         =       ArrayUtil::get($data['iso2'], '');
            $this->iso3                         =       ArrayUtil::get($data['iso3'], '');
            $this->isoNumeric                   =       ArrayUtil::get($data['isoNumeric'], '');
            $this->fipsCode                     =       ArrayUtil::get($data['fipsCode'], '');
            $this->capital                      =       ArrayUtil::get($data['capital'], '');
            $this->continent                    =       ArrayUtil::get($data['continent'], '');
            $this->isEU                         =       ArrayUtil::get($data['isEU'], '');
            $this->isUK                         =       ArrayUtil::get($data['isUK'], '');
            $this->isUSTerritory                =       ArrayUtil::get($data['isUSTerritory'], '');
        }
    }

    protected function getValidationRules() {
        return [
            v::attribute('name',                        v::notEmpty()->length(1, 30)->alpha()),
            v::attribute('iso2',                        v::notEmpty()->length(2, 2)->alpha()),
            v::attribute('iso3',                        v::notEmpty()->length(3, 3)->alpha()),
            v::attribute('isoNumeric',                  v::notEmpty()->length(3, 3)->int()),
            v::attribute('fipsCode',                    v::notEmpty()->length(2, 2)->int()),
            v::attribute('capital',                     v::length(null, 50)->alpha()),
            v::attribute('continent',                   v::instance('postage\\Models\\Continent')),
            v::attribute('isEU',                        v::bool()),
            v::attribute('isUK',                        v::bool()),
            v::attribute('isUSTerritory',               v::bool()),
            v::attribute('routeTransaction',            v::instance('postage\\Models\\RouteTransaction')),
            v::attribute('statusId',                    v::notEmpty()->int()->positive()),
            v::attribute('createdAt',                   v::notEmpty()->date()),
            v::attribute('expiresAt',                   v::notEmpty()->date()),
        ];
    }

    public function jsonSerialize() {
        $country                                =       call_user_func('get_object_vars', $this);
        $country['continent']                   =       !is_null($this->continent) ? $this->continent->jsonSerialize() : null;
        return array_except($country, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get the Continent that the country belongs to
     * @return Continent
     */
    public function getContinent() {
        return $this->continent;
    }

    /**
     * Get the primary Currency object that the Country uses
     * @return Currency
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Get an ArrayCollection of PostalCodeRestrictedCharacter objects for this Country
     * @return ArrayCollection
     */
    public function getRestrictedPostalCodeCharacters() {
        return $this->restrictedPostalCodeCharacters;
    }

    /**
     * Get an ArrayCollection of PostalCodeSupportedCharacter objects for this Country
     * @return ArrayCollection
     */
    public function getSupportedPostalCodeCharacters() {
        return $this->supportedPostalCodeCharacters;
    }

    /**
     * Get an ArrayCollection of Subdivision objects for this Country
     * @return ArrayCollection
     */
    public function getSubdivisions() {
        return $this->subdivisions;
    }

    /**
     * Get an ArrayCollection of PostalDistrict objects for this Country
     * @return ArrayCollection
     */
    public function getPostalDistricts() {
        return $this->postalDistricts;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the Continent that the Country belongs to
     * @param Continent $continent
     */
    public function setContinent(Continent $continent) {
        $this->continent = $continent;
    }

    /**
     * Set the Currency for the Country
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
    }

    /**
     * Add a Subdivision object to the Country
     * @param Subdivision $subdivision
     */
    public function addSubdivision(Subdivision $subdivision) {
        $this->subdivisions->add($subdivision);
    }

    /**
     * Add a PostalDistrict object to the Country
     * @param PostalDistrict $postalDistrict
     */
    public function addPostalDistrict(PostalDistrict $postalDistrict) {
        $this->postalDistricts->add($postalDistrict);
    }

    /**
     * Add a PostalCodeRestrictedCharacter object to the Country
     * @param PostalCodeRestrictedCharacter $restrictedPostalCodeCharacter
     */
    public function addRestrictedPostalCodeCharacter(PostalCodeRestrictedCharacter $restrictedPostalCodeCharacter) {
        $this->restrictedPostalCodeCharacters->add($restrictedPostalCodeCharacter);
    }

    /**
     * Add a PostalCodeSupportedCharacter object to the Country
     * @param PostalCodeSupportedCharacter $postalCodeSupportedCharacter
     */
    public function addSupportedPostalCodeCharacter(PostalCodeSupportedCharacter $postalCodeSupportedCharacter) {
        $this->supportedPostalCodeCharacters->add($postalCodeSupportedCharacter);
    }
    // END Setters


    // General Helpers
    /**
     * Get the Country object that should be used for zoning and rating lookups
     * @return Country
     */
    public function getZoneCountry() {
        if ($this->isUSTerritory AND $this->iso2 != 'US') {
            $countryRepo                        =       RegistryManager::getManager()->getRepository('postage\Models\Country');
            $usCountry                          =       $countryRepo->findOneBy(['iso2' => 'US']);
            return $usCountry;
        } else {
            return $this;
        }
    }
}