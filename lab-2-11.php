
<?php
for ($i = 1; $i <= 500; $i++)
    echo "$i:" . xy($i) . "<br>";
 
// Поиск пары чисел x^2 + y^2
function xy($n)
{
    for ($x = 1; $x <= floor(sqrt($n)); $x++) {
        $y = sqrt($n - pow($x,2));
        if (fmod($y, 1) == 0) return "Да $x и $y";
    }
    return "Нет";
}
?>