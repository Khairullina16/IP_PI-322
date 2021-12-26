<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../aut.php');
}
?>
<?php 
session_start();//открытие сессии 
unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
header("Location: ../aut.php");//Перенаправление на эту страницу после нажатия кнопки ВЫЙТИ 
?>