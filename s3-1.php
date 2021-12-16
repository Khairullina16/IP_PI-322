<HEAD> <TITLE>Хайруллина Элина</TITLE> </HEAD>
<?php
if (isset($_POST["res"])) {

if ($_POST["a"]>$_POST["b"]) { echo("Наибольшее число= ".$_POST["a"]);}
else if($_POST["b"]>$_POST["a"]){ echo("Наибольшее число= ".$_POST["b"]);}
else if($_POST["b"]==$_POST["a"]){ echo("Числа равны.");}
}
?>