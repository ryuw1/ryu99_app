<?php
namespace Tests\Unit;

use Tests\TestCase;
use Infrastructure\IncludingTaxFromTaxExcluded;
class IncludingTaxFromTaxExcluded extends TestCase
{
    public function testCalculateWith10PercentTax()
    {
        $calculator = new IncludingTaxFromTaxExcluded;
        $price = 1000;
        $expectedPrice = $price * 1.10;

        $this->assertEquals($expectedPrice, $calculator->calculateWith10PercentTax($price));
    }

    public function testCalculateWith8PercentTax()
    {
        $calculator = new IncludingTaxFromTaxExcluded;
        $price = 1000;
        $expectedPrice = $price * 1.08;

        $this->assertEquals($expectedPrice, $calculator->calculateWith8PercentTax($price));
    }
}
