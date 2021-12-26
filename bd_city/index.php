  
<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: aut.php');
}
?>
<html>
<head> <title> Таблицы </title> </head>
<body bgcolor="#FFEBCD">
<?php
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
?>
<h3>Населенные пункты:</h3>
<table border="1">
 <th> id </th> <th> Наименование </th> <th> Тип </th> <th> Площадь </th> <th> Население </th>
 <th> Регион </th> <th> Редактировать </th> <th> Уничтожить </th> 
<?php
$result=mysqli_query($link,"SELECT * FROM city"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['city_id'] . "</td>";
 echo "<td>" . $row['city_name'] . "</td>";
 echo "<td>" . $row['city_type'] . "</td>";
  echo "<td>" . $row['city_square'] . "</td>";
 echo "<td>" . $row['city_pop'] . "</td>";
echo "<td>"  . $row['city_region'] .  "</td>";
 echo "<td><a href='edit.php?city_id=" . $row['city_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['city_id']
. "&table=city&ni=city_'>Удалить</a></td>"; // запуск скрипта для удаления записи
 "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Населенных пуктов: $num_rows </p>");
?>
<p> <a href="new.php">Добавить населенный пункт </a>

<h3>Сети магазинов:</h3>
<table border="1">
 <th> id </th> <th> Название </th> <th> ИНН </th> <th> Редактировать </th> <th> Уничтожить </th> 
 <?php
 $result=mysqli_query($link,"SELECT * FROM store"); // запрос на выборку сведений о пользователях
 while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
 echo "<td>" . $row['store_id'] . "</td>";
 echo "<td>" . $row['store_name'] . "</td>";
 echo "<td>" . $row['store_inn'] . "</td>";
 echo "<td><a href='edit_store.php?store_id=" . $row['store_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['store_id']
. "&table=store&ni=store_'>Удалить</a></td>"; // запуск скрипта для удаления записи
 "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Сетей магазинов: $num_rows </p>");
?>
<p> <a href="new_store.php">Добавить сеть </a>

<h3>Точки продаж:</h3>
<table border="1">
 <th> id </th> <th> id сети магазинов </th> <th> id населенного пункта </th> <th> Объем продаж </th> <th> Торговый баланс </th> 
 <th> ФИО директора </th> <th> Адрес </th> <th> Редактировать </th> <th> Уничтожить </th> 
 <?php
 $result=mysqli_query($link,"SELECT * FROM prod"); // запрос на выборку сведений о пользователях
 while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
echo "<tr>";
 echo "<td>" . $row['prod_id'] . "</td>";
 echo "<td>" . $row['store_id'] . "</td>";
 echo "<td>" . $row['city_id'] . "</td>";
 echo "<td>" . $row['volume'] . "</td>";
 echo "<td>" . $row['tor_bal'] . "</td>";
  echo "<td>" . $row['fio_dir'] . "</td>";
  echo "<td>" . $row['adres'] . "</td>";
 echo "<td><a href='edit_prod.php?prod_id=" . $row['prod_id']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id=" . $row['prod_id']
. "&table=prod&ni=prod_'>Удалить</a></td>"; // запуск скрипта для удаления записи
 "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Точек продаж: $num_rows </p>");
?>
<p> <a href="new_prod.php">Добавить точку продаж</a><br><br>

<a href="gen_pdf.php"> Скачать PDF </a><br><a href="gen_xls.php"> Скачать XLS </a><br>

<p> <a href="close.php"> Выйти из аккаунта </a>

</body> </html>