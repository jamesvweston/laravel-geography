<?php
namespace app\Http\Controllers\Geography;


use Illuminate\Http\Request;
use Doctrine\Common\Persistence\ManagerRegistry;

class ContinentController
{

    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $_em;
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $continentRepo;

    /**
     * ContinentController constructor.
     * @param ManagerRegistry $reg
     */
    public function __construct(ManagerRegistry $reg)
    {
        $this->_em              =   $reg->getManager();
        $this->continentRepo    =   $this->_em->getRepository('app\Models\Geography\Continent');
    }

    public function index(Request $request)
    {
        $query      =       [
            'continentIds'      =>      $request->input('continentIds'),
            'continentNames'    =>      $request->input('continentNames'),
            'continentSymbols'  =>      $request->input('continentSymbols'),
            'limit'             =>      $request->input('limit'),
            'page'              =>      $request->input('page')
        ];

        return $this->continentRepo->where($query);
    }

    public function show(Request $request)
    {

    }

}