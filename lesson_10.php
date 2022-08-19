<?php
echo time();
echo "<br>";

const SECOND_IN_YEAR = 60 * 60 * 24 * 365;
$currentYear = intval(floor(time()/SECOND_IN_YEAR) + 1970) . "<br>";
echo $currentYear;

echo date("D");

echo mktime(0, 0, 0, 20, 3, 2023) . "<br>";

echo date_default_timezone_get() . "<br>";
//echo date_default_timezone_set(Asia/Yekaterinburg) . "<br>";
echo date_default_timezone_get() . "<br>";

echo date_default_timezone_set("Asia/Yekaterinburg") . "<br>";
echo date_default_timezone_get() . "<br>";
