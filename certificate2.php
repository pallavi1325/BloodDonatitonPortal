<?php
session_start();
// Data for the certificate (you can replace this with data from your form or database).
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$tdate=$_SESSION['tdate'];
$bname=$_SESSION['bname'];
$bloodgroup=$_SESSION['bloodgroup'];
$aadhar=$_SESSION['aadhar'];
$recipientName = $fname." ".$lname;
// Extract the last four digits using substr
$certifcateno = substr($aadhar, -4);
// Include the TCPDF library.
require 'tcpdf/tcpdf.php';
// Create a new TCPDF object with landscape orientation, millimeters as units, A4 page size, and other configurations.
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// Set the title of the PDF document.
$pdf->SetTitle('Certificate');

// Add a new page to the PDF.
$pdf->AddPage();

// Set background color (light blue)
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'F');

// Set background image (you need to have your own background image file)
$pdf->Image('C:\xampp\htdocs\project1\images\CERTIFICATE.jpg', 21, -2, $pdf->getPageWidth(), $pdf->getPageHeight(), '', '', '', false, 300, '', false, false,0);

// Set the font family, size, and other style for the PDF content.
$pdf->SetFont('Helvetica', 'B', 14);

// Set the X and Y position for the content (in this case, 100mm from the left and 60mm from the top).
$pdf->SetXY(82, 141);

// Write the title for the certificate.
$pdf->Cell(0.1, 0, $tdate, 0, 1, 'C');

// Set the font size and style for the recipient name.
$pdf->SetFont('Helvetica', 'B', 30);

// Set the X and Y position for the recipient name.
$pdf->SetXY(10, 80);

// Write the recipient name.
$pdf->Cell(0, 0, $recipientName, 0, 1, 'C');

// Set the font size and style for BloodBank
$pdf->SetFont('Helvetica', 'B   ', 14);

// Set the X and Y position for theBloodBank
$pdf->SetXY(98, 149);

// Write the blood
$pdf->Cell(0.1, 0, $bname, 0, 1, 'C');

$pdf->SetFont('Helvetica', 'B', 14);

// Set the X and Y position for blood
$pdf->SetXY(68, 66);
$pdf->Cell(0.1, 0, $bloodgroup, 0, 1, 'C');


$pdf->SetFont('Helvetica', 'B', 12);


$pdf->SetXY(148, 161);


$pdf->Cell(0.1, 0, 'Certificate Number: XXXX-XXXX-' . $certifcateno, 0, 1, 'C');

// Output the PDF to the browser.
$pdf->Output('certificate.pdf', 'I');
