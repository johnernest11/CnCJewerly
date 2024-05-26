<?php
    ob_start();
    include_once "../../connection.php";
    $conn = dbConnect();
    $account = $conn->prepare("SELECT * FROM client_account");
    $account->execute();
    while($result = $account->fetch(PDO::FETCH_ASSOC)){
      echo '<tr>    
                    <td>'.$result["Id"].'</td>
                    <td>'.$result["username"].'</td>
                    <td>'.$result["lastname"].', '.$result["firstname"].' '.$result["middlename"].'</td>
                    <td>'.$result["username"].'</td>
                    <td>'.$result["email"].'</td>
                    <td> 
                        <form action="view-client-transaction.php" method="POST">
                        <input type="hidden" value="'.$result["Id"].'" name="Id"/>
                        <button type = "submit" class="btn btn-dark-primary" ><i class="fas fa-file-files"></i> Account</i> </button> 
                        </form>
                    </td>
                   
            </tr>';
    }

?>