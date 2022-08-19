<?php
//heredoc
$information = <<<INFO
Name: John Smith
Address: 123 Main St
City: Springville, CA
INFO;

echo ($information . "<br>");

$information = <<<INFO
Name: John Smith
Address: 123 Main St
City: Springville, CA
INFO;

echo n12br($information);
