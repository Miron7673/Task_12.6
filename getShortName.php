<?php

// сокращение ФИО 
function getShortName($fullName) 
{
    $array = array_splice(getPartsFromFullname($fullName), 0);
    $array['name'] = mb_substr($array['name'], 0, 1);
    
    return "$array[surename] $array[name].";
};