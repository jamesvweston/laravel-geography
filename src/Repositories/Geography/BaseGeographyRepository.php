<?php
namespace app\Repositories\Geography;


use app\Utilities\ArrayUtil;
use app\Utilities\StringUtil;
use app\Utilities\NumberUtil;
use Doctrine\ORM\EntityRepository;

class BaseGeographyRepository extends EntityRepository
{

    /**
     * Build attributes used for pagination
     * @param       []                      $data               Information used to construct
     * @param       int|null                $maxLimit           If provided limit is greater than this value, set is to this value
     * @param       int|null                $maxPage            If the provided page is greater than this value, restrict it to this value
     * @return      array                   $data               Everything needed for pagination
     */
    protected function buildPagination($data = null, $maxLimit = 5000, $maxPage = 100)
    {
        $data   =   is_array($data) ? $data : [];

        if (is_array($data))
        {
            $data['page']               =   ArrayUtil::get($data['page'], 1);
            $data['limit']              =   ArrayUtil::get($data['limit'], 80);
            $data['selector']           =   ArrayUtil::get($data['selector'], false);
            $data['lexicon']            =   ArrayUtil::get($data['lexicon'], false);
        }
        // page checks
        if (StringUtil::isEmptyOrNull($data['page']) || !NumberUtil::isPositiveInt($data['page']))
            $data['page']               =   1;

        if ($data['page'] > $maxPage)
            $data['page']               =   $maxPage;

        // limit checks
        if (StringUtil::isEmptyOrNull($data['limit']) || !NumberUtil::isPositiveInt($data['limit']))
            $data['limit']              =   80;

        if ($data['limit'] > $maxLimit)
            $data['limit']              =   $maxLimit;

        $data['lexicon']                =   ($data['lexicon'] == 1 || $data['lexicon'] === 'true') ? true : false;
        $data['selector']               =   ($data['selector'] == 1 || $data['selector'] === 'true') ? true : false;
        //  Both cannot be true. If both are true default the lexicon to false
        if ($data['lexicon'] && $data['selector'])
            $data['lexicon'] = false;

        return $data;
    }
}