<?php
//INSERT DATA
if (isset($_POST['CreateAccount'])){
    include_once "../connection.php";
    $conn = dbConnect();

    $lastname =$_POST['lastname'];
    $firstname =$_POST['firstname'];
    $role ='Client';
    $email =$_POST['email'];
    $username =$_POST['username'];
    $password ='123456789';

  
    $Add_client_account = $conn->prepare("INSERT INTO client_account 
    (lastname,firstname,role,email,
    username,password)
    VALUES ('$lastname', '$firstname','$role',
    '$email','$username','$password')");
     $Add_client_account->execute(); 
      


    if( $Add_client_account)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Created .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
            window.location = "add-account.php";
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