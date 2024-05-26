<?php
 
 require_once "../assets/out_medicall_query.php";
include 'fpdf.php';   
// Include the PDF class
// Create instance of PDF class
//$pdf = new FPDF();
$pdf = new FPDF('P', 'mm', 'legal');
$pdf->SetTitle("$lastname- Medical Record");
// Add 1 page in your PDF
$pdf->AddPage();
// Place image on top left with 100px width
$pdf->Image("pds/MEDICAL.jpg", 0, 0, 213,);
$pdf->SetFont("Arial", "B", 12);

//PERSONAL INFORMATION//
//
$pdf->Multicell(200,40,'',0);
$pdf->Cell(105);
$pdf->Cell(50,6, "$date_examined",0,1);
//
$pdf->Multicell(200,30,'',0);
$pdf->Cell(12);
$pdf->Cell(50,6, "$lastname",0,0);
$pdf->Cell(54,6, "$firstname",0,);
$pdf->Cell(25,6, "$middlename",0,1);
//
$pdf->Multicell(200,4,'',0);
$pdf->Cell(5);
$pdf->Cell(28,6, "$Age",0,0);
$pdf->Cell(40,6, "$sex",0,0);
$pdf->Cell(64,6, "$civilstatus",0,0);
$pdf->Cell(56,6, "$coursedepartment",0,1);
//
$pdf->Cell(37);
$pdf->Cell(90,5, "$religious",0,0);
$pdf->Cell(55,5, "$birth_date",0,1);
//
$pdf->Cell(30);
$pdf->Cell(119,6, "$presentaddress",0,0);
$pdf->Cell(55,6, "$contactno",0,1);
//
$pdf->Cell(33);
$pdf->Cell(116,5, "$guardian",0,0);
$pdf->Cell(55,5, "$guardno",0,1);
//
$pdf->Cell(36);
$pdf->Cell(113,6, "$permanentaddress",0,0);
$pdf->Cell(35,6, "$peraddno",0,1);

//PAST MEDICAL HISTORY

//Allergies&Mumps
$pdf->Multicell(200,16.5,'',0);
if ($Allergies  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(45,5, "$check",0,0);
   } 
 else  if ($Allergies  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(45,5, "$check",0,0);
  } 

$pdf->SetFont("Arial", "B", 12); 
$pdf->Cell(73,5, "$Allergies_specify",0,0);
if ($Mumps  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5, "$check",0,1);
   }
  else if ($Mumps  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5, "$check",0,1);
  }
   
//Asthma& Measles
if ($Bronchial_Asthma  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.5, "$check",0,0);
   } 

  else if ($Bronchial_Asthma  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.5, "$check",0,0);
  }
$pdf->Cell(75);
if ($Measles  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.5, "$check",0,1);
   } 
  else if ($Measles  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.5, "$check",0,1);
  } 
//Heart&Pox
if ($Heart_Disease  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(55,5.5, "$check",0,0);
   } 
   else if ($Heart_Disease  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(55,5.5, "$check",0,0);
  } 
   $pdf->SetFont("Arial", "B", 12); 
   $pdf->Cell(63,5.5, "$Heart_Disease_specify",0,0);
if ($Chicken_Pox  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.6, "$check",0,1);
   } 
   elseif ($Chicken_Pox  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.6, "$check",0,1);
  } 

   //Diabetes&Tuberculosis
if ($Diabetes_Mellitus  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.6, "$check",0,0);
   }
   else if ($Diabetes_Mellitus  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.6, "$check",0,0);
  }
$pdf->Cell(75);
if ($Tuberculosis  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.6, "$check",0,1);
   } 
   else if ($Tuberculosis  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.6, "$check",0,1);
  } 

   //Seizure&Other
if ($Seizure_Disorder  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.5, "$check",0,0);
   } 
   else if ($Seizure_Disorder  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.5, "$check",0,0);
  } 
   $pdf->Cell(75);
if ($Other  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(43,5.5, "$check",0,1);
   } 
   else if ($Other  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(43,5.5, "$check",0,1);
  } 


   //Hypertension &Other(specify)
