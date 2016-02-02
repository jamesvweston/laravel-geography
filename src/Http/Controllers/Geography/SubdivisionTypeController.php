<?php

namespace app\Http\Controllers\Geography;


use Illuminate\Http\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class SubdivisionTypeController
{

    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $_em;
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $subdivisionTypeRepo;

    /**
     * CountryController constructor.
     * @param ManagerRegistry $reg
     */
    private function __construct (ManagerRegistry $reg)
    {
        $this->_em              =   $reg->getManager();
        $this->subdivisionTypeRepo  =   $this->_em->getRepository('app\Models\Geography\SubdivisionType');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $query      =       [
            'limit'             =>      $request->input('limit'),
            'page'              =>      $request->input('page')
        ];

        return $this->subdivisionTypeRepo->where($query);
    }

    public function show(Request $request)
    {

    }


}