<?php

//INSERT DATA
if (isset($_POST['confirmsubmit1'])){
    include_once "../connection.php";
    $conn = dbConnect();

    $Id = $conn->prepare("SELECT MAX(Id) +1 FROM invoice");

    $InvoiceNum =$_POST['invoiceNum'];
    // $InvoiceNum =$Id;
    $Fullname =$_POST['fullname'];
    $Contact =$_POST['contact'];
    $Email =$_POST['email'];
    $Description =$_POST['description'];
    $UnitPrice =$_POST['unitPrice'];
    $Grams =$_POST['grams'];
    $Date =$_POST['date'];
    $TotalPrice =$_POST['totalPrice'];
    $Shipping =$_POST['shipping'];
    $Insurance =$_POST['insurance'];
    $Subtotal =$_POST['subtotal'];
    $Deposit =$_POST['deposit'];
    $Discount =$_POST['discount'];
    $TotalAmount =$_POST['totalAmount'];
    $AccountID =$_POST['accountId'];

  
    $Client_invoice = $conn->prepare("INSERT INTO invoice 
    (InvoiceNum,Fullname,Contact,Email,Description,
    UnitPrice,Grams,Date,TotalPrice,Shipping,
    Insurance,Subtotal,Deposit,Discount,
    TotalAmount,AccountID)
    VALUES ('$InvoiceNum', '$Fullname','$Contact','$Email',
    '$Description','$UnitPrice','$Grams', '$Date',
    '$TotalPrice','$Shipping','$Insurance',
    '$Subtotal','$Deposit',
    '$Discount','$TotalAmount','$AccountID')");
     $Client_invoice->execute(); 
    

    if( $Client_invoice)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Inserted .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
            window.location = "add-transaction.php";
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