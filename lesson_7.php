<?php
function typeOfAge($age){
    $lineBreak = "<br>";
    if ($age > 10 && $age < 19) {
        return "Возраст $age лет является подростковым. {$lineBreak}";
    }
    return "Возраст $age лет не является подростковым. {$lineBreak}";
}
echo typeOfAge(5);
echo typeOfAge(16);

function typeOfAge1($age) {
    $lineBreak = "<br>";
    if ($age > 10 && $age < 19) {
        $str = "Поздравляю!";
        return "Возраст $age лет является подростковым. {$lineBreak}";
    }
    return "Возраст $age лет не является подростковым. {$lineBreak}";
}
echo typeOfAge1(5);
echo typeOfAge1(16);

function auth($login, $pass) {
    $passwordFromDB = "1234";
    $loginFromDB = "Alex";
    $lineBreak = "<br>";

    if ($login === $loginFromDB && $pass === $passwordFromDB) {
        $result = "Добро пожаловать! {$lineBreak}";
    } else {
        if ($login === $loginFromDB) {
            $result = "Проверьте пароль. {$lineBreak}";
        }
        else $result = "Пройдите регистрацию. {$lineBreak}";
    }
    return $result;
}

echo auth("Alex", "1234");
echo auth("Alex", "12345");
echo auth("Anna", "12346");

function absT($num) {
    if ($num >= 0) {
        return $num;
    } else return -$num;
}

$lineBreak = "<br>";
echo absT(-5) . $lineBreak;
echo absT(10) . $lineBreak;

function ternar($num) {
    return $num >= 0 ? $num : -$num;
}
echo ternar(-5) . $lineBreak;
echo ternar(10) . $lineBreak;


$num = 3;

switch($num) {

    case 1;
    $str = "Winter";
    break;
    case 2;
    $str = "Spring";
    break;
    case 3;    
    $str = "Summer";
    break;
    case 4;
    $str = "Fall";
    break;
}
echo $str . $lineBreak;
