<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link=mysqli_connect("localhost","a0613254_elina","password") or die ("Невозможно
подключиться к серверу");
 mysqli_query($link,'SET NAMES UTF8');
 mysqli_select_db($link,"a0613254_cities") or die("Нет такой таблицы!");
 
$result=mysqli_query($link, "select store_name, store_inn, city_name, adres, volume, 
tor_bal, fio_dir from prod left outer JOIN store on prod.store_id=store.store_id left outer JOIN city 
on prod.city_id=city.city_id order by city.city_id");

$header= array("№ п/п","Название сети","ИНН", "Город", "Адрес точки продаж", "Объем продаж","Тороговый баланс", "ФИО директора");
require('FPDF/fpdf.php');

define('FPDF_FONTPATH',"FPDF/font/");

class PDF extends FPDF
{
function Headr($header)
{   $this->SetFillColor(200);
    $this->Cell(12,7,iconv('utf-8', 'windows-1251',$header[0]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[1]),1,'','',true);
    $this->Cell(30,7,iconv('utf-8', 'windows-1251',$header[2]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[3]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[4]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[5]),1,'','',true);
    $this->Cell(35,7,iconv('utf-8', 'windows-1251',$header[6]),1,'','',true);
    $this->Cell(35,7,iconv('utf-8', 'windows-1251',$header[7]),1,'','',true);
    $this->Ln();
}
function BasicTable($result)
{
    $a=1;
    $fill=true;
    while($object = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $this->SetFillColor(235);
        $this->Cell(12,6,$a,1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['store_name']),1,'','',$fill);
        $this->Cell(30,6,iconv('utf-8', 'windows-1251',$object['store_inn']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['city_name']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['adres']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['volume']),1,'','',$fill);
        $this->Cell(35,6,iconv('utf-8', 'windows-1251',$object['tor_bal']),1,'','',$fill);
        $this->Cell(35,6,iconv('utf-8', 'windows-1251',$object['fio_dir']),1,'','',$fill);
        $this->Ln();
        $a++;
        $fill=!$fill;
    }
	 
}
}
$pdf=new PDF();
//set document properties
$pdf->AddFont('Arial','','arial.php');

$pdf->SetTitle('Сети магазинов',true);
//set font for the entire document
$pdf->SetFont('Arial');
//set up a page
$pdf->AddPage('L','A3');
$pdf->SetDisplayMode('real','default');
$pdf->SetXY (10,20);
$pdf->SetFontSize(10);
//Output the document
$pdf->Headr($header);
$pdf->BasicTable($result);
$pdf->Output('Таблица.pdf','D',true);
?>