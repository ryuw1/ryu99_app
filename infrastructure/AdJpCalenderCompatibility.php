<?php
namespace Infrastructure;
//西暦和暦相互変換
class AdJpCalenderCompatibility implements AdJpCalenderCompatibilityInterface
{
    // 西暦=>和暦
    public function adForJp($yyyy, $op) {
        $year = substr($yyyy, 0, 4);
        $month = substr($yyyy, 5, 2);
        $day = substr($yyyy, -2);
        $ad = (int)($year . $month . $day);

        $eras = [
            ["start" => 20190501, "symbol" => "R", "name" => "令和", "offset" => 2019],
            ["start" => 19890108, "symbol" => "H", "name" => "平成", "offset" => 1988],
            ["start" => 19261225, "symbol" => "S", "name" => "昭和", "offset" => 1925],
            ["start" => 19120730, "symbol" => "T", "name" => "大正", "offset" => 1911],
            ["start" => 18680000, "symbol" => "M", "name" => "明治", "offset" => 1867]
        ];

        foreach ($eras as $era) {
            if ($ad >= $era["start"]) {
                $yy_wa = $year - $era["offset"];
                $yy_wa = ($yy_wa == 1) ? "元" : $yy_wa;
                $temp = $era["name"] . $yy_wa . "年" . $month . "月" . $day . "日";
                $temp2 = $era["symbol"] . " " . $yy_wa . " - " . $month . " - " . $day;
                return ($op == '1') ? $temp : $temp2;
            }
        }

        return FALSE;
    }

    // 和暦=>西暦
    public function jpForAd($jp) {
        $wa = mb_substr($jp, 0, 2); // 元号
        $year = mb_substr($jp, 2); // 年

        $eras = [
            ["name" => "令和", "offset" => 2019],
            ["name" => "平成", "offset" => 1988],
            ["name" => "昭和", "offset" => 1925],
            ["name" => "大正", "offset" => 1911],
            ["name" => "明治", "offset" => 1867]
        ];

        foreach ($eras as $era) {
            if ($wa === $era["name"]) {
                $year = ($year === "元") ? 1 : $year;
                return $era["offset"] + $year - 1;
            }
        }

        return FALSE;
    }
}
