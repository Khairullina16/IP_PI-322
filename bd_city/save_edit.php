<html>
<body bgcolor="#FFEBCD">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 switch($_GET['typet']){
	 case 'cit':  {
 $zapros="UPDATE city SET city_name='".$_GET['name'].
"', city_type='".$_GET['type']."', city_square='"
.$_GET['square']."', city_pop='".$_GET['pop'].
"', city_region='".$_GET['region']."' WHERE city_id=".$_GET['id']; break;
	 }
	  case 'stores':  {
$zapros="UPDATE store SET store_name='".$_GET['store_name'].
"',  store_inn='".$_GET['inn']."' WHERE store_id=".$_GET['id']; break;
	  }
	   case 'proda':  {
$zapros="UPDATE prod SET store_id='".$_GET['store_id'].
"', city_id='".$_GET['city_id']. "', volume='".$_GET['volume'].
"', tor_bal='".$_GET['tor_bal']. "', fio_dir='".$_GET['fio_dir'].
"', adres='".$_GET['adres']. "' WHERE prod_id=".$_GET['id']; break;
	   }
	  }
		  
 mysqli_query($link,$zapros);
 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к таблице </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к таблице</a> '; }
?>
</body>
 </html>