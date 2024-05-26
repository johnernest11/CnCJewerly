<?php
//HIDE ERROR
// error_reporting(0);
// ini_set('display_errors', 0);

include_once "../connection.php";
$conn = dbConnect();
$Id = $_POST['Id'];
$account = $conn->prepare("SELECT * FROM client_account
WHERE Id =$Id");
$account->execute();
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);

$Id=$result['Id'];
$lastname =$result['lastname'];
$firstname =$result['firstname'];
$middlename =$result['middlename'];
$role =$result['role'];
$email =$result['email'];
$username =$result['username'];
$password =$result['password'];

//UPDATE DATA
if (isset($_POST['UpdateRemarks1'])){
  
    $pe_id=$_POST['pe_id'];
    $REMARKS =$_POST['REMARKS'];
    $Status =$_POST['Status'];
   
  
    $account = $conn->prepare("UPDATE physical_examination SET REMARKS='$REMARKS',
    Status='$Status'WHERE pe_id ='$pe_id'");
    $account->execute(); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Update Remarks111 .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "out_patient_medicall.php?edit=<?php echo$pe_id?>";
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