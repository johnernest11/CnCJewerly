<?php
// HIDE ERROR
// error_reporting(0);
// ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "../../connection.php";
$conn = dbConnect();
$account = $conn->prepare("SELECT * FROM invoice
WHERE Id = :Id");
$Idd = $_POST['Id'];
$account->execute(['Id'=>$Idd]);
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$Id=$result['Id'];
$InvoiceNum=$result['InvoiceNum'];
$Fullname=$result['Fullname'];
$Contact=$result['Contact'];
$Description =$result['Description'];
$UnitPrice =$result['UnitPrice'];
$Grams =$result['Grams'];
$Date =$result['Date'];
$TotalPrice =$result['TotalPrice'];
$Shipping =$result['Shipping'];
$Insurance =$result['Insurance'];
$Subtotal  =$result['Subtotal'];
$Deposit  =$result['Deposit'];
$Discount  =$result['Discount'];
$TotalAmount  =$result['TotalAmount'];


?>

