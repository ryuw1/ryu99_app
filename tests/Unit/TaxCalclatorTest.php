<?php
// tests\Unit\TaxCalculatorTest.php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Infrastructure\TaxCalcInterface;
use Infrastructure\TaxCalclator;

class TaxCalculatorTest extends TestCase
{
    public function testPlus10PercentTax()
    {
        $taxCalc = new TaxCalclator();
        $result = $taxCalc->plus10PercentTax(100);
        $this->assertEquals(110, $result);
    }

    public function testPlus8PercentTax()
    {
        $taxCalc = new TaxCalclator();
        $result = $taxCalc->plus8PercentTax(100);
        $this->assertEquals(108, $result);
    }

    public function testPlus0PercentTax()
    {
        $taxCalc = new TaxCalclator();
        $result = $taxCalc->plus0PercentTax(100);
        $this->assertEquals(100, $result);
    }

    public function testExtractTax()
    {
        $taxCalc = new TaxCalclator();
        $result = $taxCalc->extractTax(108, 8);
        $this->assertEquals(8, $result);
    }
}
