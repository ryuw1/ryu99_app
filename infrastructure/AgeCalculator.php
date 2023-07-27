<?php

namespace Infrastructure;

use DateTime;
class AgeCalculator {
    public function calculateAge(DateTime $today, DateTime $birthdate): int 
    {
        $interval = $today->diff($birthdate);
        return $interval->y;
    }
}