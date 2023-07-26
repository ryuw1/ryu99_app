<?php
namespace Infrastructure;

class WeekdayFromDate {
    public function Youbi($hi){
        $youbiArray = array("(日)", "(月)", "(火)", "(水)", "(木)", "(金)", "(土)");
        $youbiIndex = date("w", strtotime($hi));
        return $youbiArray[$youbiIndex];
    }
}