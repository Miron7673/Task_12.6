<?php

// генерация случайного значения типа float
function random_float ($min,$max) {
    return ($min+lcg_value()*(abs($max-$min)));
};
