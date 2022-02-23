<?php

//Форматируем число в денежный формат
if (! function_exists('money_format')) {
    function money_format($num) {
        // ...
        return number_format($num,2,',',' ');
    }
}
