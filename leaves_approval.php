<?php
//include('db.php');
 //include('session.php');

?>
<!doctype html>
<html>
<head>
<?php //include('header.php'); ?>
<title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--data table css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <!--data table css end -->
<!--<script>
$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
   url: "ajax/ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
  
   success: function(data)
      {
		if(data=='invalid')
		{
		  alert('failed');
		}
		else
		{
		 alert('success');
		 $("#form")[0].reset(); 
		}
      },

     error: function(e) 
      {
		 alert('something went wrong');
      }          
    });
 }));
 
 
});

</script>-->

</head>
<body>
<div class="container">
<h4 style="text-align:center;text-transform:uppercase;">Leave Approvals</h4>
	<div class="col-sm-12 col-sm-offset-0">
            
            
			<!-- Approval leaves tab-->
			<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Leave Type</th>
							<th>From Date</th>
							<th>To Date</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</thead>
				<tbody>
					<tr>
						<td>Casual Leave</td>
						<td>01/12/2019</td>
						<td>03/12/2019</td>
						<td>Lorem ipsum, known, is dummy text used in laying out print, graphic or web designs.</td>
						<td>
						<a href="#"><i class="fa fa-check-circle" style="font-size:20px;color:green" title="Approve"></i></a>
						<a href="#" onclick="myFunctionRej()"><i class="fa fa-times-circle" style="font-size:20px;color:red" title="Reject"></i></a>
						</td>
					</tr>
					<tr>
						<td>Medical Leave</td>
						<td>01/12/2019</td>
						<td>03/12/2019</td>
						<td>Lorem ipsum, or lipsum ass dummy text used in laying out print, graphic or web designs.</td>
						<td>
						<a href="#"><i class="fa fa-check-circle" style="font-size:20px;color:green" title="Approve"></i></a>
						<a href="#" onclick="myFunctionRej()"><i class="fa fa-times-circle" style="font-size:20px;color:red" title="Reject"></i></a>
						</td>
					</tr>
					<tr>
						<td>Casual Leave</td>
						<td>01/12/2019</td>
						<td>03/12/2019</td>
						<td>Lorem ipsum, or lipsum as it is sometxt used isg out print, graphic or web designs.</td>
						<td>
						<a href="#"><i class="fa fa-check-circle" style="font-size:20px;color:green" title="Approve"></i></a>
						<a href="#" onclick="myFunctionRej()"><i class="fa fa-times-circle" style="font-size:20px;color:red" title="Reject"></i></a>
						</td>
					</tr>
					<tr>
						<td>Medical Leave</td>
						<td>01/12/2019</td>
						<td>03/12/2019</td>
						<td>Lorem ipsum, or lipsum as it is sometied insint, graphic or web designs.</td>
						
						<td>
						<a href="#"><i class="fa fa-check-circle" style="font-size:20px;color:green" title="Approve"></i></a>
						<a href="#" onclick="myFunctionRej()"><i class="fa fa-times-circle" style="font-size:20px;color:red" title="Reject"></i></a>
						</td>
					</tr>
				   
					
				</tbody>
        
			</table>
				<!-- Approval leaves end-->
             </div>
        </div>
	
</body>
<!--data table js -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<!--data table js end-->

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

function myFunctionRej() {
  confirm("Are you sure, You want to Reject");
}
</script>
</html>