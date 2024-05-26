
<?php
include_once "sidebar1.php";
// include_once "../../modal/new_employee-modal.php";
?>

  <!-- Begin Page Content -->
<div class="container-fluid">
      
<main>
<!-- Page Heading -->
<br>
<h1 class="h3 mb-2 text-gray-800"> <i class=" fas fa-user" aria-hidden="true"></i> WELCOME!! </h1>
<br>
<hr>

        <br>
            <br>
<!--  -->
<!-- /.container-fluid -->

<script>
    $(document).ready(function() {
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
} );
</script>
</main>

