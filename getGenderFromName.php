<?php

// определение пола по ФИО
function getGenderFromName($fullName) 
{
    $failure = 0;
    $array = getPartsFromFullname($fullName);
    $lenghtSurename = mb_strlen($array['surename']);
    $lenghtName = mb_strlen($array['name']);
    $lenghtPatronomyc = mb_strlen($array['patronomyc']);
 
    if (mb_substr ($array['surename'], $lenghtSurename - 1) === 'в') $failure ++;
    elseif (mb_substr ($array['surename'], $lenghtSurename - 2) === 'ва') $failure --;   
    
    if (mb_substr ($array['name'], $lenghtName - 1) === 'й' || mb_substr ($array['name'], $lenghtName - 1) == 'н' ) $failure ++;
    elseif (mb_substr ($array['name'], $lenghtName - 1) === 'а') $failure --;
    
    if (mb_substr ($array['patronomyc'], $lenghtPatronomyc - 2) === 'ич') $failure ++;
    elseif (mb_substr ($array['patronomyc'], $lenghtPatronomyc - 3) === 'вна') $failure --;
    
    return $failure <=> 0;
}
