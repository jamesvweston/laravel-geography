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

    /**
     * @var     ArrayCollection
     */
    protected $subdivisions;

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
        $subdivisionType                        =   call_user_func('get_object_vars', $this);
        return array_except($subdivisionType, ['__initializer__', '__cloner__', '__isInitialized__']);
    }

    /**
     * Get an ArrayCollection of Subdivision objects that use this SubdivisionType
     * @return ArrayCollection
     */
    public function getSubdivisions()
    {
        return $this->subdivisions;
    }


}