<HEAD> 
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE> </HEAD>
<?
$s3 = $_POST["var19"];
var19($s3);
function var19($s) {
echo ("<br>Вариант 19<br>");
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
function var21($str) {
echo ("<br><br>Вариант 21"); 
        $split = 1;
        $array = array();
        for ($i=0; $i < strlen($str); ){
            $value = ord($str[$i]);
            if($value > 127){
            if ($value >= 192 && $value <= 223)      $split = 2;
            elseif ($value >= 224 && $value <= 239)  $split = 3;
            elseif ($value >= 240 && $value <= 247)  $split = 4;
        } else $split = 1;
        $key = NULL;
        for ( $j = 0; $j < $split; $j++, $i++ ) $key .= $str[$i];
        array_push( $array, $key );
    }
    return $array;
}
    if (isset($_POST["check"])){
      $var21 = trim($_POST["var21"]);
      $chars1 = var21($var21);
      $dlinachars = count($chars1);
      echo "<br>Результат: ";
    
      for ($c = 0; $c < $dlinachars; $c++){
        echo $chars1[$c];
        if (($c+1) % 3 == 0){
        echo "e";
        }
      }
	}
$str = $_POST["var5"];
echo ("<br><br>Вариант 5<br>");
$data = explode(" ", $str);
$s=str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
for ($i=0;$i<$s;$i++){
echo $data[$i]."</br>";
}
	
 ?>
</BODY>
</HTML>