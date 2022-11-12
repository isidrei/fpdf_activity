<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf('L', 'mm', 'A5');
$pdf->AddPage();
//NAME
$pdf->SetFont('Courier', 'B', 15);
$pdf->Cell(176, 5, 'Dan Isidrei Musni', 0, 0, 'C');
$pdf->Ln();
//COURSE
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(176, 10, 'BSIT', 0, 0, 'C');
$pdf->Ln();
//EMAIL
$pdf->SetFont('Courier', 'B', 15);
$pdf->Cell(176, 10, 'musni.danisidrei@auf.edu.ph', 0, 0, 'C');
$pdf->Ln();
//ID
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(176, 10, '18-0173-228', 0, 0, 'C');

$pdf->Output();