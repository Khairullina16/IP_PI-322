<head>
	<title>Хайруллина Элина</title>
  </head>
<?php
echo'<br> Ассоциативный массив <br>';
$cust=array("cnum"=>2001,"cname"=>"Hoffman", "city"=>"London","snum"=> 1001);
 foreach ($cust as $k => $v){
 	echo $k."=>".$v;
 	echo '<br>';
 }
 echo '<br><br>Добавление ключа rating<br>';
 $cust["rating"]=1000;
 foreach ($cust as $k => $v){
 	echo $k."=>".$v;
 	echo '<br>';
 }
 echo '<br><br>Cотрировка по значениям <br>';
 asort($cust);
foreach ($cust as $k => $v){
 	echo $k."=>".$v;
 	echo '<br>';
 }
 echo '<br><br>Сортировка по ключам <br>';
  ksort($cust);
foreach ($cust as $k => $v){
 	echo $k."=>".$v;
 	echo '<br>';
 }
  echo '<br><br>Сортировка массива<br>';
  sort($cust);
foreach ($cust as $k => $v){
 	echo $k."=>".$v;
 	echo '<br>';
 }
?>