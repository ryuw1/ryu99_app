<?php

namespace infrastructure;

interface AdJpCalenderCompatibilityInterface
{
   public function adForJp($yyyy, $op);
   public function jpForAd($jp);
}