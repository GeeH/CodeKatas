<?php

namespace CodeKata\Daily2015\September\Eighth;

/**
 * Class NotString
 * @package CodeKata\Daily2015\September\Eighth
 *
 * http://codingbat.com/prob/p191914
 *
 * Given a string, return a new string where "not " has been added to the front. However, if the string already begins
 * with "not", return the string unchanged.
 */
class NotString
{
    /**
     * @param $string
     * @return string
     */
    public function notString($string)
    {
        $string = (string)$string;
        if (strpos($string, 'not') === 0) {
            return $string;
        }
        return 'not ' . $string;
    }
}
