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
    if (isset($_POST['description']) && $_POST['description'] !== '') {
        // Use the selected value from the dropdown
        $Description = $_POST['description'];
    } else if (isset($_POST['customDescription']) && $_POST['customDescription'] !== '') {
        // Use the custom description entered by the user
        $Description = $_POST['customDescription'];
    }
    $UnitPrice =$_POST['Unitprice'];
    $Grams =$_POST['grams'];
    $Date =$_POST['date'];
    $TotalPrice =$_POST['Totalprice'];
    $Shipping =$_POST['shipping'];
    $Insurance =$_POST['insurance'];
    $Subtotal =$_POST['subTotal'];
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
            // window.location = "add-transaction.php";
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