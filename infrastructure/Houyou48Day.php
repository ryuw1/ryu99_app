<?php
namespace Infrastructure;

class Houyou48Day
{
    //満中陰法要　西暦受け西暦返し
    public function __invoke($meinichi)
    {
        $yyyy = substr($meinichi, 0, 4) ;
        $mm = substr($meinichi, 5, 2);
        $dd = substr($meinichi, -2);
        $int = 48;
        $yon_hi = date("Y-m-d", mktime(0, 0, 0, $mm, $dd + $int, $yyyy));
        return $yon_hi;
        //end 満中陰法要
    }
}