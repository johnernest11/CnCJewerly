function displayStudentInformations_d(){
    var id_no = document.getElementById("table_search").value;
    // alert("dasdasd");
     $.ajax({
      type: 'post',
      url: 'php/displayStudentInformation.php',
      data:{id_no:id_no},
      success:function(data){
        console.log(data);
       var data = JSON.parse(data);
       for(var ctr = 0; ctr<data.length;ctr++) {
          $('#displaySearched1').append("<tr><td>"+data[ctr].id_no+"</td><td>"+data[ctr].last_name+', '+data[ctr].first_name+' '+data[ctr].mid_name+"</td><td><div class='dropdown show'><a class='btn btn-success dropdown-toggle dropdown-hover' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Select Action</a><div class='dropdown-menu' aria-labelledby='dropdownMenuLink'><a class='dropdown-item' href='doctorPatientForm.html?id="+data[ctr].id_no+"'>Add Record</a><a class='dropdown-item' href='patientFormHistory_d.html?id="+data[ctr].id_no+"'>Patient Form History</a><a class='dropdown-item' href='OutPatientFrom.html?id="+data[ctr].id_no+"'>Out Patient Form</a></div></div></td></tr>")
       }
      }
    });
      var userInfo = localStorage.getItem("username");
//userinfo
 $.ajax({
              url: 'php/userInfo.php',
              type: 'post',
              data: {userInfo:userInfo},
              success: function(response) {
                  //console.log(response);
              $("#userInfo").append(response);  
              
      } 
  });
  }