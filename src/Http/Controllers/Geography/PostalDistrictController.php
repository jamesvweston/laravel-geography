<?php
namespace app\Http\Controllers\Geography;

use Illuminate\Http\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class PostalDistrictController
{

    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $_em;
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $postalDistrictRepo;

    /**
     * CountryController constructor.
     * @param ManagerRegistry $reg
     */
    private function __construct (ManagerRegistry $reg)
    {
        $this->_em                  =   $reg->getManager();
        $this->postalDistrictRepo   =   $this->_em->getRepository('app\Models\Geography\PostalDistrict');
    }

    public function index(Request $request)
    {
        $query      =       [
            'limit'             =>      $request->input('limit'),
            'page'              =>      $request->input('page')
        ];

        return $this->postalDistrictRepo->where($query);
    }

    public function show(Request $request)
    {

    }

}