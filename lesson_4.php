<?php

$lineBreak = "<br>";
$greeting = "Welcome";
$clientName = "Alex";
echo "{$greeting}, {$clientName}! {$lineBreak}";

$priceOfBookOne = 60;
$priceOfBookTwo = 17;
$discount = 30;
$bookCount = 2;

//бинарные операторы
$totalPrice = $priceOfBookTwo + $priceOfBookOne;
echo "Total price: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne - $discount;
echo "Total price with discount: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne * $bookCount;
echo "Total price for two books: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne / $discount;
echo "Total with discount: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne % $priceOfBookTwo; // вычисление остатка от деления
echo "Total: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookTwo ** $bookCount;  // возведение в степень
echo "{$totalPrice}. {$lineBreak}";

// унарный оператор
$positiveNumber = 78;
$negativeNumber = -$positiveNumber;
$count = $positiveNumber + $negativeNumber*3;
echo $count;

$a = 7;
$b = 6;
$c = 5;

$d = $a - $b - $c; // лево-ассоциативный оператор
$a = $b = $c;      // право-ассоциативный оператор

// Не нашёл файл с домашним заданием, поэтому упражнялся с написанием урока;
