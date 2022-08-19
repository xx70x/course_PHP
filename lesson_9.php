<?php
//heredoc
$information = <<<INFO
Name: John Smith
Address: 123 Main St
City: Springville, CA
INFO;

//echo ($information . "<br>");

$information = <<<INFO
Name: John Smith
Address: 123 Main St
City: Springville, CA
INFO;

echo nL2br($information);
echo "<br>";

//кодировка
$strEn = "Hello"; //5
$strRu = "Привет"; //

echo strLen($strEn) . "<br>";
echo strLen($strRu) . "<br>";
echo mb_strlen($strRu) . "<br>";

echo $strRu[2] . "<br>";
echo mb_substr($strRu, 0, 1) . "<br>";

//получение подстроки
echo strpos("Hello world!", "ello") . "<br>";
echo mb_strpos("Привет, мир!", "мир") . "<br>";

if (strpos("Hello world!", "Hello")) {
    echo "Find! <br>";
}

if (strpos("Hello world!", "Hello") !== false) {
    echo "Find! <br>";
}

