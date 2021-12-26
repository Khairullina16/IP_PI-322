<?php
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 
$result=mysqli_query($link, "select store_name, store_inn, city_name, adres, volume, 
tor_bal, fio_dir from prod left outer JOIN store on prod.store_id=store.store_id left outer JOIN city 
on prod.city_id=city.city_id order by city.city_id");

require '../PHPExcel-1.8/Classes/PHPExcel.php';
$pExcel = new PHPExcel();
$aSheet = $pExcel->setActiveSheetIndex(0);
$aSheet->setTitle('Сети магазинов');
$aSheet->setCellValue('A1','№');
$aSheet->setCellValue('B1','Названиие сети');
$aSheet->setCellValue('C1','ИНН');
$aSheet->setCellValue('D1','Город');
$aSheet->setCellValue('E1','Адрес точки продаж');
$aSheet->setCellValue('F1','Объем продаж');
$aSheet->setCellValue('G1','Торговый баланс');
$aSheet->setCellValue('H1','ФИО директора');
$i = 1;
while ($st = mysqli_fetch_assoc($result)) {
echo ($st['store_name']);
echo ($st['store_inn']);
echo ($st['city_name']);
echo ($st['adres']);
echo ($st['volume']);
echo ($st['tor_bal']);
echo ($st['fio_dir']);
    $aSheet->setCellValue('A'.($i+1), $i);
    $aSheet->setCellValue('B'.($i+1), $st['store_name']);
    $aSheet->setCellValue('C'.($i+1), $st['store_inn']);
    $aSheet->setCellValue('D'.($i+1), $st['city_name']);
    $aSheet->setCellValue('E'.($i+1), $st['adres']);
    $aSheet->setCellValue('F'.($i+1), $st['volume']);
    $aSheet->setCellValue('G'.($i+1), $st['tor_bal']);
	$aSheet->setCellValue('H'.($i+1), $st['fio_dir']);
    $i++;
}
 echo 'uspeh1';
ob_end_clean();
header('Content-Type:xlsx:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="simple.xlsx"');
ob_end_clean();
$objWriter = new PHPExcel_Writer_Excel2007($pExcel);
$objWriter->save('php://output');
exit;
?>