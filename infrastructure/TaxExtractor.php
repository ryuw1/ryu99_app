<?php 
namespace Infrastructure;

class TaxExtractor implements TaxCalcEx
    //税込み価格を引数に取り、その中の税額を割り出す非課税対応
{
    public function extractTax(float $priceIncludingTax, float $taxRate): float {
        if ($taxRate == 0) {
            return 0;
        } else {
            return $priceIncludingTax / (1 + $taxRate) * $taxRate;
        }
    }
}