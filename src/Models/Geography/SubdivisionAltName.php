<?php
namespace app\Models\Geography;


use Respect\Validation\Validator as v;
use Auth;

class SubdivisionAltName extends BaseModel implements \JsonSerializable
{

    public $id;
    public $name;
    protected $statusId;
    protected $createdAt;
    protected $expiresAt;


    /**
     * @var     Subdivision
     */
    protected $subdivision;

    public function __construct ($data = null)
    {
        $this->id                               =   NULL;
        $this->statusId                         =   1;
        $this->createdAt                        =   new \DateTime();
        $this->expiresAt                        =   new \DateTime('2038-01-01 01:01:01');

        if (is_array($data))
        {

        }
    }

    public function validate()
    {

    }

    public function jsonSerialize()
    {
        $subdivisionAltName                     =   call_user_func('get_object_vars', $this);
        $subdivisionAltName['subdivision']      =   $this->subdivision;
        return array_except($subdivisionAltName, ['__initializer__', '__cloner__', '__isInitialized__']);
    }


    // BEGIN Getters
    /**
     * Get the Subdivision object for the SubdivisionAltName
     * @return Subdivision
     */
    public function getSubdivision()
    {
        return $this->subdivision;
    }
    // END Getters


    // BEGIN Setters
    /**
     * Set the Subdivision for the SubdivisionAltName
     * @param Subdivision $subdivision
     */
    public function setSubdivision(Subdivision $subdivision)
    {
        $this->subdivision = $subdivision;
    }
    // END Setters


}