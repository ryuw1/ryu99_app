<?php

use Tests\TestCase;
use Infrastructure\SumCalculator;
class SumCalculatorTest extends TestCase
{
    public function testSum()
    {
        $calculator = new SumCalculator();

        $this->assertEquals(15, $calculator->sum(1, 2, 3, 4, 5));
        $this->assertEquals(10, $calculator->sum(2, 3, 5));
        $this->assertEquals(0, $calculator->sum());
    }
}
