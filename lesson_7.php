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
