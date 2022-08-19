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
