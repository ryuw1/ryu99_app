<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Infrastructure\TaxCalcInterface;

class TaxController extends Controller
{
    protected $taxCalc;

    public function __construct(TaxCalcInterface $taxCalc)
    {
        $this->taxCalc = $taxCalc;
    }

    public function calculate()
    {
        $price = 10000;
        $priceWithTax = $this->taxCalc->plus8PercentTax($price);
        $taxAmount = $this->taxCalc->extractTax($priceWithTax, 8);

        return response()->json([
            'price' => $price,
            'price_with_tax' => $priceWithTax,
            'tax_amount' => $taxAmount,
        ]);
    }
}