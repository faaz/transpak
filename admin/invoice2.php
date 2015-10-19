<?php
include("settings.inc.php");

/** Error reporting */
error_reporting(E_ALL);

/** PHPExcel */
require_once '/Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();




// Merge Cells
$objPHPExcel->getActiveSheet()->mergeCells('A3:L3');


//Border
$styleMediumBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);



// Write to Cells
echo date('H:i:s') . " Add some data\n";
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A3', 'GLS LOGISTICS PRIVATE LIMITED');
$objPHPExcel->getActiveSheet()->setCellValue('A7', 'Karachi Cargo');

$objPHPExcel->getActiveSheet()->setCellValue('F6', 'INVOICE');
$objPHPExcel->getActiveSheet()->setCellValue('J6', 'Invoice No');

$objPHPExcel->getActiveSheet()->setCellValue('J7', 'Invoice Date');
$objPHPExcel->getActiveSheet()->setCellValue('J8', 'GST');

$objPHPExcel->getActiveSheet()->setCellValue('J9', 'GST Rate');
$objPHPExcel->getActiveSheet()->setCellValue('J10', 'FUEL');

$objPHPExcel->getActiveSheet()->setCellValue('A12', 'DATE');
$objPHPExcel->getActiveSheet()->setCellValue('B12', 'COUNTRY');

$objPHPExcel->getActiveSheet()->setCellValue('C12', 'DHL');
$objPHPExcel->getActiveSheet()->setCellValue('D12', 'GLS');

$objPHPExcel->getActiveSheet()->setCellValue('E12', 'CUST. REF');
$objPHPExcel->getActiveSheet()->setCellValue('F12', 'WEIGHT');

$objPHPExcel->getActiveSheet()->setCellValue('G12', 'NO. PCS');

$objPHPExcel->getActiveSheet()->setCellValue('H12', 'AMOUNT');
$objPHPExcel->getActiveSheet()->setCellValue('I12', '*FUEL CHARGES');

$objPHPExcel->getActiveSheet()->setCellValue('J12', 'OOA CHARGE');
$objPHPExcel->getActiveSheet()->setCellValue('K12', 'GST');
$objPHPExcel->getActiveSheet()->setCellValue('L12', 'TOTAL');

$objPHPExcel->getActiveSheet()->setCellValue('H13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('I13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('J13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('K13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('L13', 'PKR');



$r=14;

$result = mysql_query("SELECT * FROM parcel WHERE sender_acc='1324' && date_received BETWEEN '2010-07-01' AND '2010-07-14' ORDER BY date_received DESC");
echo mysql_affected_rows();
while($row = mysql_fetch_array($result))
  {
	 echo "<br/>";
echo $row['hawb'];

	  $ac='A'.$r; $bc='B'.$r; $cc='C'.$r; $dc='D'.$r; $ec='E'.$r; $fc='F'.$r; $gc='G'.$r; $hc='H'.$r; $ic='I'.$r; 
//Line 1  
$objPHPExcel->getActiveSheet()->setCellValue($ac, date("j F, Y", strtotime($row['date_received'])));
$objPHPExcel->getActiveSheet()->setCellValue($bc, $row[10]);

$objPHPExcel->getActiveSheet()->setCellValue($dc, $row[1]);

$objPHPExcel->getActiveSheet()->setCellValue($gc, $row[13]);

$objPHPExcel->getActiveSheet()->setCellValue($fc, max($row[29],$row[30]));

$r=$r+2;

  }

//$r++;
$lc='L'.$r;
//Borders
$objPHPExcel->getActiveSheet()->getStyle('A3:L3')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A6:C10')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A12:L12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('F12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('H12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('J12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('J6:L10')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('L6:L10')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('H13:L13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('I13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('K13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A13:'.$lc)->applyFromArray($styleMediumBlackBorderOutline);

//Wrap Text
$objPHPExcel->getActiveSheet()->getStyle('A12:M12')->getAlignment()->setWrapText(true);


//Set Font Styles
$objPHPExcel->getActiveSheet()->getStyle('A3:L13')->getFont()->setName('Times New Roman');
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(36);
$objPHPExcel->getActiveSheet()->getStyle('A7')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('A3:F6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A12:L13')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A14:'.$hc)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A12:M12')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$objPHPExcel->getActiveSheet()->getStyle('A12:M12')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F6')->getFont()->setBold(true);


// Set column widths
echo date('H:i:s') . " Set column widths\n";
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(14);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(26);




// Set fonts
echo date('H:i:s') . " Set fonts\n";
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);



// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
echo date('H:i:s') . " Set header/footer\n";
//$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&BThank you for your business.&RPrinted on &D');
$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&BThank you for your business.');


// Set page orientation and size
echo date('H:i:s') . " Set page orientation and size\n";
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
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
