<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_select_db($link,"users") or die("Нет такой таблицы!");
 $zapros="DELETE FROM user WHERE id_user=" . $_GET['id_user'];
 mysqli_query($link,$zapros);
 header("Location: index.php");
 exit;
?>
