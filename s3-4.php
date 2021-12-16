<HEAD> <TITLE>Хайруллина Элина</TITLE> </HEAD>
<body>
 <FORM method="post" action="<?php print $PHP_SELF ?>">
Логин:  <INPUT type="text" name="login" size="12">
 <P> <INPUT type="submit" name="nam" value="Войти">
</FORM>
<?php
if (isset($_POST["nam"])) {
if($_POST["login"]=="Khairullina_PHP") {
    echo "Здравствуйте, Хайруллина Элина";}
else if($_POST["login"]=="Murushka") {
    echo "Здравствуйте, котик Мурушка!";}
else if($_POST["login"]=="Sobaka") {
    echo "Добрый вечер всем собачкам";}
else if($_POST["login"]=="Rick") {
	echo "Здравствуй Рик,где Морти?";}
else {
	echo "Такой пользователь не зарегестрирован на сайте.";}
}
?>
</body>