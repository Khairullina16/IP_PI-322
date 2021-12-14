<head>
	<title>Хайруллина Элина</title>
  </head>
<?php
 $ran = rand(3,20); 
 $mas = array();
 echo "Массив из ".$ran." элементов, заполненный случайными числами: ";
 for ($i=0; $i < $ran; $i++) { 
 	$mas[$i] = rand(10,99); 
 	echo $mas[$i].'&nbsp;&nbsp;';
 }
 echo "<br><br>Массив в отсортированном виде: ";
 sort($mas);
 for ($i=0; $i < $ran; $i++) { 
 	echo $mas[$i].'&nbsp;&nbsp;';
 }
 echo "<br><br>Элементы массива в обратном порядке: ";
 $mas= array_reverse($mas);
 for ($i=0; $i < $ran; $i++) { 
 	echo $mas[$i].'&nbsp;&nbsp;';
 }
 echo "<br><br>Массив после удаления последнего элемента: ";
 array_pop($mas);
 for ($i=0; $i < $ran-1; $i++) { 
 	echo $mas[$i].'&nbsp;&nbsp;';
 }
 $sum= array_sum($mas);
 $cnt= count($mas);
 echo "<br><br>Сумма элементов массива ".$sum;
 echo "<br><br>Количество элементов в массиве: ".$cnt;
 $sr= $sum/$cnt;
 echo "<br><br>Среднее арифметическое для элементов массива: ".$sr;
if (in_array(50, $mas))
  {
  echo "<br><br>Число 50 найдено";
  }
else
  {
  echo "<br><br>Число 50 не найдено";
  }
$mas=array_unique($mas);
echo "<br><br>Массив из уникальных значений: ";
for ($i=0; $i <= count($mas); $i++) { 
 	echo $mas[$i].'&nbsp;&nbsp;';
 }
?>