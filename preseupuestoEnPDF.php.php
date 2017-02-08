<?php
	$detalle = $_POST["detalle"];
	$precio = $_POST["precio"];

    //-----------------------------------------------------------------------------------
    //    PDF
    //-----------------------------------------------------------------------------------
    require('fpdf/fpdf.php');

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10, $detalle);
    $pdf->Cell(40,10, $precio);
    $pdf->Output();
 ?>