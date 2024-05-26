
<?php
include "sidebar1.php";
include "assets/add_account_query.php";
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
<div>
      <!-- Page Heading -->
<main>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
      

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-10 mb-2">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Create Account</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <form method="POST">

                  <!-- First row -->

                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text"  id="lastname" name="lastname" class="form-control validate">
                        <label for="form1" data-error="wrong" data-success="right">Last name</label>
                      </div>
                    </div>
                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text"  id="firstname" name="firstname" class="form-control validate">
                        <label for="form2" data-error="wrong" data-success="right">First name</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- First row -->
                  <div class="row">
                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="email"  id="email" name="email"  class="form-control validate">
                        <label for="form76">Email address</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text"  id="username" name="username"  class="form-control validate">
                        <label for="form81" data-error="wrong" data-success="right">Username</label>
                      </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- Third row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-12">
                      <div class="md-form mb-0">
                      </div>
                    </div>
                  </div>
                  <!-- Third row -->

                  <!-- Fourth row -->
                  <div class="col-md-12 text-center my-4">
                    <a class="btn btn-info " href="#" data-toggle="modal" data-target="#confirmModa1l">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Create Account
                    </a>    
                  <!-- Fourth row -->

              
                <!-- Edit Form -->

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
                     <button type="submit" class="btn btn-primary"  name="CreateAccount"  >Submit</button>
                </div>
            </div>
        </div>
    </div>
    </form>
  </main>
</div>

<script>
    $('shipping').keyup(function() {
        var sum = 0;
        $('.insurance').each(function() {
            sum += Number($(this).val());
        });
        $('#subtotal').val(sum);
    });
</script>

</main>
   

