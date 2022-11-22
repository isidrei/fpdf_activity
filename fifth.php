<?php
require('vendor/autoload.php');

use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Kanit-Bold','','Kanit-Bold.php');
$pdf->AddFont('BebasNeue-Regular','','BebasNeue-Regular.php');
$pdf->AddFont('SourceCodePro-VariableFont_wght','','SourceCodePro-VariableFont_wght.php');

$pdf->AddPage();
$pdf->SetFont('Kanit-Bold','',20);
$pdf->Write(11,'HARD WORK IS WORTHLESS FOR THOSE THAT DONT BELIEVE IN THEMSELVES.');
$pdf->ln(10);
$pdf->Write(10,'- NARUTO UZUMAKI');
$pdf->ln(15);

$pdf->SetFont('BebasNeue-Regular','',20);
$pdf->Write(11,'THE MOMENT PEOPLE COME TO KNOW LOVE, THEY RUN THE RISK OF CARRYING HATE.');
$pdf->ln(10);
$pdf->Write(10,'- OBITO UCHIHA');
$pdf->ln(15);

$pdf->SetFont('SourceCodePro-VariableFont_wght','',20);
$pdf->Write(11,'ITS NOT THE FACE THAT MAKES SOMEONE A MONSTER; ITS THE CHOICES THEY MAKE WITH THEIR LIVES.');
$pdf->ln(10);
$pdf->Write(10,'- NARUTO UZUMAKI');
$pdf->Output();
?>