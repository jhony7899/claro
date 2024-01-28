<?php
require 'fpdf/fpdf.php';
require "conexion.php";

//if (!empty($_POST)) {

class PDF extends FPDF
{
    // Cabecera de página
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('images/header.jpg', 0, 0, 220);
        // Arial bold 15

        // Salto de línea
        $this->Ln(40);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$sql = "SELECT * FROM ganadores ORDER BY id ASC";
$resultado = $mysqli->query($sql);

$pdf = new PDF("P", "mm", "letter");
$pdf->SetTitle("Listado Ganadores", true);
$pdf->AliasNbPages();
$pdf->SetMargins(30, 10, 30);
$pdf->AddPage();



$pdf->SetFont("Arial", "B", 10);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(213, 43, 30);
$pdf->SetFillColor(213, 43, 30);
$pdf->Ln();

$pdf->Cell(40, 9, "Token", 1, 0, "C", true);
$pdf->Cell(40, 9, utf8_decode("Cédula"), 1, 0, "C", true);
$pdf->Cell(45, 9, "Premio", 1, 0, "C", true);
$pdf->Cell(40, 9, "Fecha", 1, 0, "C", true);
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->SetTextColor(0, 0, 0);
while ($fila = $resultado->fetch_assoc()) {
    $token = $fila['token'];
    $id_cliente = $fila['id_cliente'];
    $id_premio = $fila['id_premio'];
    $fecha = $fila['fecha'];

    $pdf->SetFont("Arial", "", 9);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(40, 8, $token, 1, 0, "C");
    $pdf->Cell(40, 8, $id_cliente, 1, 0, "C");
    $pdf->Cell(45, 8, $id_premio, 1, 0, "C");
    $pdf->SetFont("Arial", "B", 11);
    $pdf->Cell(40, 8, $fecha, 1, 0, "R");
    $pdf->Ln();
}
$pdf->Ln();
$modo = "I";
$nombre_archivo = "Claro Ganadores.pdf";
$pdf->Output($nombre_archivo, $modo);
