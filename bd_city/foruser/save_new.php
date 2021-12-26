<?php
 // Подключение к базе данных:
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
mysqli_query($link,'SET NAMES UTF8'); // Тип кодировки
mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!"); // Строка запроса на добавление записи в таблицу:
switch ($_GET['type']){
	case 'Города':{
 $sql_add = "INSERT INTO city SET city_name='" . $_GET['name']
."', city_type='".$_GET['type']."', city_square='"
.$_GET['square']."', city_pop='".$_GET['pop'].
"', city_region='".$_GET['region']. "'"; break;
	}
	case 'Магазин':{
$sql_add = "INSERT INTO store SET store_name='" . $_GET['store_name']
."', store_inn='".$_GET['inn']. "'"; break;
	}
	case 'Точки':{
$sql_add = "INSERT INTO prod SET store_id='" . $_GET['store_id']
."', city_id='".$_GET['city_id']."', volume='" .$_GET['volume']."', 
tor_bal='".$_GET['tor_bal']. "', fio_dir='".$_GET['fio_dir']. "',
adres='".$_GET['adres']. "'"; break;
	}
}
 mysqli_query($link,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, данные были добавлены.";
 print "<p><a href=\"index.php\"> Вернуться к таблице </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к таблице </a>"; }
?>
