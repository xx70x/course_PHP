<?php

$lineBreak ="<br>";
print_r("Welcome, friend! {$lineBreak}");
$straightText = "Howe are you?";

//стандартные функции
$reverseText = strrev($straightText);
print_r("Straight text: {$straightText}. {$lineBreak} Reverse text: {$reverseText}. {$lineBreak}");
$resultOper = 2**3;
$resultPow = pow(2, 3);
print_r("Res1: {$resultOper}. {$lineBreak} Res2: {$resultPow}. {$lineBreak}");

//функция без аргументов
$randomNumber = rand();
print_r("Random number: {$randomNumber}. {$lineBreak}");

// функции с параметром по умолчанию
$floatNumber = 56.4356;
$result = round($floatNumber);
print_r("Round: {$result}. {$lineBreak}");




