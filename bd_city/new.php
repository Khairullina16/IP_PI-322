<html>
<head> <title> Добавление населенного пункта </title> </head>
<body>
<H2>Добавить населенный пункт:</H2>
<form action="save_new.php" metod="get">
 Наименование: <input name="name" size="50" type="text">
<br>Тип: <input name="type" size="20" type="text">
<br>Площадь: <input name="square" size="20" type="text">
<br>Население: <input name="pop" size="30" type="text">
<br>Регион: <input name="region" size="30" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку населенных пуктов </a>
</body>
</html>
