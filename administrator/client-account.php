<?php
include_once "sidebar1.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-search" aria-hidden="true"></i>Invoice </h1>
<br>
<br>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4 ">
    <div class="card-body">
    <div class="table-responsive">
        <div class="row">
        </div>
        <a name="fetch" id="fetch" value="" class="btn btn-info btn-lg"><i class=" fas fa-view" aria-hidden="true">View Client Accounts</i> </a>
            <table class="table table-striped  leaveSta " width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Fullname</th>
                        <th>Usename</th>
                        <th>Email</th>
                        <th>Transaction</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Fullname</th>
                        <th>Usename</th>
                        <th>Email</th>
                        <th>Transaction</th>
                    </tr>
                </tfoot>
                <tbody class=" output " id="output">
               
                </tbody>
            </table>
            <br>    
        </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
  // This function runs when the document is fully loaded

  $('#fetch').click(function() {
    // This function executes when the element with ID 'fetch' is clicked

    $.ajax({
      // Use jQuery AJAX to make an asynchronous request
      url: "assets/fetch_client_account_query.php",  // Set the URL of the script to be called on the server-side (likely fetches data)
      method: "GET",             // Set the HTTP method to 'GET' (optional, defaults to 'GET' for simple data fetching)
      success: function(data) {
        // This function is called if the AJAX request is successful
        $('#output').html(data); // Update the element with ID 'output' with the received data (likely the fetched content)
        var table = $('table.leaveSta').DataTable();
     $('table.leaveSta tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
      }
    });
    
  });
 
});
  //     } else {
  //       // If the 'search' value is empty
  //       Swal.fire({
  //         position: 'bottom-end',
  //         // Set the position of the Swal (Sweetalert) popup to bottom-end
  //         icon: 'error',
  //         // Set the icon of the Swal popup to error
  //         title: 'No Id Selected.',
  //         // Set the title of the Swal popup
  //         showConfirmButton: false,
  //         // Hide the confirmation button on the Swal popup
  //         timer: 2500
  //         // Set the duration of the Swal popup to 2.5 seconds
  //       }).then(function() {});
  //     }
  //   });
  // });
</script>
</main>

