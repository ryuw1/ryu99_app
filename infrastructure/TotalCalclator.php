<?php
namespace infrastructure;

class TotalCalculator implements TotalInterface
{
    public function sum(...$numbers): int
    {
        return array_sum($numbers);
    }

    public function subtraction($number, ...$numbers): int
    {
        return array_reduce($numbers, function($carry, $item) {
            return $carry - $item;
        }, $number);
    }

    public function multiplication($number, ...$numbers): int
    {
        return array_reduce($numbers, function($carry, $item) {
            return $carry * $item;
        }, $number);
    }

    public function division($number, ...$numbers): int
    {
        return array_reduce($numbers, function($carry, $item) {
            if ($item == 0) {
                throw new Exception("Division by zero error");
            }
            return $carry / $item;
        }, $number);
    }
}
