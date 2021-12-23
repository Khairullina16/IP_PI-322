<HTML>
<head>
<title> Редактирование данных о пользователе </title>
</head>
<body>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $link = mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"cities") or die("Нет такой таблицы!");
 $rows=mysqli_query($link,"SELECT * FROM city WHERE city_id=".$_GET['city_id']);
 while ($st = mysqli_fetch_assoc($rows)) {
 $id=$_GET['city_id'];
 $name = $st['city_name'];
 $type = $st['city_type'];
 $square = $st['city_square'];
 $pop = $st['city_pop'];
 $region = $st['city_region'];
 }
print "<form action='save_edit.php' metod='get'>";
print "Имя: <input name='name' size='50' type='text'
value='".$name."'>";
print "<br>Логин: <input name='type' size='20' type='text'
value='".$type."'>";
print "<br>Пароль: <input name='square' size='20' type='text'
value='".$square."'>";
print "<br>Е-mail: <input name='pop' size='30' type='text'
value='".$pop."'>";
print "<br>Е-mail: <input name='region' size='30' type='text'
value='".$region."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку населенных пунктов </a>";
?>
</body>
</HTML>