<?php
namespace app\Utilities;


use Respect\Validation\Validator as v;

class NumberUtil
{

    public static function isInt($num)
    {
        return (int)$num == $num;
    }

    public static function isPositiveInt($num)
    {
        return v::notEmpty()->int()->positive()->validate($num);
    }

    public static function getIntValue($num)
    {
        return (int)$num;
    }



    public static function isFloat($num)
    {
        return (float)$num == $num;
    }

    public static function isPositiveFloat($num)
    {
        if (!NumberUtil::isFloat($num))
            return false;

        return (float)$num > 0;
    }

    public static function isNumeric($num)
    {
        return is_numeric($num);
    }
}