if ($Hypertension  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(130,5.5, "$check",0,0);
   } 
   else if ($Hypertension  == "") {
    $check = "";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(130,5.5, "$check",0,0);
  } 
   $pdf->SetFont("Arial", "B", 12); 
   $pdf->Cell(56,5.5, "$Other_specify",0,1);

   //Bleeding
if ($Bleeding_Disorder  == "Yes") {
$check = "4";
$pdf->SetFont('ZapfDingbats','', 10);
$pdf->Cell(62,5.5, "$check",0,0);
} 
else if ($Bleeding_Disorder  == "") {
  $check = "";
  $pdf->SetFont('ZapfDingbats','', 10);
  $pdf->Cell(62,5.5, "$check",0,0);
  } 
$pdf->SetFont("Arial", "B", 12); 
$pdf->Cell(56,5.5, "$Bleeding_Disorder_specify",0,1);


//QUESTIONS
$pdf->Multicell(200,7,'',0);
//Accident in past
$pdf->Cell(95);
if ($Accident_operation  == "No") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(18,4.5, "$check",0,0);
 
   } else if ($Accident_operation  == "Yes") {
     $check = "4";
     $pdf->SetFont('ZapfDingbats','', 10);
     $pdf->Cell(18);
     $pdf->Cell(26,4.5, "$check",0,1);
   };
   //
$pdf->Multicell(200,5,'',0);
$pdf->SetFont("Arial", "B", 12); 
$pdf->Cell(110);
$pdf->Cell(80,5.5, "$Accident_operationyes",0,1);
//
$pdf->Cell(63);
$pdf->Cell(56,5.5, "$Vaccines",0,0);
$pdf->Cell(80,5.5, "$Vaccinesyes",0,1);
//
// 
$pdf->Cell(56);
$pdf->Cell(58,5.5, "$Medication",0,0);
$pdf->Cell(80,5.5, "$Medicationyes",0,1);
//
$pdf->Cell(118);
$pdf->Cell(80,5.5, "$Mental_illness",0,1);

//PHYSICAL EXAMINATION
$pdf->Multicell(200,24,'',0);
//Height & Weigth
$pdf->Cell(13);
$pdf->Cell(21,4.5, "$Height",0,0,'C');
$pdf->Cell(75);
$pdf->Cell(19,4.5, "$Weight",0,1,'C');

//BP&CR
$pdf->Cell(6);
$pdf->Cell(30,4.5, "$BP",0,0,'C');
$pdf->Cell(65);
$pdf->Cell(25,4.5, "$CR",0,1,'C');

//RR&Temperature
$pdf->Cell(6);
$pdf->Cell(30,4.5, "$RR",0,0,'C');
$pdf->Cell(82);
$pdf->Cell(12,4.5, "$Temperature",0,1,'C');

//General Survey & Heart
$pdf->Cell(31);
$pdf->Cell(55,5, "$General_Survey",0,0,);
$pdf->Cell(20);
$pdf->Cell(80,5, "$Heart",0,1,);

//Skin & Abdomen
$pdf->Cell(10);
$pdf->Cell(80,5, "$Skin",0,0,);
$pdf->Cell(23);
$pdf->Cell(72,5, "$Abdomen",0,1,);

//HEENT & Genito
$pdf->Cell(14);
$pdf->Cell(72,5, "$HEENT",0,0,);
$pdf->Cell(52);
$pdf->Cell(45,5, "$Genito_Urinary_System",0,1,);

//Chest Extremities
$pdf->Cell(32);
$pdf->Cell(55,5, "$Chest_Lungs",0,0,);
$pdf->Cell(30);
$pdf->Cell(70,5, "$Extremities",0,1,);

//REMARKS
$pdf->Multicell(200,5,'',0);
$pdf->Cell(18);
$pdf->Cell(170,5, "$REMARKS",0,1,);

//MEDICAL OFFICER
$pdf->Multicell(200,4,'',0);
$pdf->Cell(125);
$pdf->Cell(63,5, "$Doctor_lastname, $Doctor $Doctor_middlename.",0,1,'C');

// // Render the PDF in your browser
$pdf->output();
 
?>