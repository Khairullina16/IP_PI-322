<?php
session_start();

if ($_SESSION['admin']) {
    header('Location: index.php');
}
if ($_SESSION['user']) {
    header('Location: foruser/index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body bgcolor="#FFEBCD" background="kit.jpg">
    <!-- Форма авторизации -->
    <form method="post" action="conf.php">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <button type="submit">Войти</button>
    </form>
<p>
логин: admin1; пароль: 123456<br>
логин: user; пароль: 12345 
</p>
<p> <a href="/index.php"> На главную </a>

</body>
</html>