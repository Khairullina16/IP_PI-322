<?php
 // Подключение к базе данных:
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","root","") or die ("Невозможно
подключиться к серверу");
mysqli_query($link,'SET NAMES UTF8'); // Тип кодировки
mysqli_select_db($link,"users") or die("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 $sql_add = "INSERT INTO user SET user_name='" . $_GET['name']
."', user_login='".$_GET['login']."', user_password='"
.$_GET['password']."', user_e_mail='".$_GET['e_mail'].
"', user_info='".$_GET['info']. "'";
 mysqli_query($link,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows($link)>0) // если нет ошибок при выполнении запроса
 { print "<p>Спасибо, вы зарегистрированы в базе данных.";
 print "<p><a href=\"index.php\"> Вернуться к списку
пользователей </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку книг </a>"; }
?>
