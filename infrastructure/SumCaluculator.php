<?php
namespace infrastructure;

class SumCalculator implements Total
{
    public function sum(...$numbers): int
    {
        return array_sum($numbers);
    }
    //引き算等追加する場合はココに追加
}