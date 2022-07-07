<?php

include('calculatorFunction2.1.php');
$num1 = 100;
$num2 = 45;
$result = sum($num1,$num2);
echo "$num1 plus $num2 is equal to $result<br>";

$result = sub($num1,$num2);
echo "$num1 minus $num2 is equal to $result<br>";

$result = multiply($num1,$num2);
echo "$num1 multiply $num2 is equal to $result<br>";

$result = divided($num1,$num2);
echo "$num1 divided by $num2 is equal to $result<br>";

?>