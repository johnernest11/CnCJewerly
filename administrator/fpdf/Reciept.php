<?php
 
 require_once "../assets/pdf_query.php";
include 'fpdf.php';   
// Include the PDF class
// Create instance of PDF class
//$pdf = new FPDF();
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetTitle("$Fullname - Invoice");
// Add 1 page in your PDF
$pdf->AddPage();
// Place image on top left with 100px width
$pdf->Image("pds/Reciept.jpg", 0, 0, 213,);
$pdf->SetFont("Arial", "B", 12);

//PERSONAL INFORMATION//
//
$pdf->Multicell(195,50,"",0);
$pdf->Multicell(195,6,"$Fullname",0);
$pdf->Cell(160,8,'',0);
$pdf->Cell(35,8, "$InvoiceNum",0,1);
$pdf->Cell(20,8,'',0);
$pdf->Cell(175,8, "$Contact",0,1);
$pdf->Cell(195,9, "$Fullname",0,1);
$pdf->Cell(170,8,'',0);
$pdf->Cell(25,8, "$Date",0,1);
$pdf->Multicell(195,10,"",0);
$pdf->Cell(95,6.5, "$Description",0);
$pdf->Cell(40,6.5, "$UnitPrice",0,0,'C');
$pdf->Cell(30,6.5, "$Grams",0,0,'C');
$pdf->Cell(30,6.5, "$TotalPrice",0,1,'C');

$pdf->Cell(95,6.5, "",0);
$pdf->Cell(40,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,1);

$pdf->Cell(95,6.5, "",0);
$pdf->Cell(40,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,1);

$pdf->Cell(95,6.5, "",0);
$pdf->Cell(40,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,0);
$pdf->Cell(30,6.5, "",0,1);

$pdf->Cell(95,7, "",0);
$pdf->Cell(40,7, "",0,0);
$pdf->Cell(30,7, "",0,0);
$pdf->Cell(30,7, "",0,1);

$pdf->Cell(95,7, "",0);
$pdf->Cell(40,7, "",0,0);
$pdf->Cell(30,7, "",0,0);
$pdf->Cell(30,7, "",0,1);

$pdf->Cell(95,7, "",0);
$pdf->Cell(40,7, "",0,0);
$pdf->Cell(30,7, "",0,0);
$pdf->Cell(30,7, "",0,1);

$pdf->Cell(165,7,'',0);
$pdf->Cell(30,7, "$Shipping",0,1,'C');

$pdf->Cell(165,6.5,'',0);
$pdf->Cell(30,6.5, "$Insurance",0,1,'C');

$pdf->Cell(165,7,'',0);
$pdf->Cell(30,7, "",0,1);

$pdf->Cell(165,8,'',0);
$pdf->Cell(30,8, "$Subtotal",0,1,'C');

$pdf->Cell(165,8,'',0);
$pdf->Cell(30,8, "$Deposit",0,1,'C');

$pdf->Cell(165,8,'',0);
$pdf->Cell(30,8, "$Discount",0,1,'C');


$pdf->Cell(135,13,'',0);
$pdf->Cell(60,13, "$TotalAmount",0,1,'C');



// //
// $pdf->Multicell(200,4,'',0);
// $pdf->Cell(5);
// $pdf->Cell(28,6, "$Age",0,0);
// $pdf->Cell(40,6, "$sex",0,0);
// $pdf->Cell(64,6, "$civil_status",0,0);
// $pdf->Cell(56,6, "$shortcut",0,1);
// //
// $pdf->Cell(37);
// $pdf->Cell(90,5, "$religion",0,0);
// $pdf->Cell(55,5, "$date_birth",0,1);
// //
// $pdf->Cell(30);
// $pdf->Cell(119,6, "$barangay $town, $province",0,0);
// $pdf->Cell(55,6, "$tel_no",0,1);
// //
// $pdf->Cell(33);
// $pdf->Cell(116,5, "$guid_name",0,0);
// $pdf->Cell(55,5, "$guid_tel_no",0,1);
// //
// $pdf->Cell(36);
// $pdf->Cell(113,6, "$barangay $town, $province",0,0);
// $pdf->Cell(35,6, "$tel_no",0,1);



//MEDICAL OFFICER
// $pdf->Multicell(200,4,'',0);
// $pdf->Cell(125);
// $pdf->Cell(63,5, "$Doctor_lastname, $Doctor $Doctor_middlename.",0,1,'C');

// // Render the PDF in your browser
$pdf->output();
 
?>