<?php
namespace Infrastructure;

class PullDownForJpCalendor
{//和暦で受けて和暦でプルダウン表示する
    function pullWareki($yyyy)
    {
        $wareki1 = substr($yyyy, 0, 4);
        $wareki2 = ltrim(substr($yyyy, 4, 2), '0');
        $wareki3 = ltrim(substr($yyyy, 8, 2), '0');
        $wareki4 = ltrim(substr($yyyy, 12, 2), '0');

        $warekiOptions = ["令和", "平成", "昭和", "大正", "明治"];
        $selectedOptions = array_fill_keys($warekiOptions, '');
        if (isset($selectedOptions[$wareki1])) {
            $selectedOptions[$wareki1] = 'selected';
        }

        echo '<select name="wareki1">';
        foreach ($warekiOptions as $option) {
            echo "<option value=\"$option\" {$selectedOptions[$option]} >$option</option>";
        }
        echo '</select>';

        $gen0 = date('Y');
        $nen0 = substr($gen0, 0, 4);
        $gen1 = $nen0 - 1987;
        $gen2 = substr($yyyy, 0, 4);
        $gen3 = substr($yyyy, 4, 2);
        $gen = match ($gen2) {
            "令和" => $gen1,
            "平成" => 31,
            "昭和" => 65,
            "大正" => 16,
            "明治" => 46,
            default => 0,
        };

        echo $this->generateSelect('wareki2', $gen, $wareki2);
        echo '年';
        echo $this->generateSelect('wareki3', 12, $wareki3);
        echo '月';
        echo $this->generateSelect('wareki4', 31, $wareki4);
        echo '日';
    }

    function generateSelect($name, $max, $selected)
    {
        $output = "<select name=\"$name\">";
        for ($i = 1; $i <= $max; $i++) {
            $isSelected = $i == $selected ? 'selected="selected"' : '';
            $output .= "<option value=\"$i\" $isSelected>$i</option>";
        }
        $output .= '</select>';
        return $output;
    }
}
