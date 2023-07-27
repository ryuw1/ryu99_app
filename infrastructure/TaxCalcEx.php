<?php
namespace Infrastructure;

interface TaxCalcEx {
    public function extractTax(float $priceIncludingTax, float $taxRate): float;
}