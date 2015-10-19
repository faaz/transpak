<?php
include("settings.inc.php");

$r=9;
$gtotal=0;
$amount=0;
$special=0;
$other=0;
$gst=0;
$result = mysql_query("SELECT * FROM parcel WHERE sender_acc='$_POST[account]' && date_received BETWEEN '$_POST[startdate]' AND '$_POST[enddate]' ORDER BY date_received DESC");
if(!$row = mysql_fetch_array($result))
  {
  die('No parcels found against account number '.$_POST[account]. ' from '. $_POST[startdate] . ' to ' . $_POST[startdate]);
  }
error_reporting(E_ALL);


/** PHPExcel */
require_once 'Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();




// Add some data
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A3', 'Trans Pak Express');
$objPHPExcel->getActiveSheet()->setCellValue('A4', 'P.E.C.H.S,');

$objPHPExcel->getActiveSheet()->setCellValue('E4', 'Sales Tax Registration No.:');
$objPHPExcel->getActiveSheet()->setCellValue('G4', '123456');

$objPHPExcel->getActiveSheet()->setCellValue('A5', 'Karachi');
$objPHPExcel->getActiveSheet()->setCellValue('E5', 'NTN No.:');

$objPHPExcel->getActiveSheet()->setCellValue('G5', '123456');

$objPHPExcel->getActiveSheet()->setCellValue('A7', 'Date');

$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Tracking No.');

$objPHPExcel->getActiveSheet()->setCellValue('C7', 'Shipper Name');
$objPHPExcel->getActiveSheet()->setCellValue('D7', 'Amount');
$objPHPExcel->getActiveSheet()->setCellValue('E7', 'Special');
$objPHPExcel->getActiveSheet()->setCellValue('F7', 'Other');

$objPHPExcel->getActiveSheet()->setCellValue('G7', 'GST');
$objPHPExcel->getActiveSheet()->setCellValue('H7', 'Total');


// Set column widths
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);

// Add a drawing to the worksheet
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setOffsetX(3);
$objDrawing->setOffsetY(3);
$objDrawing->setPath('./img/logo.gif');
$objDrawing->setHeight(36);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


while($row = mysql_fetch_array($result))
  {


	  $ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;
//Line 1  
$datef=date("d-m-Y", strtotime($row['date_received']));

$objPHPExcel->getActiveSheet()->setCellValue($ac, $datef);
$objPHPExcel->getActiveSheet()->setCellValue($bc, $row[1]);

$objPHPExcel->getActiveSheet()->setCellValue($cc, $row['sender']);
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row['amount']);

$objPHPExcel->getActiveSheet()->setCellValue($ec, $row['special_charges']);
$objPHPExcel->getActiveSheet()->setCellValue($fc, $row['other']);
$objPHPExcel->getActiveSheet()->setCellValue($gc, $row['gst']);
$total = $row['amount']+$row['special_charges']+$row['other']+$row['gst'];
$objPHPExcel->getActiveSheet()->setCellValue($hc, $total);

$gtotal = $gtotal + $total;
$amount = $amount+ $row['amount'];
$special = $special+ $row['special_charges'];
$other = $other+ $row['other'];
$gst = $gst+ $row['gst'];

$r++;

  }
$ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;
$r=$r+3;
$objPHPExcel->getActiveSheet()->setCellValue($cc, 'Total');
$objPHPExcel->getActiveSheet()->setCellValue($dc, $amount);
$objPHPExcel->getActiveSheet()->setCellValue($ec, $special);
$objPHPExcel->getActiveSheet()->setCellValue($fc, $other);
$objPHPExcel->getActiveSheet()->setCellValue($gc, $gst);
$objPHPExcel->getActiveSheet()->setCellValue($hc, $gtotal);

			
//Wrap Text
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->getAlignment()->setWrapText(true);

//Border
$styleMediumBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);
$styleThickBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THICK,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

//Borders
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B7')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D7')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('F7')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G7')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A1:'.$hc)->applyFromArray($styleThickBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle($dc.':'.$hc)->applyFromArray($styleThickBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle($ec)->applyFromArray($styleThickBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle($gc)->applyFromArray($styleThickBlackBorderOutline);


//Set Font Styles
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//Fill Color
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A7:H7')->getFill()->getStartColor()->setARGB('FF808080');
			
			

// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client's web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Trans Pak Invoice.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

