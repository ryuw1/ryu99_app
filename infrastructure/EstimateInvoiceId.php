<?php
namespace Infrastructure;

class EstimateInvoiceId
{
    public function estimateInvoiceId()
    {
        $time = explode(" ",microtime());
        $mctime = $time[0] + $time[1];
        $hid = $mctime*10000;
        $mid = (intval($hid)); 
        
        return $mid;
    }
}

$estimateInvoiceId = new estimateInvoiceId();

// Call the method and print the result
echo $estimateInvoiceId->estimateInvoiceId();