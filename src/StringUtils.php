<?php

namespace StringUtils;
class StringUtils
{
    public static function reverseString($string)
    {
        return strrev($string);
    }

    public static function changeCase($string, $case = 'upper')
    {
        return $case === 'upper' ? strtoupper($string) : strtolower($string);
    }

    public static function trimString($string)
    {
        return trim($string);
    }

    public static function isPalindrome($string)
    {
        $reversedString = strrev($string);
        return $string === $reversedString;
    }
}