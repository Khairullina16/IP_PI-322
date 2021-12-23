<?php
 // Подключение к базе данных:
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysqli_query($link,'SET NAMES UTF8'); // Тип кодировки
mysqli_select_db($link,"cities") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO city SET city_name='" . $_GET['name']
."', city_type='".$_GET['type']."', city_square='"
.$_GET['square']."', city_pop='".$_GET['pop'].
"', city_region='".$_GET['region']. "'";
 mysqli_query($link,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, населенные пукнты были добавлены.";
 print "<p><a href=\"index.php\"> Вернуться к списку населенных пунктов </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
