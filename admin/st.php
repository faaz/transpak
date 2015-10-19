<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2010 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2010 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.3, 2010-05-17
 */

/** Error reporting */
error_reporting(E_ALL);

/** PHPExcel */
require_once '/Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Set properties
echo date('H:i:s') . " Set properties\n";
$objPHPExcel->
getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

// Merge Cells
//$objPHPExcel->getActiveSheet()->mergeCells('A3:M3');
//$objPHPExcel->getActiveSheet()->mergeCells('F12:G12');

//Wrap Text
$objPHPExcel->getActiveSheet()->getStyle('A16:I16')->getAlignment()->setWrapText(true);

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
$objPHPExcel->getActiveSheet()->getStyle('A16:H16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('B16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('D16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('F16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('H16')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A7:H30')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('A1:H33')->applyFromArray($styleThickBlackBorderOutline);
/*$objPHPExcel->getActiveSheet()->getStyle('I12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('K12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('M12')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('K6:L10')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('M6:M10')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('F13:M13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('G13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('I13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('K13')->applyFromArray($styleMediumBlackBorderOutline);
$objPHPExcel->getActiveSheet()->getStyle('M13')->applyFromArray($styleMediumBlackBorderOutline);





//$objPHPExcel->getActiveSheet()->getStyle('A3:M13')->getFont()->setName('Times New Roman');
//$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(36);
$objPHPExcel->getActiveSheet()->getStyle('A7')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('G6')->getFont()->setSize(16);

$objPHPExcel->getActiveSheet()->getStyle('A12:M21')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A12:M12')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G6')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$objPHPExcel->getActiveSheet()->getStyle('A12:M12')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G6')->getFont()->setBold(true);
*/

//Set Font Styles
$objPHPExcel->getActiveSheet()->getStyle('A16:H16')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A16:H16')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//Fill Color
$objPHPExcel->getActiveSheet()->getStyle('A16:H16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A16:H16')->getFill()->getStartColor()->setARGB('FF808080');


// Write to Cells
echo date('H:i:s') . " Add some data\n";
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('A3', 'GLS Logistics (Private) Limited');
$objPHPExcel->getActiveSheet()->setCellValue('A4', '43-H/1A, Block No. 6, P.E.C.H.S,');

$objPHPExcel->getActiveSheet()->setCellValue('F4', 'Sales Tax Registration No.:');
$objPHPExcel->getActiveSheet()->setCellValue('G4', '17-00-9808-026-19');

$objPHPExcel->getActiveSheet()->setCellValue('A5', 'Karachi');
$objPHPExcel->getActiveSheet()->setCellValue('F5', 'NTN No.:');

$objPHPExcel->getActiveSheet()->setCellValue('G5', '3375061-7');


$objPHPExcel->getActiveSheet()->setCellValue('A8', 'Invoice No.:');
$objPHPExcel->getActiveSheet()->setCellValue('A9', 'Invoice Date:');

$objPHPExcel->getActiveSheet()->setCellValue('A10', 'Customer Name:');
$objPHPExcel->getActiveSheet()->setCellValue('A11', 'Address:');

$objPHPExcel->getActiveSheet()->setCellValue('A12', 'Contact No.:');
$objPHPExcel->getActiveSheet()->setCellValue('A13', 'Customer GST No.:');

$objPHPExcel->getActiveSheet()->setCellValue('A16', 'Customer Reference');

$objPHPExcel->getActiveSheet()->setCellValue('B16', 'Country');
$objPHPExcel->getActiveSheet()->setCellValue('C16', 'Description of Goods');

$objPHPExcel->getActiveSheet()->setCellValue('D16', 'No. of Pieces');
$objPHPExcel->getActiveSheet()->setCellValue('E16', 'Weight');
$objPHPExcel->getActiveSheet()->setCellValue('F16', 'Amount Exclusive of Sales Tax');

$objPHPExcel->getActiveSheet()->setCellValue('G16', 'Sales Tax');
$objPHPExcel->getActiveSheet()->setCellValue('H16', 'Amount Inclusive of Sales Tax');
/*$objPHPExcel->getActiveSheet()->setCellValue('I16', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('J13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('K13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('L13', 'PKR');
$objPHPExcel->getActiveSheet()->setCellValue('M13', 'PKR');
*/

// Set column widths
echo date('H:i:s') . " Set column widths\n";
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(18);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(21);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(24);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(17);



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



// Add conditional formatting
echo date('H:i:s') . " Add conditional formatting\n";
$objConditional1 = new PHPExcel_Style_Conditional();
$objConditional1->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS);
$objConditional1->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_BETWEEN);
$objConditional1->addCondition('200');
$objConditional1->addCondition('400');
$objConditional1->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_YELLOW);
$objConditional1->getStyle()->getFont()->setBold(true);
$objConditional1->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$objConditional2 = new PHPExcel_Style_Conditional();
$objConditional2->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS);
$objConditional2->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_LESSTHAN);
$objConditional2->addCondition('0');
$objConditional2->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
$objConditional2->getStyle()->getFont()->setBold(true);
$objConditional2->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$objConditional3 = new PHPExcel_Style_Conditional();
$objConditional3->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS);
$objConditional3->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL);
$objConditional3->addCondition('0');
$objConditional3->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_GREEN);
$objConditional3->getStyle()->getFont()->setBold(true);
$objConditional3->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);

$conditionalStyles = $objPHPExcel->getActiveSheet()->getStyle('B2')->getConditionalStyles();
array_push($conditionalStyles, $objConditional1);
array_push($conditionalStyles, $objConditional2);
array_push($conditionalStyles, $objConditional3);
$objPHPExcel->getActiveSheet()->getStyle('B2')->setConditionalStyles($conditionalStyles);

//$objPHPExcel->getActiveSheet()->duplicateStyle( $objPHPExcel->getActiveSheet()->getStyle('B2'), 'B3:B7' );


// Set fonts
echo date('H:i:s') . " Set fonts\n";
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);



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
