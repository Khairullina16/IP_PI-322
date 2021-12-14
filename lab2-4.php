 <head>
	<title>Хайруллина Элина</title>
  </head>
 <?php
 echo "<br>Вариант 6:<br>";
  $n = rand(5,20);
  echo("Массив из ". $n . " элементов, заполненный случайными числами: ");
for ($i=0;$i<$n;$i++){
	$A[$i] = rand(-20,20);
	echo ( $A[$i] ." ");
}
$min = 200;
for ($i=0;$i<$n;$i++){
	$result = 0;
	for ($j=0;$j<=$i;$j++){
		$result+=$A[$j];
	}
	for ($z=$i+1;$z<$n;$z++){
		$result-=$A[$z];
	}
	if ($min > abs($result)){
		$min = abs($result);
		$k=$i;
	}
}
echo('<br>K = '.$k);
echo ('<br>Минимальная величина = '.$min);
?>

  
 <?php
   echo "<br><br>Вариант 10:<br>";
    $n=rand(5,20);
    echo ("Массив из ". $n . " элементов, заполненный случайными числами: ");
    For ($i = 1; $i<=$n;$i++){
        $A[$i] = rand(0,100);
        echo ( $A[$i] ." ");
    }
    $K = rand(0,100);
    $rezult = 0;
    echo ('<br>'."K =". $K);
    echo ('<br>'."скорректированный массив A: ");
    For ($i = 1; $i<=$n;$i++){
        if ($A[$i] < $K){
            $counOf++;
            $A[$i] = 0;
        }
        echo ( $A[$i] ." ");
    }
    echo ('<br>'."Количество элементов меньших ". $K . " = " . $rezult);


    ?>
	
