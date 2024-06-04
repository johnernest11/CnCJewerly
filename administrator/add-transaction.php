
<?php
include "sidebar1.php";
include_once "assets/add_reciept_query.php";
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
<div class="row package-row">
      <!-- Page Heading -->
      <br>
      <hr>
            <div class="card card-cascade narrower col-lg-10">
              <div class="card-body card-body-cascade ">
                <form method="POST">

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

                    <div class="col-md-4">
                        <h4 for="validationDefault01" class="form-label"><b>Invoice for</b></h4>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="fullname" name="fullname"  required>
                    </div>

                    <div class="col-md-4">
                        <h6 for="validationDefault01" class="form-label">Payable to #</h6>
                        <h6 for="validationDefault01" class="form-label">C & J Group of Companies INC.</h6>
                        <h6 for="validationDefault01" class="form-label">Zelle: 562-673-0621 / Cherry Paredes</h6>
                    </div>

                    <div class="col-md-4">
                        <h5 for="validationDefault01" class="form-label"><b>Invoice #</b></h5>
                        <h6 for="validationDefault01" class="form-label">Consolidated Invoice</h6>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="invoiceNum" name="invoiceNum" value="NV-0000 " >
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-2">
                        <h4 for="validationDefault01" class="form-label"><b>Contact #</b></h4>
                    </div>
                    <div class="col-md-2    ">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="contact" name="contact" placeholder="Customer Contact #" required>
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
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="email" name="email" placeholder="">
                    </div>

                    <div class="col-md-4">
                        <h6 for="validationDefault01" class="form-label">Cashapp: $dhyeswall1980 (Additional 2.75% charge)</h6>
                        <h6 for="validationDefault01" class="form-label">Paypal: Chechelle@gmail.com (Additional 3.5% charge)</h6>
                    </div>

                    <div class="col-md-4">
                        <h5 for="validationDefault01" class="form-label"><b>Date of Invoice </b></h5>
                        <h6 for="validationDefault01" class="form-label">Consolidated Invoice</h6>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="date" name="date" value="<?php echo date("Y-m-d");?>" >
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
                    <tbody class="package-row">
                        <tr>
                        <td class="table-danger">
                        <input type="text" id="customDescription" name="customDescription" class="form-control" placeholder="Enter custom description if not available">
                            <select class="mdb-select colorful-select dropdown-primary md-form" name="description" id="description" searchable="Search here..">
                                <option value="" disabled selected>Search Jewerly Description</option>
                                <option value="Italian 18k Yellow Gold Mariner Link Chain Necklace (20 inches)">Italian 18k Yellow Gold Mariner Link Chain Necklace (20 inches)</option>
                                <option value="South Sea Pearl Stud Earrings (10mm)">South Sea Pearl Stud Earrings (10mm)</option>
                                <option value="14k White Gold Diamond Tennis Bracelet (7.0 inches) ">14k White Gold Diamond Tennis Bracelet (7.0 inches) </option>
                                <option value="Gold Vermeil Huggie Hoop Earrings:">Gold Vermeil Huggie Hoop Earrings:</option>
                                <option value="Multi-Strand Freshwater Pearl Necklace">Multi-Strand Freshwater Pearl Necklace</option>
                            </select>
                            
                        </td>
                            <td class="table-danger"><input type="text" name="Unitprice" id="Unitprice" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger"><input type="text" name="grams" id="grams" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice" name="Totalprice" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice1" id="Unitprice1" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams1" id="grams1" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice1" name="Totalprice1" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice2" id="Unitprice2" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams2" id="grams2" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice2" name="Totalprice2" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice3" id="Unitprice3" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams3" id="grams3" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice3" name="Totalprice3" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice4" id="Unitprice4" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams4" id="grams4" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice4" name="Totalprice4" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice5" id="Unitprice5" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams5" id="grams5" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice5" name="Totalprice5" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="" name=""> </td>
                            <td><input type="text" name="Unitprice6" id="Unitprice6" class="form-control" onkeyup="getValues()"/></td>
                            <td><input type="text" name="grams6" id="grams6" class="form-control" onkeyup="getValues()"/></td>
                            <td class="table-danger">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" 
                                id="Totalprice6" name="Totalprice6" onkeyup="getValues()" />
                            </td>
                        </tr>
                        <tbody>
                            <td><h4 for="validationDefault01" class="form-label"><b>Shipping</b></h4></td>
                            <td> </td>         
                            <td> </td>
                            <td><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="shipping" name="shipping" onkeyup="getValues()"> </td>   
                            
                        </tbody>
                        <tbody>
                        <td class="table-danger"><h4 for="validationDefault01" class="form-label"><b>Insurance</b></h4></td>
                            <td class="table-danger" </td>         
                            <td class="table-danger"> </td>
                            <td class="table-danger"><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="insurance" name="insurance" onkeyup="getValues()"> </td>   
                            
                        </tbody>
                        <tbody>
                        <td><h4 for="validationDefault01" class="form-label"><b>*Signature Mail</b></h4></td>
                            <td> </td>         
                            <td> </td>
                            <td> </td>     
                            
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
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="subTotal" name="subTotal" style="font-size: 25px;">
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
                        <h4><input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="deposit" name="deposit" onkeyup="getValues()">
                    </div>

                    </div>

                <div class="form-row">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-4">
                    </div>

                    <div class="col-md-3">
                        <h6 for="validationDefault01" class="form-label"><b>Promo/Discount </b></h6>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="discount" name="discount" onkeyup="getValues()" >
                    </div>

                </div>
                <div class="form-row">

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-4">
                    </div>

                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" id="totalAmount" name="totalAmount" style="font-size: 30px;" >
                    <!-- <h4 name="totalAmount" id="totalAmount" onkeyup="getValues()">$<strong></h4> -->
                    </div>

                </div>
                    <div class="col-md-4">
                        <h4 for="validationDefault01" class="form-label"><b>Account Id Number:</b></h4>
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " id="accountId" name="accountId">
                    </div>

                <div class="col-12 text-right">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#confirmModa1l">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Submit
                    </a>    
                </div>
        </div>
                   
    </div>
                   <!-- MODAL FORM CONFIRMATION -->
        <div class="modal fade" id="confirmModa1l" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                <div class="modal-body">Select "Yes" below if you are ready to submit .</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
                     <button type="submit" class="btn btn-primary"  name="confirmsubmit1"  >Submit</button>
                </div>
            </div>
        </div>
    </div>
                </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

  </script>
