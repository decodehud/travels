<?php
require '../controllers/conexion.php';
require '../fpdf/fpdf.php';

$pdf = new FPDF('P','mm','LETTER');
$pdf->AliasNbPages();

$pdf->AddPage('lanscape','LETTER');
$pdf->SetFont('Arial','B',20);

$pdf->Cell(0,10,'Factura de compra',0,1,'C');
$pdf->Cell(0,10,'Estado de compra de producto',0,1);
$pdf->Cell(0,10,'Travels');

$pdf->Ln(10);
$pdf->SetFont('Arial','B',8);
$pdf->Ln(29); 
$pdf->Cell(40,10,'Invoice ID',1,0,1, false);
$pdf->Cell(40,10,'Nombre',1,0,1,false);
$pdf->Cell(40,10,'Precio',1,0,1,false);
$pdf->Cell(40,10,'Pais',1,0,1,false);
$pdf->Cell(40,10,'Alojamiento',1,0,1,false);
$pdf->Cell(40,10,'Fecha',1,0,1,false);
$pdf->Cell(40,10,'Descripcion',1,0,1,0);
$pdf->Cell(40,10,'Estado',1,0,1,false);
$pdf->Ln(10);

$sql="SELECT * FROM productos ORDER BY idProductos";
$consulta=mysqli_query($conexion,$sql);
$Registros=mysqli_num_rows($consulta);

while($row=mysqli_fetch_array($consulta))
{
	$pdf->Cell(40,10,$row['idProductos'],0,0,1);
	$pdf->Cell(40,10,$row['nombre'],0,0,1);
	$pdf->Cell(40,10,$row['precio'],0,0,1);
	$pdf->Cell(40,10,$row['pais'],0,0,1);
	$pdf->Cell(40,10,$row['alojamiento'],0,0,1);
	$pdf->Cell(40,10,$row['fechaViaje'],0,0,1);
	$pdf->Cell(40,10,$row['descripcion'],0,0,1);
	$pdf->Cell(40,10,$row['estado'],0,0,1);

	$pdf->Ln(10);
}

$pdf->Cell(40,10,'TOTAL',0,0,1);	
$pdf->Cell(40,10,$row['precio'],0,0,1);

$pdf->OutPut();
?>