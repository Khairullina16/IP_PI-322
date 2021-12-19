<html>
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE> 
<FORM action="<?php print $PHP_SELF ?>" method="post">
<p>Вариант 17</p>
<Input type="text" name = "var17" required><br>
 <P> <INPUT type="submit" name="res" value="Вывести">
 </FORM>
<?php
if(isset($_POST["res"])){
    if( preg_match( '~^[\d]+$~', $_POST["var17"] ) )
        echo 1;
    elseif( preg_match( '~^[\d]+\.[\d]+$~', $_POST["var17"] ) )
        echo 2;
    elseif( ( (int) $str ) == 0 )
        echo 0;
}
?>
</BODY>
</HTML>