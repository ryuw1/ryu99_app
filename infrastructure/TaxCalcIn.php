<?php
namespace Infrastructure;

interface TaxCalcIn
{
    public function extractTax(float $priceIncludingTax, float $taxRate): float;
}