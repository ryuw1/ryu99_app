<?php
 namespace infrastructure;
    interface TotalInterface
    {

            public function sum(...$numbers): int;

            public function subtraction($number, ...$numbers): int;
        
            public function multiplication($number, ...$numbers): int;
        
            public function division($number, ...$numbers): int;
            }   
