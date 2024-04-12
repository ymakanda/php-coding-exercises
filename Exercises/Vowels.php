<?php

declare(strict_types=1);

namespace Exercises\Vowels;

/**
* Count string vowels (aeiou).
*
* @method static int count(string $string)
* @example Vowels::count('Hello!') === 2
* @example Vowels::count('Why?') === 0
*/

final class Vowels
{
    public static $vowels = array("a", "e", "i", "o", "u");
    public static $count = 0;

    public static function count(string $str): int {
        
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array(strtolower($str[$i]), self::$vowels)) {
                self::$count++;
            }
        }
        return self::$count;
    }
}

Vowels::count('Hello!') === 2;
Vowels::count('Why?') === 0;