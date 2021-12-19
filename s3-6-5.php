<html>
<HEAD> 
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE>
</HEAD>
<body>
<form action="<?php print $PHP_SELF ?>" method="post">
<p>Вариант 5</p>
<p>Введите слова: <INPUT type="text" name="var5" size="20"></p>
<p><input type="submit" value="Вывести"></p>
</form>
<?php
$str = trim($_POST["var5"]);
$data = explode(" ", $str);
$s=str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
for ($i=0;$i<$s;$i++){
echo $data[$i]."</br>";
}
?>
</body>
</html>