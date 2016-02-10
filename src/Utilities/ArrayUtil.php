<?php
namespace app\Utilities;


class ArrayUtil
{

    public static function get (&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }

    /**
     * This function forces quantity to be at least 1
     */
    public static function getQuantity (&$var, $default = 1)
    {
        if (is_int($var) && $var > 0) {
            return $var;
        } else {
            return $default;
        }
    }

    /**
     * Tell whether all members of $array validate the $predicate.
     *
     * all(array(1, 2, 3),   'is_int'); -> true
     * all(array(1, 2, 'a'), 'is_int'); -> false
     */
    public static function all ($array, $predicate)
    {
        return array_filter($array, $predicate) === $array;
    }

    /**
     * Determines if passed array is made of just arrays
     *
     * Useful if you want to determine if an object is an array of values or array of arrays
     *
     * @param $array
     * @return bool
     */
    public static function isArrays ($array)
    {
        return ArrayUtil::all($array, 'is_array');
    }

    /**
     * Filter the array using the given callback.
     *
     * @param  array $array
     * @param  callable $callback
     * @return array
     */
    public static function where ($array, callable $callback)
    {
        $filtered = [];

        foreach ($array as $key => $value) {
            if (call_user_func($callback, $key, $value)) array_push($filtered, $value);
        }

        return $filtered;
    }

    /**
     * Returns an associate array form of a variable after decoded from json.
     *
     * If the variable is not in string format it is encoded as json first before being decoded.
     *
     * @param  mixed $source
     * @return array
     */
    public static function fromJson ($source)
    {
        if (!is_string($source)) {
            $string = json_encode($source);
        } else {
            $string = $source;
        }
        return json_decode($string, true);
    }

    /**
     * Generates random numbers and returns a quantity of them.
     *
     * @param  integer $min
     * @param  integer $max
     * @param  integer $quantity
     * @return array
     */
    public static function uniqueRandomNumbersWithinRange ($min, $max, $quantity)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    public static function multiexplode ($delimiters, $string)
    {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return $launch;
    }
}