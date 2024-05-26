<?php
    ob_start();
    include_once "../../connection.php";
    $conn = dbConnect();
    $account = $conn->prepare("SELECT * FROM invoice");
    $account->execute();
    while($result = $account->fetch(PDO::FETCH_ASSOC)){
      echo '<tr>    
                    <td>'.$result["Id"].'</td>
                    <td>'.$result["InvoiceNum"].'</td>
                    <td>'.$result["Fullname"].'</td>
                    <td>'.$result["Fullname"].'</td>
                    <td>'.$result["Description"].'</td>
                    <td>'.$result["TotalAmount"].'</td>
                    <td class="green-text"><b>'.'</b></td>
                    <td> 
                        <form action="view-transaction.php" method="POST">
                        <input type="hidden" value="'.$result["Id"].'" name="Id"/>
                        <button type = "submit" class="btn btn-dark-primary" ><i class="fas fa-file-files"></i> Reciept</i> </button> 
                        </form>
                    </td>
                   
            </tr>';
    }

?>