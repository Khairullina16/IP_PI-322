<?php
require_once "lab2-6dop.php";
$m = rand(2,20);
$n = rand(2,20);
var6();
$arr1 = Zapoln($n,$n);
echo '<br>';
Tabl($arr1,$n,$n);
print ("<br>Результат:<br>");
$arr1 = Avar6($arr1,$n,$n);
?>