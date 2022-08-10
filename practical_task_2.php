<?php

$lineBrake = "<br>";

$greetings = "Hello";
$name = "Anna";
echo "{$greetings}, {$name}!" . $lineBrake;

$poem = "\"Аптеку позабудь ты для венков лавровых<br>
И не мори больных, но усыпляй здоровых.\"";

echo $poem;

$secondsPerMinute = 60;
$minutesPerHour = 60;
$secondsPerHour = $secondsPerMinute * $minutesPerHour;

echo $lineBrake;
echo "В часе {$secondsPerHour} секунд";     //!не уверен, что так можно
