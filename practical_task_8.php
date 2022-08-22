<?php
$lineBreak = "<br>";
echo "<b>Практическое задание 8</b>";
$temperatures = array(-0.4, -2.5, -6.9, -6.2, -4.6, 0.5, 0.6);

//подсчет среднего значения
$count = count($temperatures);
$sum = 0;
foreach ($temperatures as $temp) {
    $sum += $temp;
}
$average = round($sum / $count);
echo "Средняя максимальная температура за неделю составила {$average} &deg;C.{$lineBreak}";