<script>
        //CUSTOM DESCRIPTION
        const descriptionSelect = document.getElementById('description');
        const customDescriptionInput = document.getElementById('customDescription');

        descriptionSelect.addEventListener('change', function() {
            if (descriptionSelect.value === '') {
            customDescriptionInput.classList.remove('d-none'); // Show input field
            } else {
            customDescriptionInput.classList.add('d-none'); // Hide input field
            customDescriptionInput.value = ''; // Clear the value if previously entered
            }
        });
</script>

<script>
        //COMPUTATION OF INVOICE
        function getValues() {
            var rows = document.querySelectorAll("div.package-row");

            rows.forEach(function (currentRow) {

                // Handle Unitprice and grams (assuming IDs)
                var Unitprice = Number(currentRow.querySelector('#Unitprice').value);
                var grams = Number(currentRow.querySelector('#grams').value);

                // Calculate Totalprice based on Unitprice and grams
                var Totalprice = grams* Unitprice;

                // Update Totalprice display with currency symbol
                currentRow.querySelector("#Totalprice").value = Totalprice.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
               
                // Handle Unitprice1 and grams1 (assuming IDs)
                var hasUnitprice1 = currentRow.querySelector('#Unitprice1') !== null; // Check if Unitprice1 exists
                var hasGrams1 = currentRow.querySelector('#grams1') !== null; // Check if grams1 exists
                var Totalprice1 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice1 && hasGrams1) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice1 = Number(currentRow.querySelector('#Unitprice1').value);
                grams1 = Number(currentRow.querySelector('#grams1').value);
                Totalprice1 = Unitprice1 * grams1;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice1 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice1").value = Totalprice1.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice1").value = ''; // Clear Totalprice1 if not calculated
                }

                // Handle Unitprice2 and grams2 (assuming IDs)
                var hasUnitprice2= currentRow.querySelector('#Unitprice2') !== null; // Check if Unitprice1 exists
                var hasGrams2 = currentRow.querySelector('#grams2') !== null; // Check if grams1 exists
                var Totalprice2 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice2 && hasGrams2) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice2 = Number(currentRow.querySelector('#Unitprice2').value);
                grams2 = Number(currentRow.querySelector('#grams2').value);
                Totalprice2= Unitprice2 * grams2;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice2 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice2").value = Totalprice2.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice2").value = ''; // Clear Totalprice1 if not calculated
                }

                // Handle Unitprice3 and grams3 (assuming IDs)
                var hasUnitprice3= currentRow.querySelector('#Unitprice3') !== null; // Check if Unitprice1 exists
                var hasGrams3 = currentRow.querySelector('#grams3') !== null; // Check if grams1 exists
                var Totalprice3 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice3 && hasGrams3) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice3 = Number(currentRow.querySelector('#Unitprice3').value);
                grams3 = Number(currentRow.querySelector('#grams3').value);
                Totalprice3= Unitprice3 * grams3;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice3 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice3").value = Totalprice3.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice3").value = ''; // Clear Totalprice1 if not calculated
                }

                // Handle Unitprice4 and grams4 (assuming IDs)
                var hasUnitprice4= currentRow.querySelector('#Unitprice4') !== null; // Check if Unitprice1 exists
                var hasGrams4 = currentRow.querySelector('#grams4') !== null; // Check if grams1 exists
                var Totalprice4 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice4 && hasGrams4) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice4 = Number(currentRow.querySelector('#Unitprice4').value);
                grams4 = Number(currentRow.querySelector('#grams4').value);
                Totalprice4= Unitprice4 * grams4;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice4 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice4").value = Totalprice4.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice4").value = ''; // Clear Totalprice1 if not calculated
                }

                // Handle Unitprice5 and grams5 (assuming IDs)
                var hasUnitprice5= currentRow.querySelector('#Unitprice5') !== null; // Check if Unitprice1 exists
                var hasGrams5 = currentRow.querySelector('#grams5') !== null; // Check if grams1 exists
                var Totalprice5 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice5 && hasGrams5) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice5 = Number(currentRow.querySelector('#Unitprice5').value);
                grams5 = Number(currentRow.querySelector('#grams5').value);
                Totalprice5= Unitprice5 * grams5;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice5 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice5").value = Totalprice5.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice5").value = ''; // Clear Totalprice1 if not calculated
                }

                // Handle Unitprice5 and grams5 (assuming IDs)
                var hasUnitprice6= currentRow.querySelector('#Unitprice6') !== null; // Check if Unitprice1 exists
                var hasGrams6 = currentRow.querySelector('#grams6') !== null; // Check if grams1 exists
                var Totalprice6 = 0; // Initialize Totalprice1 to 0

                if (hasUnitprice6 && hasGrams6) { // Only calculate if both Unitprice1 and grams1 are present
                Unitprice6 = Number(currentRow.querySelector('#Unitprice6').value);
                grams6 = Number(currentRow.querySelector('#grams6').value);
                Totalprice6= Unitprice6 * grams6;
                }

                // Update Totalprice1 display conditionally (only if calculated)
                if (Totalprice6 > 0) { // Check if Totalprice1 has a value
                currentRow.querySelector("#Totalprice6").value = Totalprice6.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                } else {
                currentRow.querySelector("#Totalprice6").value = ''; // Clear Totalprice1 if not calculated
                }
                

                var shipping = Number(currentRow.querySelector('#shipping').value);
                var insurance = Number(currentRow.querySelector('#insurance').value);
                // Calculate subTotal based on Totalprice and (optional) Totalprice1
                var subTotal = Totalprice 
                 +(Totalprice1 > 0 ? Totalprice1 : 0)
                 +(Totalprice2 > 0 ? Totalprice2 : 0)
                 +(Totalprice3 > 0 ? Totalprice3 : 0)
                 +(Totalprice4 > 0 ? Totalprice4 : 0)
                 +(Totalprice5 > 0 ? Totalprice5 : 0)
                 +(Totalprice6 > 0 ? Totalprice6 : 0) 
                 +(shipping > 0 ? shipping : 0) 
                 +(insurance > 0 ? insurance : 0);

                // Handle deposit, discount, and totalAmount (assuming IDs)
                
                var deposit = Number(currentRow.querySelector('#deposit').value);
                var discount = Number(currentRow.querySelector('#discount').value);
                var totalAmount = subTotal - deposit - discount;

                // Update subTotal and totalAmount displays with currency symbol and formatting
                currentRow.querySelector("#subTotal").value = subTotal.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
                currentRow.querySelector("#totalAmount").value = totalAmount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
            });
        }
      </script>

</main>
   

