<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: aut.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Хайруллина Э.М.</title>
</head>
<body>

    <!-- Форма регистрации -->

    <form method="post" action="regis.php">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Тип пользователя</label>
        <select name="type" size="2" multiple>
            
  <option value=1>Пользователь</option>
  <option value=2>Админ</option> 
</select>
<button type="submit" class="register-btn">Добавить пользователя</button>
    </form>
<p> <a href="index.php"> На главную </a>
</body>
</html>