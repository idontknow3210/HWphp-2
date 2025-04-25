<?php
// PHP-8.3
// У меня не работает fgets(STDIN) c Кириллицой.

echo "Введите вашу фамилию!\n";
$lastName = trim(fgets(STDIN));

echo "Введите ваше имя!\n";
$firstName = trim(fgets(STDIN));

echo "Введите ваше отчество!\n";
$patronymic = trim(fgets(STDIN));

$anyName = "$lastName $firstName $patronymic";

// $anyName = "иванов иван иванович"; -- Этой переменной я проверил, что методы работают с Кириллицой.

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

echo "Данные обработаны!\n";

fwrite(STDOUT, "$fullName\n");
fwrite(STDOUT, "$fio\n");
fwrite(STDOUT, $surnameAndInitials);

?>