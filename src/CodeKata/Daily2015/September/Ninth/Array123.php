<?php

namespace CodeKata\Daily2015\September\Ninth;

/**
 * Class Array123
 * @package CodeKata\Daily2015\September\Ninth
 *
 * http://codingbat.com/prob/p136041
 * Given an array of ints, return true if .. 1, 2, 3, .. appears in the array somewhere.
 */
class Array123
{
    public function array123(array $array)
    {
        foreach ($array as $key => $val) {
            if ($key > 2 && $val === 3 && $array[$key - 1] === 2 && $array[$key - 2] === 1) {
                return true;
            }
        }
        return false;
    }
}
