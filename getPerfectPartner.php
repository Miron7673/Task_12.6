<?php

// подбор идеальной пары. Если пол определить невозможно - выдаст сообщение о невозможности подбора.
function getPerfectPartner($surname, $name, $patronomyc, $array) 
{
    $firstMen = mb_convert_case(getFullnameFromParts($surname, $name, $patronomyc), MB_CASE_TITLE_SIMPLE);
    $genderFirstMen = getGenderFromName($firstMen);
    $i = 0;
    $result = 'Пару подобрать невозможно!';
    
    // в случае отсутвия совпадений М и Ж, и если пол определить невозможно - цикл делает 100 проходов и выдает отрицательный результат
    for ($i = 0; $i < 100; $i ++) {
        $a = rand(0, count($array) - 1);
        $secondMen = $array[$a]['fullname'];
        $genderSecondMen = getGenderFromName($secondMen);
        if (($genderFirstMen == 1 && $genderSecondMen == -1) || ($genderFirstMen == -1 && $genderSecondMen == 1)) {
            $result = getShortName($firstMen) . " + " . getShortName($secondMen) . "=<br>
            \u{1F495} Идеально на " . round(random_float(50, 100), 2) . "% \u{1F495}";
            break;
        }
    }
    return $result; 
}
