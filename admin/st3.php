<?php
include("settings.inc.php");

/** Error reporting */
error_reporting(E_ALL);

/** PHPExcel */
require_once '/Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();



//Wrap Text
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->getAlignment()->setWrapText(true);

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
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('F16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A7:G54')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A1:G56')->applyFromArray($styleThickBlackBorderOutline);


//Set Font Styles
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//Fill Color
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A16:G16')->getFill()->getStartColor()->setARGB('FF808080');


// Write to Cells
echo date('H:i:s') . " Add some data\n";
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A3', 'GLS Logistics (Private) Limited');
$objPHPExcel->getActiveSheet()->setCellValue('A4', '43-H/1A, Block No. 6, P.E.C.H.S,');

$objPHPExcel->getActiveSheet()->setCellValue('E4', 'Sales Tax Registration No.:');
$objPHPExcel->getActiveSheet()->setCellValue('G4', '17-00-9808-026-19');

$objPHPExcel->getActiveSheet()->setCellValue('A5', 'Karachi');
$objPHPExcel->getActiveSheet()->setCellValue('E5', 'NTN No.:');

$objPHPExcel->getActiveSheet()->setCellValue('G5', '3375061-7');


$objPHPExcel->getActiveSheet()->setCellValue('A8', 'Invoice No.:');
$objPHPExcel->getActiveSheet()->setCellValue('A9', 'Invoice Date:');

$objPHPExcel->getActiveSheet()->setCellValue('A10', 'Customer Name:');
$objPHPExcel->getActiveSheet()->setCellValue('A11', 'Address:');

$objPHPExcel->getActiveSheet()->setCellValue('A12', 'Contact No.:');
$objPHPExcel->getActiveSheet()->setCellValue('A13', 'Customer GST No.:');
$objPHPExcel->getActiveSheet()->setCellValue('A14', 'Description of Goods:');

$objPHPExcel->getActiveSheet()->setCellValue('B14', 'Air cargo outside Pakistan');

$objPHPExcel->getActiveSheet()->setCellValue('A16', 'Customer Reference');

$objPHPExcel->getActiveSheet()->setCellValue('B16', 'Country');

$objPHPExcel->getActiveSheet()->setCellValue('C16', 'No. of Pieces');
$objPHPExcel->getActiveSheet()->setCellValue('D16', 'Weight');
$objPHPExcel->getActiveSheet()->setCellValue('E16', 'Amount Exclusive of Sales Tax');

$objPHPExcel->getActiveSheet()->setCellValue('F16', 'Sales Tax');
$objPHPExcel->getActiveSheet()->setCellValue('G16', 'Amount Inclusive of Sales Tax');
$objPHPExcel->getActiveSheet()->setCellValue('A55', 'Note: In case of any discrepancy, please mail or fax to 021-3431772');



// Set column widths
echo date('H:i:s') . " Set column widths\n";
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(19);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(22);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(17);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(9);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(17);

// Add a drawing to the worksheet
echo date('H:i:s') . " Add a drawing to the worksheet\n";
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Logo');
$objDrawing->setDescription('Logo');
$objDrawing->setOffsetX(3);
$objDrawing->setOffsetY(3);
$objDrawing->setPath('./img/logo.gif');
$objDrawing->setHeight(36);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


$r=18;

$result = mysql_query("SELECT * FROM parcel WHERE sender_acc='1324' && date_received BETWEEN '2010-07-01' AND '2010-07-14' ORDER BY date_received DESC");
echo mysql_affected_rows();
while($row = mysql_fetch_array($result))
  {
	 echo "<br/>";
echo $row['hawb'];

	  $ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r;
//Line 1  
$objPHPExcel->getActiveSheet()->setCellValue($ac, $row[4]);
$objPHPExcel->getActiveSheet()->setCellValue($bc, $row[1]);

$objPHPExcel->getActiveSheet()->setCellValue($cc, $row['sender']);
$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[5]);

$objPHPExcel->getActiveSheet()->setCellValue($ec, $row[16]);
$objPHPExcel->getActiveSheet()->setCellValue($fc, $row[14]);

$objPHPExcel->getActiveSheet()->setCellValue($gc, $row[17]);
$objPHPExcel->getActiveSheet()->setCellValue($hc, $row[13]);

$objPHPExcel->getActiveSheet()->setCellValue($ic, $row[20]);

  }


// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
echo date('H:i:s') . " Set header/footer\n";
//$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BThank you for your business.&RPrinted on &D');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&BThank you for your business.');


// Set page orientation and size
echo date('H:i:s') . " Set page orientation and size\n";
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);



// Rename sheet
echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('Invoice');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));


// Echo memory peak usage
echo date('H:i:s') . " Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";

// Echo done
echo date('H:i:s') . " Done writing file.\r\n";
