<HEAD> 
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE> </HEAD>
<?
$s3 = $_POST["var19"];
var19($s3);
function var19($s) {
	$v=0;
	$n=0;
	for ($i=0;$i<mb_strlen($s,'utf-8');$i++){
		$str = mb_substr($s,$i,1,'utf-8');
		if (preg_match('~^([А-ЯЁ]|[A-Z])~u', $str)==1){
			$v++;
		}
		if (preg_match('~^[а-яё]|[a-z]~u', $str)==1){
			$n++;
		}
	}
	echo ("Строчных букв:".round(($n/mb_strlen($s,'utf-8')*100),1)."%");
	echo ("<br>Прописных букв:".round(($v/mb_strlen($s,'utf-8')*100),1)."%");
}	
 ?>
</BODY>
</HTML>