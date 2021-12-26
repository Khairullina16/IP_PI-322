<HTML>
<head>
<title> Редактирование данных магазина </title>
</head>
<body bgcolor="#FFEBCD">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $link = mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 $rows=mysqli_query($link,"SELECT * FROM store WHERE store_id=".$_GET['store_id']);
 while ($st = mysqli_fetch_assoc($rows)) {
 $id=$_GET['store_id'];
 $store_name = $st['store_name'];
 $inn = $st['store_inn'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='store_name' size='50' type='text'
value='".$store_name."'>";
print "<br>Инн: <input name='inn' size='20' type='text'
value='".$inn."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typet' value=stores>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к таблице </a>";
?>
</body>
</HTML>