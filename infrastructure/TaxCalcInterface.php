<?php
namespace Infrastructure;

interface TaxCalcInterface
{//税抜き価格を引数に取り税込み価格を返す
    public function plus10PercentTax(float $price): float;
    public function plus8PercentTax(float $price): float;
    public function plus0PercentTax(float $price): float;
    //税込み価格を引数に取り、その中の税額を割り出す非課税対応
    public function extractTax(float $priceIncludingTax, float $taxRate): float;
}