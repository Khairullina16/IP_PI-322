<?php
function var6(){
	print("<br>Вариант 6.<br>Дана квадратная матрица порядка N. Для каждого столбца матрицы найти наименьший
	элемент. Вычислить и напечатать произведение найденных наименьших элементов.<br>");
}

function Zapoln($n,$m){
	for ($i=0;$i<$n;$i++){
		for ($j=0;$j<$m;$j++){
			$arr[$i][$j] = rand(-100,100);
		}
	}
	return $arr;
}
function Tabl($arr,$n,$m){
	echo "<TABLE border=1>";
	for ($i=0; $i<$n; $i++) {
		echo ("<tr>");
		for ($k=0; $k<$m; $k++) {
			echo ("<td align=center>");
			echo ($arr[$i][$k]);
			echo ("</td>");
		}
		echo ("</tr>");
	}
	echo "</TABLE>";
}
function Avar6($arr,$n,$m){
	$result = 1;
	for ($i=0;$i<$n;$i++){
		$min = 101;
		for ($j=0;$j<$m;$j++){
			if ($arr[$j][$i]<$min){
				$min = $arr[$j][$i];
			}
		}
		$result*=$min;
	}
	print($result);
}
?>