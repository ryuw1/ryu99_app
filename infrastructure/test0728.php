<?php
interface TaxCalc{
    public function plus10PercentTax(float $price): float;
    public function plus8PercentTax(float $price): float;
    public function plus0PercentTax(float $price): float;
    public function extractTax(float $priceIncludingTax, float $taxRate): float;
}
class TaxCalculator implements TaxCalc {
    public function plus10PercentTax(float $price): float {
        return $price * 1.10;
    }
    public function plus8PercentTax(float $price): float {
        return $price * 1.08;
    }
    public function plus0PercentTax(float $price): float {
        return $price;
    }
    public function extractTax(float $priceIncludingTax, float $taxRate): float {
        if ($taxRate == 0) {
            return 0;
        } else {
            return $priceIncludingTax / (1 + $taxRate) * $taxRate;
        }
    }
}
function fizz(TaxCalc $taxCalc):float
{
$buzz = $taxCalc->plus8PercentTax(10000);
return $buzz;
}

echo $fizz(10000);