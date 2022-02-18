<?php

// определение возрастно-полового состава
function getGenderDescription($array) 
{
    $lenghtArray = count($array);
    $male = 0;
    $female = 0;
    $neuter = 0;
    $i = 0;

    foreach ($array as $arr) {
        switch (getGenderFromName($array[$i]['fullname'])) {
            case 1: $male ++; break;
            case -1: $female ++; break;
            case 0: $neuter ++; break;
        }
        $i ++;
    }

    $male = round(($male * 100 / $lenghtArray), 1);
    $female = round(($female * 100 / $lenghtArray), 1);
    $neuter = round(($neuter * 100 / $lenghtArray), 1);

    echo "Гендерный состав аудитории:<br>
    --------------------------<br>
    Мужчины - $male %<br>
    Женщины - $female %<br>
    Не удалось определить - $neuter %";
}
