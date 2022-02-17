<?php

// подбор идеальной  пары
function getPerfectPartner($surname, $name, $patronomyc, $array) {
    $firstMen = mb_convert_case(getFullnameFromParts($surname, $name, $patronomyc), MB_CASE_TITLE_SIMPLE);
    $genderFirstMen = getGenderFromName($firstMen);
    $i = 0;
    while ($i < 100) {
        $a = rand(0, count($array) - 1);
        $secondMen = $array[$a]['fullname'];
        $genderSecondMen = getGenderFromName($secondMen);
        if (($genderFirstMen == 1 && $genderSecondMen == -1) || ($genderFirstMen == -1 && $genderSecondMen == 1)) {
            echo getShortName($firstMen)." + ".getShortName($secondMen)."=<br>";
            echo "\u{1F495} Идеально на ".round(random_float(50, 100), 2)."% \u{1F495}";
            break;
        };
        $i ++;
        if ($i == 99) echo "Пару подобрать невозможно";
    } 
};