<?php
require('libs/fpdf/fpdf.php');



$pdf = new FPDF('P', 'mm', 'A4'); 
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

#Establecemos los márgenes izquierda, arriba y derecha: 
$pdf->SetMargins(30, 25 , 30); 

#Establecemos el margen inferior: 
$pdf->SetAutoPageBreak(true,25);  


$fichero='Informe Cliente.pdf';

$pdf->Cell(100,12,'INFORME DE CLIENTE');
$pdf->Cell(100,12,"Fecha: ". date('d/m/Y'));
$pdf->Cell(70,10,'ID');
$pdf->Cell(70,10,$_GET['id'],0,1  );
$pdf->Cell(70,10,'NOMBRE');
$pdf->Cell(70,10,$_GET['nombre'],0,1  );
$pdf->Cell(70,10,'EMAIL');
$pdf->Cell(70,10,$_GET['email'],0,1  );
$pdf->Cell(70,10,'TELEFONO');
$pdf->Cell(70,10,$_GET['telefono'],0,1  );
$pdf->Cell(70,10,'FECHA DE ALTA');
$pdf->Cell(70,10,$_GET['fecha_alta'],0,1  );
$pdf->Cell(70,10,'COMERCIAL ASIGNADO');
$pdf->Cell(70,10,$_GET['comercial'],0,1  );
$pdf->Cell(70,10,'FECHA DE ASIGNACION');
$pdf->Cell(70,10,$_GET['fecha_asig'],0,1  );
$pdf->Cell(70,10,'PRODUCTO');
$pdf->Cell(70,10,$_GET['producto'],0,1  );
$pdf->Cell(70,10,'COMENTARIOS');
$pdf->Cell(70,10,$_GET['comentarios'],0,1  );

$pdfdoc = $pdf->Output($fichero, "D");


//var_dump($_GET);

?>