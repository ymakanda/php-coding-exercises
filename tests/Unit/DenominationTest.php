<?php
declare(strict_types=1);

namespace Tests\Unit;

use Exercises\Denominator;
use PHPUnit\Framework\TestCase;

class DenominationTest extends TestCase
{
    public function test_if_is_valid_denominations(): void
    {
        $amount = 200;
        $denominations = [50 => 5];
        $expectedResult = [50 => 4];
        $result = Denominator::getDenominations($amount, $denominations);

        $this->assertEquals($expectedResult, $result);

        $amount = 200;
        $denominations = [50 => 5];
        $expectedResult = [50 => 4];
        $result = Denominator::getDenominations($amount, $denominations);

        $this->assertEquals($expectedResult, $result);

        $amount = 300;
        $denominations = [50 => 0, 100 => 6];
        $expectedResult = [100 =>3];
        $result = Denominator::getDenominations($amount, $denominations);

        $this->assertEquals($expectedResult, $result);
    }
    public function test_if_is_empty_denominations_array(): void
    {
        $amount = 750;
        $denominations = [50 => 1, 300 => 2, 100 => 1];
        $expectedResult = [50 => 1, 300 => 2, 100 => 1];
        $result = Denominator::getDenominations($amount, $denominations);
        $this->assertEquals($expectedResult, $result);
    }

    public function test_if_is_null_denominations_array(): void
    {
        $amount = 750;
        $denominations = null;
        $expectedResult = [];
        $result = Denominator::getDenominations($amount, $denominations);
        $this->assertEquals($expectedResult, $result);
    }
}
