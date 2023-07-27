<?php
namespace Infrastructure;

class TaxCalculator implements TaxCalcIn {
    public function calculateWith10PercentTax(float $price): float {
        return $price * 1.10;
    }

    public function calculateWith8PercentTax(float $price): float {
        return $price * 1.08;
    }
}