<?php
// Include the PDF class
require_once "fpdf.php";
 
// Create instance of PDF class


$pdf = new FPDF();
$pdf = new FPDF('P', 'mm', 'Legal', true,);
$pdf->SetTitle("MEDICAL REPORTS");
$fontSize=7;
$tempFontSize=$fontSize;
$pdf->SetMargins(4,4);

$pdf->AddPage();
$pdf->SetFont("Arial", "B", 20);
// $pdf->Image("pds/dmmmsu.png",10,10,-200 );
//SPACE
$pdf->Multicell(205.5,20,'Medical Report',1,'C');
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(30,7.5,"",0,0,'C');
$pdf->Cell(60,7.5, "",0,0,'C');
$pdf->Cell(55,7.5,"",0,0,'C');
$pdf->Cell(20,7.5, "Date:",0,0,'C');
$pdf->Cell(20.2,7.5, $_POST["from_date"],0,0,'C');
$pdf->Cell(20.2,7.5, $_POST["to_date"],0,1,'C');

$pdf->Cell(20,7.5,"Student Id",1,0,'C');
$pdf->Cell(35,7.5, "Last Name",1,0,'C');
$pdf->Cell(35,7.5, "First Name",1,0,'C');
$pdf->Cell(30,7.5, "M.",1,0,'C');
$pdf->Cell(60.2,7.5, "Course",1,0,'C');
$pdf->Cell(25.2,7.5, "Date Examined",1,1,'C');

ob_start();
     include_once "../assets/connection_sris.php";
     $conn = dbConnectt();
     $account = $conn->prepare("SELECT sp.*,co.*,c.*,pe.* ,ato.* ,apo.* FROM mluc_sris.student_profile as sp 
     INNER JOIN mluc_sris.courses as co ON co.course_no = sp.course_no
     INNER JOIN mluc_sris.add_town as ato ON ato.town_id = sp.town
     INNER JOIN mluc_sris.add_province as apo ON apo.province_id = sp.province
     INNER JOIN clinic.physical_examination as pe ON sp.id_no =pe.id_no
     INNER JOIN clinic.past_medical_history as c ON c.mh_id = pe.mh_id
     WHERE pe.date_examined BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'");
 
     $account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
                $cellWidth=20;
                while($pdf->GetStringWidth($result->id_no) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->id_no,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=35;
                while($pdf->GetStringWidth($result->last_name) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->last_name,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=35;
                while($pdf->GetStringWidth($result->first_name) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->first_name,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=30;
                while($pdf->GetStringWidth($result->mid_name) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->mid_name,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=60.2;
                while($pdf->GetStringWidth($result->course_name) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->course_name,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                
                $cellWidth=25.2;
                while($pdf->GetStringWidth($result->date_examined) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->date_examined,1,1,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                
              
               
}

 
// // Render the PDF in your browser
$pdf->output();
 
?>