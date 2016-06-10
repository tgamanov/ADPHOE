<?php
#1 Написать функцию преобразования строки, содержащей число в непосредственно число, не используя стандартные функции приведения типов (например “1252абв” в 1252)

function StringToNumber($str)
{
    $numberStr = preg_replace('/\D/u', '', $str);
    echo($numberStr);
}

StringToNumber('sometext1252абв');