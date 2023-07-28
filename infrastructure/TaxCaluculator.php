<?php
namespace Infrastructure;

class TaxCalculator implements TaxCalcInterface {
    //税抜き価格を取り税額をプラスした合計返す
    public function plus10PercentTax(float $price): float {
        return $price * 1.10;
    }

    public function plus8PercentTax(float $price): float {
        return $price * 1.08;
    }
    public function plus0PercentTax(float $price): float {
        return $price;
    }
    //税込み価格を引数に取り、その中の税額を割り出す非課税対応
    public function extractTax(float $priceIncludingTax, float $taxRate): float {
        if ($taxRate == 0) {
            return 0;
        } else {
            return $priceIncludingTax / (1 + $taxRate) * $taxRate;
        }
    }
}