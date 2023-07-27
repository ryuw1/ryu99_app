<?php
namespace Infrastructure;

class TaxCalculator implements TaxCalcIn {
    //税抜き価格を取り税額をプラスした合計返す
    public function calculateWith10PercentTax(float $price): float {
        return $price * 1.10;
    }

    public function calculateWith8PercentTax(float $price): float {
        return $price * 1.08;
    }
    public function calculateWith0PercentTax(float $price): float {
        return $price;
    }
}