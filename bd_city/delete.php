<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db($link,"cities") or die("Нет такой таблицы!");
 $zapros="DELETE FROM city WHERE city_id=" . $_GET['city_id'];
 mysqli_query($link,$zapros);
 header("Location: index.php");
 exit;
?>
