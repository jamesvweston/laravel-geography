<?php
namespace app\Models\Geography;


use app\Utilities\ArrayUtil;
use Doctrine\Common\Collections\ArrayCollection;
use Respect\Validation\Validator as v;

class Country implements \JsonSerializable
{

    /**
     * Unique id for the Country
     * @var     int
     */
    public $id;
    /**
     * Unique name for the Country
     * @var     string
     */
    public $name;
    /**
     * Unique two character string for the Country
     * @var     string
     */
    public $iso2;
    /**
     * Unique three character string for the Country
     * @var     string
     */
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


    public function __construct ($data = null)
    {
        $this->id                               =   NULL;
        $this->statusId                         =   1;
        $this->createdAt                        =   new \DateTime();
        $this->expiresAt                        =   new \DateTime('2038-01-01 01:01:01');

        $this->subdivisions                     =   new ArrayCollection();
        $this->postalDistricts                  =   new ArrayCollection();
        $this->restrictedPostalCodeCharacters   =   new ArrayCollection();
        $this->supportedPostalCodeCharacters    =   new ArrayCollection();

        if (is_array($data))
        {
            $this->name                         =   ArrayUtil::get($data['name']);
            $this->iso2                         =   ArrayUtil::get($data['iso2']);
            $this->iso3                         =   ArrayUtil::get($data['iso3']);
            $this->isoNumeric                   =   ArrayUtil::get($data['isoNumeric']);
            $this->fipsCode                     =   ArrayUtil::get($data['fipsCode']);
            $this->capital                      =   ArrayUtil::get($data['capital']);
            $this->continent                    =   ArrayUtil::get($data['continent']);
            $this->isEU                         =   ArrayUtil::get($data['isEU']);
            $this->isUK                         =   ArrayUtil::get($data['isUK']);
            $this->isUSTerritory                =   ArrayUtil::get($data['isUSTerritory']);
        }
    }

    public function validate()
    {

    }

    public function jsonSerialize()
    {
        $country                                =   call_user_func('get_object_vars', $this);
        $country['continent']                   =   !is_null($this->continent) ? $this->continent->jsonSerialize() : null;
        return array_except($country, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get the Continent that the country belongs to
     * @return Continent
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Get an ArrayCollection of Subdivision objects for this Country
     * @return ArrayCollection
     */
    public function getSubdivisions()
    {
        return $this->subdivisions;
    }

    /**
     * Get an ArrayCollection of PostalDistrict objects for this Country
     * @return ArrayCollection
     */
    public function getPostalDistricts()
    {
        return $this->postalDistricts;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the Continent that the Country belongs to
     * @param Continent $continent
     */
    public function setContinent(Continent $continent)
    {
        $this->continent = $continent;
    }

    /**
     * Add a Subdivision object to the Country
     * @param Subdivision $subdivision
     */
    public function addSubdivision(Subdivision $subdivision)
    {
        $this->subdivisions->add($subdivision);
    }

    /**
     * Add a PostalDistrict object to the Country
     * @param PostalDistrict $postalDistrict
     */
    public function addPostalDistrict(PostalDistrict $postalDistrict)
    {
        $this->postalDistricts->add($postalDistrict);
    }
    // END Setters

}