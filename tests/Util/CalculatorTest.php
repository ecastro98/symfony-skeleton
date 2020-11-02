<?php

namespace App\Tests\Util;

use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testIsAddingNumbers()
    {
        $a = 2;
        $b = 3;
        $expected = 5;

        $this->assertSame($expected, Calculator::sum($a, $b));
    }
}