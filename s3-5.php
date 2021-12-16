<HEAD> 
<body bgcolor="#FFDAB9">
<TITLE>Хайруллина Элина</TITLE> </HEAD>
<body>
 <FORM method="post" action="s3-5scen.php">
 <h2>Анкета "Ваш характер"</h2>
 Введите ваше имя:  
 <INPUT type="text" name="name" size="10">
  	<br>
<h3>Ответьте да или нет на следующие вопросы:</h3>
 1. Считаете ли Вы, что у многих ваших знакомых хороший характер?
 <br>
 <input type="radio" name="n1" value="Y" checked> Да
  <input type="radio" name="n1" value="N"> Нет
  <br>
  <br>
 2. Раздражают ли Вас мелкие повседневные обязанности?
 <br>
 <input type="radio" name="n2" value="Y" checked> Да
  <input type="radio" name="n2" value="N"> Нет
  <br>
  <br>
 3. Верите ли Вы, что ваши друзья преданы Вам?
 <br>
 <input type="radio" name="n3" value="Y" checked> Да
  <input type="radio" name="n3" value="N"> Нет
  <br>
  <br>
 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?
 <br>
 <input type="radio" name="n4" value="Y" checked> Да
  <input type="radio" name="n4" value="N"> Нет
  <br>
  <br>
 5. Способны ли Вы ударить собаку или кошку?
 <br>
 <input type="radio" name="n5" value ="Y"> Да
  <input type="radio" name="n5" value="N"checked> Нет
  <br>
  <br>
 6. Часто ли Вы принимаете лекарства?
 <br>
 <input type="radio" name="n6" value="Y" checked> Да
  <input type="radio" name="n6" value="N"> Нет
  <br>
  <br>
 7. Часто ли Вы меняете магазин, в который ходите за продуктами?
 <br>
 <input type="radio" name="n7" value="Y" checked> Да
  <input type="radio" name="n7" value="N"> Нет
  <br>
  <br>
 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
 <br>
 <input type="radio" name="n8" value="Y" checked> Да
  <input type="radio" name="n8" value="N"> Нет
  <br>
  <br>
 9. Тяготят ли Вас общественные обязанности?
 <br>
 <input type="radio" name="n9" value="Y" checked> Да
  <input type="radio" name="n9" value="N"> Нет
  <br>
  <br>
 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
 <br>
 <input type="radio" name="n10" value="Y" checked> Да
  <input type="radio" name="n10" value="N"> Нет
  <br>
  <br>
 11. Часто ли Вам приходят в голову мысли о Вашей невезучести?
 <br>
 <input type="radio" name="n11" value="Y" checked> Да
  <input type="radio" name="n11" value="N"> Нет
  <br>
  <br>
 12. Сохранилась ли у Вас фигура по сравнению с прошлым?
 <br>
 <input type="radio" name="n12" value="Y" checked> Да
  <input type="radio" name="n12" value="N"> Нет
  <br>
  <br>
 13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
 <br>
 <input type="radio" name="n13" value="Y" checked> Да
  <input type="radio" name="n13" value="N"> Нет
  <br>
  <br>
 14. Нравится ли Вам семейная жизнь?
 <br>
 <input type="radio" name="n14" value="Y" checked> Да
  <input type="radio" name="n14" value="N"> Нет
  <br>
  <br>
 15. Злопамятны ли Вы?
 <br>
 <input type="radio" name="n15" value="Y"> Да
  <input type="radio" name="n15" value="N" checked> Нет
  <br>
  <br>
 16. Находите ли Вы, что стоит погода, типичная для данного времени года?
 <br>
 <input type="radio" name="n16" value="Y" checked> Да
  <input type="radio" name="n16" value="N"> Нет
  <br>
  <br>
 17. Случается ли Вам с утра быть в плохом настроении?
 <br>
 <input type="radio" name="n17" value="Y" checked> Да
  <input type="radio" name="n17" value="N"> Нет
  <br>
  <br>
 18. Раздражает ли Вас современная живопись?
 <br>
 <input type="radio" name="n18" value="Y" checked> Да
  <input type="radio" name="n18" value="N"> Нет
  <br>
  <br>
 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?
 <br>
 <input type="radio" name="n19" value="Y" checked> Да
  <input type="radio" name="n19" value="N"> Нет
  <br>
  <br>
 20. Надоедает ли Вам делать лабораторные по PHP?
 <br>
 <input type="radio" name="n20" value="Y"> Да
  <input type="radio" name="n20" value="N" checked> Нет
  <br>
 <P> <INPUT type="submit" name="res" value="Определить">
</FORM>
</body>
<? 
if (isset($_POST["res"])) {
	$a = 0;
	for ($i=1;$i<=20;$i++){
		if ($_POST["n".$i]==1){
			$a++;
		}
	}
	if ($a > 15) {echo $_POST["name"]." У Вас покладистый характер";}
	elseif ($a>=8) {echo $_POST["name"]." Вы не лишены недостатков, но с вами можно ладить";}
	else {echo $_POST["name"]."  Вашим друзьям можно посочувствовать";}
}
?>

