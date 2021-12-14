<head>
	<title>Хайруллина Элина</title>
  </head>
  <?php
  echo "Вариант 10";
  echo "<br>";
function f($u, $t) {
	if ($u >=0 and $t >=0) 
		return $u+2*$t;
    elseif ($u <0 and $t>=0)
	return $u+$t;
	elseif ($u>=0 and $t<0)
	return (pow($u,2)-2*$t);
	elseif ($u<0 and $t<0)
	return $t+3*$u;
}
$a=rand();
$b=rand();
echo "a = $a","<br>","b = $b","<br>";
$result = f($a,pow($b,2)+$a)+f($a,$b);
echo "Результат =","$result";
?>
<?php
echo "<br><br>";
echo "Вариант 6";
echo "<br>";
function f1($u,$t) {
	if ($u >=0 and $t>=0)
	return $u+$t;
elseif ($u<0 and $t>=0)
return pow($u,2)+$t;
elseif ($u>=0 and $t<0)
return $u-2*$t;
elseif ($u<0 and $t<0)
return ($t+3*$u)/$u*$t;
}
$a=rand();
$b=rand();
echo "a = $a","<br>","b = $b","<br>";
$result = f1($a,pow($b,8)-pow($a,7))+f1(pow($a,10)-pow($b,11),$b);
echo "Результат =","$result";
?>






	
	
	
 