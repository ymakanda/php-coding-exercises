<?php
declare(strict_types=1);
namespace Exercises\Denominator;
/**
* Given an amount and an array of denominations, return an array
* of denominations and numbers.
*
* @method static array getDenominations(int $amount, ?array &$denominations)
* For example,
* Denominator::getDenominations(200, [50 => 5]) returns [50 => 4]
* Denominator::getDenominations(300, [50 => 0, 100 => 6]) returns [100 =>3]
* Denominator::getDenominations(750, [50 => 1, 300 => 2, 100 => 1] returns [50 => 1, 300 => 2, 100 => 1]
*
*/
final class Denominator
{
    public static function getDenominations($amount, $denominations) {
        $result = [];

        foreach ($denominations as $denomination => $value) {
            $count = min(floor($amount / $denomination), $value); // Calculate the number of denominations needed
            
            $amount -= $count * $denomination; // Update the amount and store the count in the result array
            if ($count > 0) {
                $result[$denomination] =$count;
                
            }

            if ($amount === 0) { 
                break;
            }
        }

        return $result;
    }
}
print_r(Denominator::getDenominations(200, [50 => 5]));
print_r(Denominator::getDenominations(300, [50 => 0, 100 => 6]));
print_r(Denominator::getDenominations(750, [50 => 1, 300 => 2, 100 => 1]));
