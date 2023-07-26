<?php
namespace Infrastructure;

class ZeroToNull
{
    //和暦の02年02月02日の「0」を抜く結果はarray返し
    public function __invoke($wa_s)
    {
            $ch_sy = substr($wa_s, 5, 2);
            if($ch_sy == "年"){
            $sy = substr($wa_s, 4, 1);
            $ch_sm = substr($wa_s, 7, 1);
            ($ch_sm == '0')?$sm = substr($wa_s, 8, 1):$sm = substr($wa_s, 7, 2);
            $ch_sd = substr($wa_s, 11, 1);
            ($ch_sd == '0')?$sd = substr($wa_s, 12, 1):$sd = substr($wa_s, 11, 2);
            $re0 = substr($wa_s, 0, 4) ;//元号
            $re1 = $sy;
            $re2 = $sm;
            $re3 = $sd; 
            }
            else{
            $sy = substr($wa_s, 4, 2);
            $ch_sm = substr($wa_s, 8, 1);
            ($ch_sm == '0')?$sm = substr($wa_s, 9, 1):$sm = substr($wa_s, 8, 2);
            $ch_sd = substr($wa_s, 12, 1);
            ($ch_sd == '0')?$sd = substr($wa_s, 13, 1):$sd = substr($wa_s, 12, 2);
            $re0 = substr($wa_s, 0, 4) ;//元号
            $re1 = $sy;
            $re2 = $sm;
            $re3 = $sd; 
        }
    }
}