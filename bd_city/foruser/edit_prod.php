</head>
<body bgcolor="#FFEBCD">
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $link = mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 $rows=mysqli_query($link,"SELECT * FROM prod WHERE prod_id=".$_GET['prod_id']);
 while ($st = mysqli_fetch_assoc($rows)) {
 $id=$_GET['prod_id'];
 $store_id = $st['srore_id'];
 $city_id = $st['city_id'];
 $volume= $st['volume'];
 $tor_bal = $st['tor_bal'];
 $fio_dir = $st['fio_dir'];
 $adres = $st['adres'];
 }
print "<form action='save_edit.php' metod='get'>";
print "id cети: <input name='store_id' size='50' type='text'
value='".$store_id."'>";
print "<br>id населенного пункта: <input name='city_id' size='20' type='text'
value='".$city_id."'>";
print "<br>Объем продаж: <input name='volume' size='20' type='text'
value='".$volume."'>";
print "<br>Тороговый баланс: <input name='tor_bal' size='30' type='text'
value='".$tor_bal."'>";
print "<br>ФИО директора: <input name='fio_dir' size='30' type='text'
value='".$fio_dir."'>";
print "<br>Адрес: <input name='adres' size='30' type='text'
value='".$adres."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'><input type='hidden' name='typet' value=proda>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к таблице </a>";
?>
</body>
</HTML>