<?php
namespace Infrastructure;

interface TaxCalcIn {
    public function calculateWith10PercentTax(float $price): float;
    public function calculateWith8PercentTax(float $price): float;
    public function calculateWith0PercentTax(float $price): float ;
}