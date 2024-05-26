<?php
//HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

//FETCH ALL THE DATA IN MLUC SRIS
include_once "../connection.php";
$conn = dbConnect();
$Id = $_POST['Id'];
$account = $conn->prepare("SELECT * FROM invoice
WHERE Id =$Id");
$account->execute();
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$Id=$result['Id'];
$InvoiceNum=$result['InvoiceNum'];
$Fullname=$result['Fullname'];
$Contact=$result['Contact'];
$Email=$result['Email'];
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

<?php
//UPDATE DATA
if (isset($_POST['UpdateTransactionButton'])){
    include_once "../connection.php";
    $conne = dbConnect();
    $Id = $_POST['Id'];
    $Fullname = $_POST['fullname'];
    $Contact=$_POST['contact'];
    $Email=$_POST['email'];
    $Description =$_POST['description'];
    $UnitPrice =$_POST['unitPrice'];
    $Grams =$_POST['grams'];
    $Date =$_POST['date'];
    $TotalPrice =$_POST['totalPrice'];
    $Shipping =$_POST['shipping'];
    $Insurance =$_POST['insurance'];
    $Subtotal  =$_POST['subtotal'];
    $Deposit  =$_POST['deposit'];
    $Discount  =$_POST['discount'];
    $TotalAmount  =$_POST['totalAmount'];
  
    $accountt = $conne->prepare("UPDATE invoice SET Fullname=:Fullname,
    Contact=:Contact,
    Email=:Email,
    Description=:Description,
    UnitPrice=:UnitPrice, 
    Grams=:Grams,
    Date=:Date,
    TotalPrice=:TotalPrice,
    Shipping=:Shipping,
    Insurance=:Insurance,
    Subtotal=:Subtotal,
    Deposit=:Deposit,
    Discount=:Discount,
    TotalAmount=:TotalAmount  
    WHERE Id = :Id");
    $accountt->execute(['Id' => $Id,
    'Fullname' => $Fullname,
    'Contact' => $Contact,
    'Email' => $Email,
    'Description' => $Description,
    'UnitPrice' => $UnitPrice,
    'Grams' => $Grams,
    'Date' => $Date,
    'TotalPrice' => $TotalPrice,
    'Shipping' => $Shipping,
    'Insurance' => $Insurance,
    'Subtotal' => $Subtotal,
    'Deposit' => $Deposit,
    'Discount' => $Discount,
    'TotalAmount' => $TotalAmount]);

    if( $accountt==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Update Invoice .',
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert('error occured while updating data');
        </script>
        <?php
    }
}

?>