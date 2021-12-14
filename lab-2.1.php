<head>
<title>Хайруллина Элина</title>
  </head>
    <?php
function function1($n)		
{
	return ($n*($n+1))/2;
}
function function2($n)		
{
	return ($n*$n);
}
 $treuge = array(1,2,3,4,5,6,7,8,9,10); 
 $treuge1 = array_map("function1", $treuge);
 $kvd = array(1,2,3,4,5,6,7,8,9,10); 
 $kvd1 = array_map("function2", $kvd);
 $rez= array_merge($treuge1,$kvd1);
 echo'<br>Массив треугольных чисел: <br>';
 for ($i=0; $i < 10 ; $i++) { 
 	echo $treuge1[$i].'&nbsp;&nbsp;';
 }
  echo'<br><br>Массив квадратов натруальных чисел:<br>';
  for ($i=0; $i < 10 ; $i++) { 
 	
 	echo $kvd1[$i].'&nbsp;&nbsp;';
 }
  echo'<br><br>Объединение массива:<br> ';
  for ($i=0; $i < 20 ; $i++) { 
 	
 	echo $rez[$i].'&nbsp;&nbsp;';
 }

 sort($rez);
  echo'<br><br>Отсортированный массив: <br> ';;
  for ($i=0; $i < 20 ; $i++) { 
 	
 	echo $rez[$i].'&nbsp;&nbsp;';
 }
  echo'<br><br>Удаление первого элемента:<br> ';
$rez = array_slice($rez, 1);
  for ($i=0; $i < 19 ; $i++) { 
 	
 	echo $rez[$i].'&nbsp;&nbsp;';
 }
$rez1 = array_unique($rez);
 echo'<br><br>Удаление повторяющихся элементов: <br>';
  for ($i=0; $i <= count($rez1) ; $i++) { 
 	echo $rez1[$i].'&nbsp;&nbsp;';
 }
?>