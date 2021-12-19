<html>
<HTML>
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE>
 <FORM action="<?php print $PHP_SELF ?>" method="post">
 <p>Вариант 21</p>
 <p>Введите слово: <INPUT type="text" name="var21" maxlength="50"></p>
 <p><INPUT type="submit" name="result" value="Вывести"></p>
 </FORM>

<?php
    function str_split_utf8($str) {
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

    if (isset($_POST["result"])){
      $var21 = trim($_POST["var21"]);

      $chars1 = str_split_utf8($var21);
      $dlinachars = count($chars1);
      echo "Результат:";
    
      for ($c = 0; $c < $dlinachars; $c++){
        echo $chars1[$c];
        if (($c+1) % 3 == 0){
        echo "e";
        }
      }
    }
 ?>
</BODY>
</HTML>