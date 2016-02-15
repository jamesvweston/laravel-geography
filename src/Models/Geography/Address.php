<?php
namespace app\Models\Geography;


use Respect\Validation\Validator as v;
use app\Utilities\ArrayUtil;

class Address extends BaseModel implements \JsonSerializable
{

    /**
     * Unique id for the Address
     * @var         int
     */
    public $id;

    /**
     * Name of individual
     * @var         string
     */
    public $name;
    /**
     * Company name
     * @var         string
     */
    public $company;
    /**
     * @var         String
     */
    public $street1;
    /**
     * @var         String
     */
    public $street2;
    /**
     * @var         String
     */
    public $city;
    /**
     * @var         String
     */
    public $stateProvince;
    /**
     * @var         String
     */
    public $postalCode;
    /**
     * @var         String
     */
    public $phone;
    /**
     * @var         String
     */
    public $email;
    /**
     * @var         int
     */
    protected $statusId;
    /**
     * @var         \DateTime
     */
    protected $createdAt;
    /**
     * @var         \DateTime
     */
    protected $expiresAt;


    /**
     * @var     Subdivision|null
     */
    protected $subdivision;
    /**
     * @var     Country
     */
    protected $country;

    public function __construct ($data = null)
    {
        $this->id                               =   NULL;
        $this->statusId                         =   1;

        if (is_array($data))
        {
            $this->name                         =   ArrayUtil::get($data['name']);
            $this->company                      =   ArrayUtil::get($data['company']);
            $this->street1                      =   ArrayUtil::get($data['street1']);
            $this->street2                      =   ArrayUtil::get($data['street2']);
            $this->city                         =   ArrayUtil::get($data['city']);
            $this->stateProvince                =   ArrayUtil::get($data['stateProvince']);
            $this->postalCode                   =   ArrayUtil::get($data['postalCode']);
            $this->subdivision                  =   ArrayUtil::get($data['subdivision']);
            $this->country                      =   ArrayUtil::get($data['country']);
            $this->phone                        =   ArrayUtil::get($data['phone']);
            $this->email                        =   ArrayUtil::get($data['email']);
        }
    }

    public function validate()
    {

    }

    public function jsonSerialize()
    {
        $address                                =   $this->getPublicVars();
        $address['subdivision']                 =   !is_null($this->subdivision) ? $this->subdivision->jsonSerialize() : NULL;
        $address['country']                     =   !is_null($this->country) ? $this->country->jsonSerialize() : NULL;
        return array_except($address, ['__initializer__', '__cloner__', '__isInitialized__']);
    }

    /**
     * Get the Country for the Address
     * @return      Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the Subdivision for the Address
     * @return      Subdivision
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }
    // END Getters


    /**
     * Set the Country for the Address
     * @param       Country             $country
     */
    public function setCountry(Country $country)
    {
        $this->country                          =   $country;
    }

    /**
     * Set the Subdivision for the Address
     * @param       Subdivision         $subdivision
     */
    public function setSubdivision(Subdivision $subdivision)
    {
        $this->subdivision                      =   $subdivision;
    }

}
