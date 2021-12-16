<HEAD>
<body bgcolor="#FFDAB9">
 <TITLE>Хайруллина Элина</TITLE> </HEAD>
<?
$sum=0;
if ($_POST["n1"]=="N"){$sum+=1;}
if ($_POST["n2"]=="N"){$sum+=1;}
if ($_POST["n4"]=="N"){$sum+=1;}
if ($_POST["n5"]=="N"){$sum+=1;}
if ($_POST["n6"]=="N"){$sum+=1;}
if ($_POST["n7"]=="N"){$sum+=1;}
if ($_POST["n8"]=="N"){$sum+=1;}
if ($_POST["n11"]=="N"){$sum+=1;}
if ($_POST["n12"]=="N"){$sum+=1;}
if ($_POST["n15"]=="N"){$sum+=1;}
if ($_POST["n16"]=="N"){$sum+=1;}
if ($_POST["n17"]=="N"){$sum+=1;}
if ($_POST["n18"]=="N"){$sum+=1;}
if ($_POST["n20"]=="N"){$sum+=1;}
if ($_POST["n3"]=="Y"){$sum+=1;}
if ($_POST["n9"]=="Y"){$sum+=1;}
if ($_POST["n10"]=="Y"){$sum+=1;}
if ($_POST["n13"]=="Y"){$sum+=1;}
if ($_POST["n14"]=="Y"){$sum+=1;}
if ($_POST["n19"]=="Y"){$sum+=1;}

if($sum>15){
	echo $_POST["name"].", у вас покладистый характер";
}
if($sum<=15 && $sum>8){
	echo $_POST["name"].", Вы не лишены недостатков, но с вами можно ладить";
}
if($sum<=8){
	echo $_POST["name"].", Вашим друзьям можно посочувствовать";
}
echo ("<BR> <A href='s3-5.php'> Вернуться к анкете </A>");
?>