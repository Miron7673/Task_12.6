<?php

// функция разбиения ФИО
function getPartsFromFullname($fullName) {
    $tempArray = array_values(explode(' ', $fullName));
    $keys = ['surename', 'name', 'patronomyc'];
    $i=0; 
    foreach ($keys as $key) {    
        $resultArray[$key] = $tempArray[$i];
        $i++;
    }
    return $resultArray;
};