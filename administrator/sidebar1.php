<?php

    include 'assets/session.php';   
    // include "assets/profile_query.php";
if(!isset($_SESSION['Administrator_login'])){
    header('location:../index.php');
    } 

   
        else {

        }
   
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel = "icon" href = "../PICTURE/dmmmsu.png" type = "image/x-icon" class="img-fluid"> 
  <title>C&C Jewerly Invoice System</title>
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="css/addons/datatables.min.css">
  <link rel="stylesheet" href="css/addons/datatables-select.min.css">
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  

           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <script src="js/sweetalert.js"></script>

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn mdb-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-1 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
          <?php echo $_SESSION['role'];?>
          </div>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
                    <li>
                    <a class='collapsible-header waves-effect arrow-r' href='dashboard.php'>
                    <i class='w-fa fas fa-tachometer-alt'></i>Dashboard
                  </a>
                  </li>
                  <li>
                  <a class='collapsible-header waves-effect arrow-r'>
                    <i class='w-fa fas fa-image'></i>Invoice<i class='fas fa-angle-down rotate-icon'></i>
                  </a>
                  <div class='collapsible-body'>
                    <ul>
                    <li>
                      <a href='add-transaction.php' class='waves-effect'>Add Transaction</a>
                   </li> 
                    <li>
                      <a href='today-transaction.php' class='waves-effect'>Today Transaction</a>
                   </li> 
                   <!-- <li>
                      <a href='today-transaction.php' class='waves-effect'>List</a>
                   </li> 
                      <li>
                        <a href='report.php' class='waves-effect'>Reports</a>
                      </li>  -->
                    </ul>
                  </div>
                </li>
                    
                  <li>
                  <a class='collapsible-header waves-effect arrow-r'>
                    <i class='w-fa fas fa-image'></i>Client<i class='fas fa-angle-down rotate-icon'></i>
                  </a>
                  <div class='collapsible-body'>
                    <ul>
                    <li>
                    <a href='add-account.php' class='waves-effect'>Add Account</a>
                   </li> 
                      <li>
                        <a href='client-account.php' class='waves-effect'>Accounts</a>
                      </li>
                      <!-- <li>
                        <a href='op_md_history.php' class='waves-effect'>Out Patient History</a>
                      </li> 
                      <li>
                        <a href='op_md_reports.php' class='waves-effect'>Out Patient Reports</a>
                      </li>  -->
                    </ul>
                  </div>
                </li>
            </li>
            
             
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>C&C Jewerly Invoice System</p>
      </div>

      <div class="d-flex change-mode">
        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-md"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['lastname'];?>, <?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['middlename'];?>.</span> 
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="account.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a> -->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>    
            </div>
          </li>

        </ul>

    </nav>
    <!-- Navbar -->
    </div>

  </header>
  <!-- Main Navigation -->

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="assets/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>



                </div>
            </div>
          </div>
      </div>



    
<!----------------------------------------------------------------------END OF PROGRAM ATTENDED MODAL -----------------------



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
  <!-- DataTables  -->
  <script type="text/javascript" src="js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="js/addons/datatables-select.min.js"></script>
  
  <!-- Initializations -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Data Picker Initialization
    $('.datepicker').pickadate();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Small chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4285F4",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });



    
    
    
  </script>
   <script src="Inputmask/dist/inputmask.min.js"></script>

<!-- As A jQuery Plugin -->

<script src="Inputmask/cdn/jquery.min.js"></script>

<script src="Inputmask/dist/jquery.inputmask.min.js"></script>

<!-- Allows data-input attribute -->

<script src="Inputmask/dist/bindings/inputmask.binding.js"></script>