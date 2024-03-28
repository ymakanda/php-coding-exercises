<?php
declare(strict_types=1);
namespace Exercises\Pyramid;
/**
* Print a pyramid.
*
* @method static void print(int $rows)
* @example Pyramid::print(3) -> ' # '
* ' ### '
* '#####'
*/
final class Pyramid
{
    public static function print(int $rows) {
       for($i = 1; $i <= $rows; $i++) {
        for($j=1; $j <= (2 * $rows) -1 ; $j++) {
            if($j >= $rows-($i-1) && $j <= $rows +($i - 1)) {
                echo "#";
            }else{
                echo "&nbsp;";
            }

        }
        echo "<br>";

       }
    }
}
echo Pyramid::print(3);
