<?php
namespace App\Infrastructure;
//西暦和暦相互変換
class AdJpCalenderCompatibility
{ 
//西暦=>和暦
function adForJp($yyyy,$op) {
    //日付まで厳密に区分する081121
        $yaer = substr($yyyy, 0,4);
        $month = substr($yyyy, 5,2);
        $day = substr($yyyy, -2);
        $ad = $yaer.$month.$day;
        $ad = (int)$ad;
            switch ($ad) {
                case $ad >= 20190501:
                    $gengo_s = "R";
                    $gengo = "令和";
                    $y = substr($ad, 0, 4);
                    $yy_wa = $y - 2018;
                    break;
                case $ad >= 19890108:
                    $gengo_s = "H";
                    $gengo = "平成";
                    $y = substr($ad, 0, 4);
                    $yy_wa = $y - 1988;
                    break;
                case $ad >= 19261225:
                    $gengo_s = "S";
                    $gengo = "昭和";
                    $y = substr($ad, 0, 4);
                    $yy_wa = $y - 1925;
                    break;
                case $ad >= 19120730:
                    $gengo_s = "T";
                    $gengo = "大正";
                    $y = substr($ad, 0, 4);
                    $yy_wa = $y - 1911;
                    break;
                case $ad >= 18680000:
                    $gengo_s = "M";
                    $gengo = "明治";
                    $y = substr($ad, 0, 4);
                    $yy_wa = $y - 1867;
                    break;
                default:
            return FALSE;
        }
if ($yy_wa == 1) {
$yy_wa = "元";
}

$temp = $gengo.$yy_wa."年".$month."月".$day."日";
//if($temp == '昭和45年01月01日'){$temp = '－－--年--月--日';}
$temp2 = $gengo_s." ".$yy_wa." "."-"." ".$month." "."-"." ".$day;
if($op=='1'){
return $temp;
}
if($op=='2'){
return $temp2;
}
}
}
/*
//和暦=>西暦
function jpForAd($jp) {
// 元号と年の取得
$wa = substr($ware, 0,4 );//元号
$year = substr($ware, 4,2 );//年

    switch ($wa) {
        case $wa == "令和":
            if ($year == "元") {
                $year = 1;
            }
            $yy_sei = 2018 + $year;
            break;
        case $wa == "平成":
            if ($year == "元") {
                $year = 1;
            }
             $yy_sei = 1988 + $year;
            break;
		case $wa == "昭和":
            if ($year == "元") {
                $year = 1;
            }
             $yy_sei = 1925 + $year;
            break;
		case $wa == "大正":
            if ($year == "元") {
                $year = 1;
            }
             $yy_sei = 1911 + $year;
            break;		
		case $wa == "明治":
            if ($year == "元") {
                $year = 1;
            }
             $yy_sei = 1867 + $year;
            break;
        default:
        return FALSE;
            }
return $yy_sei;//西暦のみ返す
 }
}
*/