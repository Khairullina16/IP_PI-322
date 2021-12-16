<HTML>
<HEAD> <TITLE>Хайруллина Элина</TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<h3><P>Калькулятор</P></h3>
 <INPUT type="text" name="a" size="5">
 <INPUT type="text" name="b" size="5">
<P>действие:</P>
 <SELECT NAME="с" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить </OPTION>
 <OPTION VALUE="2"> вычесть </OPTION>
 <OPTION VALUE="3"> умножить </OPTION>
 <OPTION VALUE="4"> разделить </OPTION>
 </SELECT>

 <P> <INPUT type="submit" name="res" value="Вперед!">
</FORM>
<?php
if (isset($_POST["res"])) {

switch ($_POST["с"]) {

 case 1:
 $res = $_POST["a"]+$_POST["b"];
 break;
 case 2:
$res = $_POST["a"]-$_POST["b"];
 break;
 case 3:
$res = $_POST["a"]*$_POST["b"];
 break;
 case 4:
$res = $_POST["a"]/$_POST["b"];
 break;
}
echo "Результат: ".$res;
}
?>
</body>
</html>