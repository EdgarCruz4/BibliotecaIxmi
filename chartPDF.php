<?php
 require('assets/fpdf/fpdf.php');
 date_default_timezone_set('America/El_Salvador');
 class PDF extends FPDF{
 
 function Header(){
     }
 function Footer(){     
     }
 }
 $pdf = new FPDF('P','mm','A4');
 $pdf->AliasNbPages();
 
 // Primera forma de hacerlo
 $pdf->AddPage();
 
 /* Añadimos el nuevo tipo de letra */
 $pdf->AddFont('Anton-Regular','','Anton-Regular.php');
 /* Declaramos que queremos usar ese tipo de letra */
 $pdf->SetFont('Arial','',25);
 /* Lo imprimimos */
 $pdf->Cell(200,10,'Biblioteca Ixmiquilpan',0,1,'C',0);
 
//  $pdf->image("assets/imagen/logo.png");

//  $barra=$_POST['bar'];
 $pastel=$_POST['bar'];
 $pdf->Ln();
 $pdf->SetFont('Arial','',12);
 $pdf->Cell(200,10,'Resultados totales obtenidos en la auditoria Enero Abril 2023',0,1,'L',0);
 $img1 = explode(',',$pastel,2)[1];
 $pic1 = 'data://text/plain;base64,'. $img1;
 $pdf->image($pic1, 0,60,200,70,'png');
 
//  $pdf->Cell(200,10,'Resultados obtenido mes con mes',0,1,'L',0);
//  $img2 = explode(',',$barra,2)[1];
//  $pic2 = 'data://text/plain;base64,'. $img2;
//  $pdf->image($pic2, 10,130,200,0,'png');

 $pdf->Ln(120);
 $pdf->Cell(200,10,'Observaciones y comentarios:',0,1,'L',0);

 $pdf->Output();   

?>