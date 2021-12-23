<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($link,'SET NAMES UTF8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($link,"users") or die("Нет такой таблицы!");
?>
<h2>Зарегистрированные пользователи:</h2>
<table border="1">
<tr> // вывод «шапки» таблицы
 <th> id </th> <th> Имя </th> <th> Логин </th> <th> Пароль </th> <th> E-mail </th> <th> Информация </th>
 <th> Редактировать </th> <th> Уничтожить </th> 
<?php
$result=mysqli_query($link,"SELECT id_user, user_name, user_login, user_password, user_e_mail, user_info
FROM user"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 echo "<tr>";
 echo "<td>" . $row['id_user'] . "</td>";
 echo "<td>" . $row['user_name'] . "</td>";
 echo "<td>" . $row['user_login'] . "</td>";
  echo "<td>" . $row['user_password'] . "</td>";
 echo "<td>" . $row['user_e_mail'] . "</td>";
echo "<td>"  . $row['user_info'] .  "</td>";
 echo "<td><a href='edit.php?id_user=" . $row['id_user']
. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
 echo "<td><a href='delete.php?id_user=" . $row['id_user']
. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
 "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего пользователей: $num_rows </p>");
?>
<p> <a href="new.php"> Добавить пользователя </a>
</body> </html>