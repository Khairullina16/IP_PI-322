<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 $zapros="DELETE FROM ".$_GET['table']." WHERE ".$_GET['ni']."id=" . $_GET['id'];
 mysqli_query($link,$zapros);
 header("Location: index.php");
 exit;
?>
