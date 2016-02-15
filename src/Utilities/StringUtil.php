<?php
namespace app\Utilities;


class StringUtil {

    public static function isAlphaUpper($symbol)
    {
        return ctype_upper($symbol);
    }

    public static function isString($symbol)
    {
        if (is_numeric($symbol))
            return false;

        if (is_string($symbol))
            return true;
        return false;
    }

    public static function isBool($val)
    {
        switch (strtolower($val)) {
            case '1':
            case 'true':
            case '0':
            case 'false':
                return true;
            default:
                return false;
        }
    }

    /**
     * If $symbol is empty or null true is returned. Else false
     * @param       mixed               $symbol             The item to validate
     * @return      bool
     */
    public static function isEmptyOrNull($symbol)
    {
        if (is_null($symbol))
            return true;

        if (empty($symbol))
            return true;

        if (preg_match('/^\s*$/', $symbol))
            return true;

        return false;
    }

    /**
     * Checks if the value is a uppercase string that can have underscores
     * @param       mixed               $symbol             The value to check
     * @return      bool
     */
    public static function isSymbol($symbol)
    {
        $arr = explode('_', $symbol);
        foreach ($arr AS $temp) {
            if (!ctype_upper($temp))
                return false;
        }
        return true;
    }

    public static function isCamelUpper($symbol)
    {
        $arr = explode('_', $symbol);
        foreach ($arr AS $temp) {
            if (!ctype_upper($temp))
                return false;
        }
        return true;
    }

    public static function toBool($var)
    {
        switch (strtolower($var)) {
            case '1':
            case 'true':
                return true;
            case '0':
            case 'false':
                return false;
            default:
                return false;
        }
    }

    public static function hasCommas($val)
    {
        if (preg_match('/,/', (string)$val))
            return true;
        else
            return false;
    }
}