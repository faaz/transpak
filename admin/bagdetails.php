<?php

include("settings.inc.php");
require_once '/Classes/PHPExcel.php';


// Create new PHPExcel object
//echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Set properties
//echo date('H:i:s') . " Set properties\n";
$objPHPExcel->getProperties()->setCreator("GLS KHI")
							 ->setLastModifiedBy("GLS KHI")
							 ->setTitle("Manifest")
							 ->setSubject("Manifest")
							 ->setDescription("Manifest")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");
$result = mysql_query("SELECT bag_no FROM parcel WHERE destn_code='$_GET[destn_code]' && date_received='$_GET[date]'");

while ($rowr = mysql_fetch_array($result)) 
{
	

$csv_output .= str_replace(" + ",",",$rowr['bag_no']).",";


}
echo $csv_output;
$arr=explode(",",$csv_output);

print_r($arr); echo "\n";

$p=array_unique($arr);

print_r($p);
//count($array=array_unique(
//for($i=0;$i<=$arr;$i++)
//echo $array[$i] . ",";

/*$o=0;
$prr=count($array=array_unique(explode(",",$csv_output)));
for ($i=0;$i<900;$i++)
{
echo $array[$o];
echo " - ";
$o++;
}
$r=6;*/


$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('D1', $array[5]);

$objPHPExcel->getActiveSheet()->setCellValue('D2', 'BAG DETAILS');

$objPHPExcel->getActiveSheet()->getStyle('A1:I4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getActiveSheet()->setCellValue('B3', date("j/m/Y", strtotime($_GET['date'])));
$objPHPExcel->getActiveSheet()->setCellValue('C3', 'MAWB:');
$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Dated:');


$objPHPExcel->getActiveSheet()->setCellValue('A4', 'S. No.');
$objPHPExcel->getActiveSheet()->setCellValue('B4', 'AWB No.');
$objPHPExcel->getActiveSheet()->setCellValue('C4', 'Sender Details');
$objPHPExcel->getActiveSheet()->setCellValue('D4', 'Consignee Details');
$objPHPExcel->getActiveSheet()->setCellValue('E4', 'Description');
$objPHPExcel->getActiveSheet()->setCellValue('F4', 'Weight');
$objPHPExcel->getActiveSheet()->setCellValue('G4', 'Value');
$objPHPExcel->getActiveSheet()->setCellValue('H4', 'Pieces');
$objPHPExcel->getActiveSheet()->setCellValue('I4', 'Bag No.');


$var=0;
$result = mysql_query("SELECT * FROM parcel WHERE destn_code='$_GET[destn_code]' && date_received='$_GET[date]' ORDER BY sr_no");
while($row = mysql_fetch_array($result))
  {
	  $var=1;
	  
	  $ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;
//Line 1  
$objPHPExcel->getActiveSheet()->setCellValue($ac, $row[3]);
$objPHPExcel->getActiveSheet()->getStyle($ac.':'.$bc)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->setCellValue($bc, $row[1]);

$objPHPExcel->getActiveSheet()->setCellValue($cc, $row['sender']);
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[5]);

$objPHPExcel->getActiveSheet()->setCellValue($ec, $row[16]);
$objPHPExcel->getActiveSheet()->setCellValue($fc, $row[14]);

$objPHPExcel->getActiveSheet()->setCellValue($gc, $row[17]);
$objPHPExcel->getActiveSheet()->setCellValue($hc, $row[13]);

$objPHPExcel->getActiveSheet()->setCellValue($ic, $row[20]);
$objPHPExcel->getActiveSheet()->getStyle($fc.':'.$ic)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//End Line 1

$r++;

$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;

//Line 2
if($row[6])
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[6]);
else
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[7] . " " . $row[8]);
$objPHPExcel->getActiveSheet()->setCellValue($cc, $row['s_address1']);
//End Line 2

$r++;

$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;

//Line 3
if($row[6])
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[7] . " " . $row[8]);
else
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[9]."   ".$row[11]);
$objPHPExcel->getActiveSheet()->setCellValue($cc, $row['s_address2']);
//End Line 3

$r++;

$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;

//Line 4
if($row[6])
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[9]."   ".$row[11]);
else
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[10]);

//End Line 4

$r++;

$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;

//Line 5
if($row[6])
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[10]);
else
{
	$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[12]);
	$objPHPExcel->getActiveSheet()->getStyle($dc)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
}
//End Line 5

$r++;

$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;

//Line 6
if($row[6])
{
	$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[12]);
	$objPHPExcel->getActiveSheet()->getStyle($dc)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
}

//End Line 6

$r=$r+1;

$styleMediumBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
			'color' => array('argb' => 'FF000000'),
		),
	),
);
$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;
$objPHPExcel->getActiveSheet()->getStyle('A5:'.$ic)->applyFromArray($styleMediumBlackBorderOutline);

$r=$r+2;
  }
  
if ($var==0) 
{
	echo "<link href='style.css' rel='stylesheet' type='text/css' />";
	include("menu.inc.php");
	echo "<br />" . "<br />" . "<br />";
	die("No parcels booked for destination " . $_GET[destn_code] . " on " . $_GET[date]);
}
	

// Set column widths
//echo date('H:i:s') . " Set column widths\n";

$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(15);

// Set fonts
//echo date('H:i:s') . " Set fonts\n";
//$objPHPExcel->getActiveSheet()->getStyle('D1:D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1:I4')->getFont()->setBold(true);


// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
//echo date('H:i:s') . " Set header/footer\n";
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BPersonal cash register&RPrinted on &D');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Set the Headings Font
$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('D2')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setSize(20);

// Set thin black border outline around column
//echo date('H:i:s') . " Set thin black border outline around column\n";

$objPHPExcel->getActiveSheet()->getStyle('A4:I4')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$ac)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$bc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$cc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$dc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$ec)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$fc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$gc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$hc)->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A4:'.$ic)->applyFromArray($styleMediumBlackBorderOutline);




// Set page orientation and size
//echo date('H:i:s') . " Set page orientation and size\n";
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);


// Rename sheet
//echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('Manifest');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.ms-excel');
$name = $_GET[destn_code] . "_" . 'Manifest' . "-" . $_GET[date];
header("Content-Disposition: attachment;filename=$name . .xls");
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>