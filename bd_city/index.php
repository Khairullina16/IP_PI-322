<html>
<head> <title> Сведения о населенных пунктах </title> </head>
<body>
<?php
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"cities") or die("Нет такой таблицы!");
?>
<h2>Населенные пункты:</h2>
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
 echo "<td><a href='delete.php?city_id=" . $row['city_id']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Населенных пуктов: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить населенный пункт </a>
</body> </html>