<?php
include_once "sidebar1.php";
include "assets/account_query.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-lg-4 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold"></h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />
                <div class="row flex-center">
                <input type="hidden"  class="form-control" id="validationCustom01" name="Id" value="<?php echo$Id;?>" >
                <h5 class="mb-3 font-weight-bold"><strong><?php echo$lastname;?>,<?php echo$firstname;?> <?php echo$middlename;?></strong></h5>
                </div>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Transactions</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped  leaveSta " id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>Id</th>
                        <th>Invoice #</th>
                        <th>Fullname</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>TotalAmount</th>
                        <th>Image</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Invoice #</th>
                        <th>Fullname</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>TotalAmount</th>
                        <th>Image</th>
                        <th>Reciept</th>
                    </tr>
                </tfoot>
                <tbody>  
                <?php
                  ob_start();
                  include_once "../connection.php";
                  $conn = dbConnect();
                  $Id = $_POST['Id'];
                  // $account = $conn->prepare("SELECT * FROM physical_examination AS pe INNER JOIN past_medical_history AS pmh 
                  //   ON pe.mh_id = pmh.mh_id   WHERE pe.Status='COMPLETED' AND pe.id_no =:id ");
                  //   $account->execute(['id'=>$Id]);
                  $account = $conn->prepare("SELECT * FROM client_account INNER JOIN invoice 
                  ON  client_account.Id = invoice.AccountID
                  WHERE client_account.Id = $Id");
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
                      </tbody>
                  </table>
                      <br>    
                  </div>
              </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Edit Account -->

    </div>

  </main>
</main>

