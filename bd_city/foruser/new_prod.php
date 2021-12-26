<html>
<head> <title> Добавление точки продаж </title> </head>
<body bgcolor="#FFEBCD">
    <?php
$link = mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
?>
<H2>Добавить точку продаж:</H2>
<form action="save_new.php" metod="get">
    
<br>ID сети магазина:
<?php 
$sql = "SELECT store_id, store_name FROM store";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'store_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['store_id']."' >". $object['store_name'] ."</option>";
}
echo "</select>";
?>
<br>ID Населенного пункта: 
<?php 
$sql = "SELECT city_id, city_name FROM city";
$result_select = mysqli_query($link,$sql);
echo "<select name = 'city_id'>";
while($object = mysqli_fetch_array($result_select,MYSQLI_ASSOC)){
echo "<option value = '".$object['city_id']."' >". $object['city_name']."</option>";
}
echo "</select>";
?>
<br>Объем продаж: <input name="volume" size="20" type="text">
<br>Торговый баланс: <input name="tor_bal" size="30" type="text">
<br>ФИО директора: <input name="fio_dir" size="30" type="text">
<br>Адрес: <input name="adres" size="30" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<input type='hidden' name='type' value=Точки>
</form>
<p>
<a href="index.php"> Вернуться к таблице </a>
</body>
</html>
