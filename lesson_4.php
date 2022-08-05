<?php

$lineBreak = "<br>";
$greeting = "Welcom";
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
echo "Total widh discount: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookOne % $priceOfBookTwo; // вычисление остатка от деления
echo "Total: {$totalPrice}. {$lineBreak}";
$totalPrice = $priceOfBookTwo ** $bookCount;  // возведение в степень
echo "{$totalPrice}. {$lineBreak}";

// унарный оператор
$positiveNumber = 78;
$negativeNumber = -$positiveNumber;
$count = $positiveNumber + $negativeNumber*3;
echo $count;

