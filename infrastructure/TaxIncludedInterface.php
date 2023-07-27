<?php
namespace Infrastructure;

interface TaxIncluded
{
    //税抜き価格を引数に取り税込み価格を返す
    public function calculateWith10PercentTax(float $price): float;
    public function calculateWith8PercentTax(float $price): float;
}