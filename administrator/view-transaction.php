
<?php
include "sidebar1.php";
include "assets/reciept_query.php";
?>
<main>
    <style type="text/css">
      #logo {
  position: absolute;
  left: 150px;
  top: 60px;
  z-index: 1;
}
    </style>
<!-- Begin Page Content -->
<div class="row ">
      <!-- Page Heading -->
      <br>
      <hr>
            <div class="card card-cascade narrower col-lg-10">
              <div class="card-body card-body-cascade ">
              <form method="POST" class="needs-validation"  novalidate >

                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    
                <img src="../PICTURE/header_reciept.png" id="logo" width="80%" height="150">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-2">

                    </div>
                    <!-- <div class="col-4 text-center">
                        <div >
                            <br>
                            <h6><b><?php echo date("Y-m-d");?></b></h6><hr>
                            <label for="validationDefault01" class="form-label text-center">DATE</label>
                        </div>
                    </div> -->

                </div>
                <div class="form-row">
                <input type="hidden"  class="form-control" id="validationCustom01" name="Id" value="<?php echo$Id;?>" >
                    <div class="col-md-4">
                        <h4 for="validationDefault01" class="form-label"><b>Invoice for</b></h4>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="fullname" name="fullname" value="<?php echo$Fullname;?>">
                    </div>

                    <div class="col-md-4">
                        <h6 for="validationDefault01" class="form-label">Payable to #</h6>
                        <h6 for="validationDefault01" class="form-label">C & J Group of Companies INC.</h6>
                        <h6 for="validationDefault01" class="form-label">Zelle: 562-673-0621 / Cherry Paredes</h6>
                    </div>

                    <div class="col-md-4">
                        <h5 for="validationDefault01" class="form-label"><b>Invoice #</b></h5>
                        <h6 for="validationDefault01" class="form-label">Consolidated Invoice</h6>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="invoice_number" name="invoice_number" value="<?php echo$InvoiceNum;?>"disabled>
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-2">
                        <h4 for="validationDefault01" class="form-label"><b>Contact #</b></h4>
                    </div>
                    <div class="col-md-2    ">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="contact" name="contact" value="<?php echo$Contact;?>">
                    </div>

                    <div class="col-md-4">
                        <h6 for="validationDefault01" class="form-label">Venmo: @CCPreciousGemsBoutique ( Additionl: 2& + 0.10c Charge)</h6>
                    </div>

                    <div class="col-md-4">
                        <h5 for="validationDefault01" class="form-label"><b>Live Seller</b></h5>
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-4">
                        <h4 for="validationDefault01" class="form-label"><b>Email</b></h4>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="email" name="email" value="<?php echo$Email;?>">
                    </div>

                    <div class="col-md-4">
                        <h6 for="validationDefault01" class="form-label">Cashapp: $dhyeswall1980 (Additional 2.75% charge)</h6>
                        <h6 for="validationDefault01" class="form-label">Paypal: Chechelle@gmail.com (Additional 3.5% charge)</h6>
                    </div>

                    <div class="col-md-4">
                        <h5 for="validationDefault01" class="form-label"><b>Date of Invoice </b></h5>
                        <h6 for="validationDefault01" class="form-label">Consolidated Invoice</h6>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="date" name="date" value="<?php echo$Date;?>" >
                    </div>

                </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <br>

                <table class="table table-striped  leaveSta " width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> <h4 for="validationDefault01" class="form-label"><b>Description</b></h4></th>
                            <th> <h5 for="validationDefault01" class="form-label"><b>Unit Price</b> </h5>
                            <h5 for="validationDefault01" class="form-label"><b> (per gram or per pc)</b></h5></th>
                            <th>  <h5 for="validationDefault01" class="form-label"><b>Grams or</b></h5>
                            <h5 for="validationDefault01" class="form-label"><b>No. of Pcs</b></h5></th>
                            <th> <h5 for="validationDefault01" class="form-label"><b>Total price</b></h5></th>
                        </tr>
                    </thead>
                    <!-- <tbody class=" output " id="output"> -->
                        <tbody>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="description" name="description" value="<?php echo$Description;?>"> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="unitPrice" name="unitPrice" value="<?php echo$UnitPrice;?>"> </td>         
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="grams" name="grams" value="<?php echo$Grams;?>"> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="totalPrice" name="totalPrice" value="<?php echo$TotalPrice;?>"> </td>   
                            
                        </tbody>
                        <tbody>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>         
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " value=" " disabled> </td>   
                            
                        </tbody>
                        <tbody>
                            <td><h4 for="validationDefault01" class="form-label"><b>Shipping</b></h4></td>
                            <td> </td>         
                            <td> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="shipping" name="shipping" value="<?php echo$Shipping;?>"> </td>   
                            
                        </tbody>
                        <tbody>
                        <td class="table-danger"><h4 for="validationDefault01" class="form-label"><b>Insurance</b></h4></td>
                            <td class="table-danger" </td>         
                            <td class="table-danger"> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="insurance" name="insurance" value="<?php echo$Insurance;?>"> </td>   
                            
                        </tbody>
                        <tbody>
                        <td><h4 for="validationDefault01" class="form-label"><b>*Signature Mail</b></h4></td>
                            <td> </td>         
                            <td> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name="" value=""> </td>     
                            
                        </tbody>
                   
                </table>
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <div class="form-row">

                    <div class="col-md-2">
                        <h6 for="validationDefault01" class="form-label"><b>Notes</b></h6>
                    </div>

                    <div class="col-md-5">
                        <h6 for="validationDefault01" class="form-label">NO RETURNS, NO EXCHANGE</h6>
                    </div>

                    <div class="col-md-2">
                        <h6 for="validationDefault01" class="form-label"><b>Subtotal </b></h6>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="subtotal" name="subtotal"  value="<?php echo$Subtotal;?>" disabled>
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-5">
                        <h6 for="validationDefault01" class="form-label">C&C WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE FOR PACKAGES WITHPUT INSURANCE   </h6>
                    </div>

                    <div class="col-md-2">
                        <h6 for="validationDefault01" class="form-label"><b>Deposit </b></h6>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="deposit" name="deposit"  value="<?php echo$Deposit;?>">
                    </div>

                    </div>

                <div class="form-row">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-5">
                    </div>

                    <div class="col-md-2">
                        <h6 for="validationDefault01" class="form-label"><b>Promo/Discount </b></h6>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="discount" name="discount"  value="<?php echo$Discount;?>">
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-5">
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="totalAmount" name="totalAmount"  value="<?php echo$TotalAmount;?>" disabled>
                    </div>

                </div>
                    
                <div class="col-12 text-right">  
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#confirmModa1l">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Update
                    </a>    
                </div>
                      <!-- MODAL FORM CONFIRMATION -->
                <div class="modal fade" id="confirmModa1l" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to update this Transaction?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Yes" below if you are ready to submit .</div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary"  name="UpdateTransactionButton"  >Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                </form>

                <form action="fpdf/Reciept.php" method="POST" target='_blank'>
                <div class="row" >
                            <div class="col-12 text-right">
                                    <?php
                                ob_start();
                                include_once "../connection.php";
                                $conn = dbConnect();
                                $ID =$_POST['Id'];
                                $account = $conn->prepare("SELECT * FROM invoice 
                                WHERE Id = :Id");
                                
                                $account->execute( ['Id' => $ID]);
                                while($result = $account->fetch(PDO::FETCH_ASSOC)){
                                 

                              echo'
                                
                                <input type="hidden" value="'.$result["Id"].'" name="Id"/>
                                <button type = "submit" class="btn btn-warning" ><i class="fas fa-print"> Print Reciept</i> </button> 
                                ';
                                }
                                
                            ob_end_flush();
                            ?>
                            </div>
                </div>
                </form>
        </div>
                   
    </div>
             
                   
                
            </div>
        </div>
        <br>


        <div class="card-cascade narrower col-lg-6">
            <div class="tab-content" id="nav-tabContent">
    <!--PENDING REQUEST NAVIGATION TAB-->
   
        </div>
        </div>


</div>
</div>

</main>
   

