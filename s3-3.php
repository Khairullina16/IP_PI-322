<HEAD> <TITLE>Хайруллина Элина</TITLE> </HEAD>
<body>
Четный вариант. Номер зк:19170002
<br>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 <p> <INPUT type="text" name="a" size="3">
    <SELECT  NAME="z" SIZE="1">
     <OPTION  VALUE="1"  SELECTED> Четные делители
     <OPTION  VALUE="2"> Нечетные делители
     <OPTION  VALUE="3"> Простые делители
     <OPTION  VALUE="4"> Составные делители
     <OPTION  VALUE="5"> Все делители

  <br/>
  <br/> <INPUT type="submit" name="res" value="Вывести"></p>
</FORM>

<?
function raschet ($n)
{
    for($x=2; $x <= sqrt($n); $x++) {
        if($n % $x == 0) {
            return false;
        }
    }
    return true;
}
switch ($_POST["z"]) {
 case 1:
echo "Четные делители числа ". $_POST["a"] . "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 2:
echo "Нечетные делители числа ". $_POST["a"] . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
 break;
 case 3:
$n=$_POST["a"];
echo "Простые делители числа ". $_POST["a"] . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (raschet($i)) echo $i."<br>";
}
 break;
 case 4:
echo "Составные делители числа ". $_POST["a"] . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (raschet($i)) echo $i."<br>";
}
 break;
 case 5:
echo "Все делители числа ". $_POST["a"] . "<br/>";
echo "Четные делители". "<br/>";
for ($i=2; $i<=$_POST["a"]; $i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Нечетные делители " . "<br/>";
 for ($i=1;$i<=$_POST["a"];$i=$i+2) {
if (($_POST["a"] % $i) == 0) echo $i."<br>";
}
echo "Простые делители" . "<br/>";
for ($i=1;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (raschet($i)) echo $i."<br>";
}
echo "Составные делители" . "<br/>";
for ($i=2;$i<=$_POST["a"];$i=$i+1) {
if (($_POST["a"] % $i) == 0) if (raschet($i)) echo $i."<br>";
}
 break;
}
?>
</BODY> </HTML>