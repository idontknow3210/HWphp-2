<?php

$anyName = "иванов иван иванович";

$fullname =  mb_convert_case($anyName, MB_CASE_TITLE, "UTF-8");
$arr = mb_str_split($fullname);
$initials = [];
$surnameArr = [];

foreach ($arr as $el) {
    if(($el!==" ") && (mb_strtoupper($el)===$el)) {
        array_push($initials, $el);   
    } 
}

foreach ($arr as $surname) {
    if($surname!==" ") {
        array_push($surnameArr, $surname);
    } else {
        break;
    }
}

$fullName = "Полное имя: $fullname";
$fio = "Аббревиатура: " . implode($initials);
$surnameAndInitials = "Фамилия и инициалы: " . implode($surnameArr) . " " . $initials[1] . "." . $initials[2] . ".";

echo $fullName . "\n";
echo $fio . "\n";
echo $surnameAndInitials;

?>