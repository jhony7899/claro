<?php
require 'vendor/autoload.php';
require 'conexion.php';


/*
$host ="localhost";
$users ="root";
$pw ="123456789"; 
$db ="cotizarn_data";
*/

$sql="SELECT * FROM ganadores";
$resultado=$mysqli->query($sql);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new SpreadSheet();
$spreadsheet->getProperties()->setCreator("Seguro Celular Claro")->setTitle("Reporte de Ganadores");

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

$hojaActiva->getColumnDimension('A')->setWidth(15);
$hojaActiva->setCellValue('A1','Token')->getStyle('A1')->getAlignment()->setHorizontal('center');
$hojaActiva->getColumnDimension('B')->setWidth(15);
$hojaActiva->setCellValue('B1','ID Empleado')->getStyle('B1')->getAlignment()->setHorizontal('center');
$hojaActiva->getColumnDimension('C')->setWidth(30);
$hojaActiva->setCellValue('C1','Premio')->getStyle('C1')->getAlignment()->setHorizontal('center');
$hojaActiva->getColumnDimension('D')->setWidth(20);
$hojaActiva->setCellValue('D1','Fecha')->getStyle('D1')->getAlignment()->setHorizontal('center');

$fila=2;
while($rows = $resultado->fetch_assoc()){
    $hojaActiva->setCellValue('A'.$fila,$rows['token'])->getStyle('A'.$fila)->getAlignment()->setHorizontal('center');
    $hojaActiva->setCellValue('B'.$fila,$rows['id_cliente'])->getStyle('B'.$fila)->getAlignment()->setHorizontal('center');
    $hojaActiva->setCellValue('C'.$fila,$rows['id_premio'])->getStyle('C'.$fila)->getAlignment()->setHorizontal('center');
    $hojaActiva->setCellValue('D'.$fila,$rows['fecha'])->getStyle('D'.$fila)->getAlignment()->setHorizontal('center');
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Reporte de Ganadores.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

/*$writer = new Xlsx($spreadsheet);
$writer->save('Mi excel.xlsx');*/
exit;
?>