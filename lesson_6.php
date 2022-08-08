<?php

$linkBreak = "<br>";
$a = 67;
$b = 56;
$d = $a > $b;
echo $d . $linkBreak;
var_dump($d);
$d = $a < $b;
var_dump($d);
$d = $a < $b;
var_dump($d);
$d = $a >= $b;
var_dump($d);
$d = $a <= $b;
var_dump($d);
$d = $a === $b;
var_dump($d);
$d = $a !== $b;
var_dump($d);
echo $d . $linkBreak;
echo $d . $linkBreak;

//нежелательные операторы
$d = $a != $b;
$d = $a == $b;

echo $d . $linkBreak;

function isTeen ($age) {
    return $age < 19;
}
var_dump(isTeen(25));
echo $linkBreak;
var_dump(isTeen(15));
echo $linkBreak;

function isPasswordCorrect ($pass) {
    $passGoldStandart = "1234";
    return $pass === $passGoldStandart;
}
echo "Является ли пароль корректным? ";
var_dump(isPasswordCorrect("1234"));
echo $linkBreak;
echo "Является ли пароль корректным? ";
var_dump(isPasswordCorrect("5678"));
echo $linkBreak;

function isTeenCorrect ($age) {
    $passGoldStandart = "1234";
    return $age < 19 && $age > 10; //логическое умножение//конъюнкцией // true И true = true
}

// ||дизъюнкция/ логическое ИЛИ/
// ! инверсия/ логическое НЕ/ !true ИЛИ false = true
// !! двойная инверсия
var_dump(isTeenCorrect(17));
echo $linkBreak;
var_dump(isTeenCorrect(5));
echo $linkBreak;
var_dump(isTeenCorrect(26));
echo $linkBreak;

function isEven($num) {
    return $num % 2 === 0;
}
echo "Является ли число чётным? ";
var_dump(isEven(6));
echo $linkBreak;
var_dump(isEven(9));
echo $linkBreak;