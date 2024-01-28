<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new SpreadSheet();
$spreadsheet->getProperties()->setCreator("CLaro")->setTitle("mi excel");

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

$hojaActiva->setCellValue('A1','Celda1');
$hojaActiva->setCellValue('B1','Celda2');
$hojaActiva->setCellValue('C1','Celda1')->setCellValue('D1','cdp');

$writer = new Xlsx($spreadsheet);
$writer->save('Mi excel.xlsx');
?>