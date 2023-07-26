<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Infrastructure\EstimateInvoiceId;

    class EstimateInvoiceIdTest extends TestCase
    {
        public function testEstimateInvoiceId()
        {
            $estimateInvoiceId = new EstimateInvoiceId();
    
            $invoiceId = $estimateInvoiceId->estimateInvoiceId();
    
            // Check that the return value is an integer
            $this->assertIsInt($invoiceId);
        }
    }