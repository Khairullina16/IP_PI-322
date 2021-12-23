<html>
 <body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","root") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"cities") or die("Нет такой таблицы!");
 $zapros="UPDATE city SET city_name='".$_GET['name'].
"', city_type='".$_GET['type']."', city_square='"
.$_GET['square']."', city_pop='".$_GET['pop'].
"', city_region='".$_GET['region']."' WHERE city_id=".$_GET['id']; 
 mysqli_query($link,$zapros);
 if (mysqli_affected_rows($link)>0) {
 echo 'Все сохранено. <a href="index.php"> Вернуться к списку населенных пуктов </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку населенных пуктов</a> '; }
?>
</body>
 </html>