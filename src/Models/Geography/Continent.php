<?php
namespace app\Models\Geography;


use app\Utilities\ArrayUtil;
use Doctrine\Common\Collections\ArrayCollection;
use Respect\Validation\Validator as v;

class Continent implements \JsonSerializable
{

    /**
     * Unique id for the Continent
     * @var     int
     */
    public $id;
    /**
     * Unique name for the Continent
     * @var     string
     */
    public $name;
    /**
     * Unique name for the Continent
     * @var     string
     */
    public $symbol;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;

    /**
     * @var     ArrayCollection
     */
    protected $countries;

    public function __construct ($data = null)
    {
        $this->id                               =   NULL;
        $this->statusId                         =   1;

        $this->countries                        =   new ArrayCollection();

        if (is_array($data)) {
            $this->name                         =   ArrayUtil::get($data['name']);
            $this->symbol                       =   ArrayUtil::get($data['symbol']);
            $this->expiresAt                    =   ArrayUtil::get($data['expiresAt']);
        }
    }

    public function validate()
    {

    }

    public function jsonSerialize()
    {
        $continent                              =   call_user_func('get_object_vars', $this);
        return array_except($continent, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get all Country objects that belong to this Continent
     * @return      ArrayCollection
     */
    public function getCountries()
    {
        return $this->countries;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Add a Country object to the Continent
     * @param       Country $country
     */
    public function addCountry(Country $country)
    {
        $this->countries->add($country);
    }

    // END Setters

}