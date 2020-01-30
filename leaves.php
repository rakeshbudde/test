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
<h4 style="text-align:center;text-transform:uppercase;">Leave Request</h4>
	<div class="col-sm-10 col-sm-offset-2 ">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Leave Request</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Submited Leaves</a></li>
                           
                        </ul>
                </div>
            <div class="panel-body">
              <div class="tab-content">
				<!-- leave req-->
                <div class="tab-pane fade in active" id="tab1default">
				  <form id="form" class="form-horizontal" action="" method="post" >
							
					<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="title">Leave Type:</label>
								<select class="form-control" name="leave_type" id="leave_type" required>
								<option value="Casul">Choose leave</option>
								<option value="Casul">Casul leave</option>
								<option value="Medical">Medical leave</option>
								<option value="Lop">Lop </option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="from_date">From Date:</label>
								<input id="from_date" type="date"  name="from_date" class="form-control" />
							</div>
						</div>

						<div class="col-md-5 col-lg-4">
							<div class="form-group">
								<label class="control-label" for="to_date">To Date:</label>
								<input id="to_date" type="date"  name="to_date" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label class="control-label" for="description">Description:</label>
								<textarea name="description" id="description" class="form-control" cols="" rows="5"></textarea>
							</div>
						</div>
						
						<div class="form-group">        
							<div class="col-sm-offset-0 col-sm-8">
							<input class="btn btn-primary" type="submit" value="Submit">
							</div>
						</div>		
					</div>	
					</div>	
				</form>					
				</div>
				<!-- leave req end-->
						
						<!-- submited leaves tab-->
                        <div class="tab-pane fade" id="tab2default">
						
							<form id="form2" class="form-horizontal" action="ajax/ajax_why_gamyam.php" method="post">
							 <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Leave Type</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Casual Leave</td>
                <td>01/12/2019</td>
                <td>03/12/2019</td>
                <td>Lorem ipsum, or lipsum as it is sometim web designs.</td>
                <td>Pending <i class="fa fa-history" style="font-size:15px;color:orange"></i></td>
                <td>
				<a href="#"><i class="fa fa-edit" style="font-size:20px;color:green" title="Edit"></i></a>
				<a href="#" onclick="myFunctionRej()"><i class="fa fa-trash-o" style="font-size:20px;color:red" title="Delete"></i></a>
				</td>
            </tr>
            <tr>
                <td>Medical Leave</td>
                <td>01/12/2019</td>
                <td>03/12/2019</td>
                <td>Lorem ipsum, or lipsum as it is sometimphi web designs.</td>
                <td>Pending <i class="fa fa-history" style="font-size:15px;color:orange"></i></td>
                <td>
				<a href="#"><i class="fa fa-edit" style="font-size:20px;color:green" title="Edit"></i></a>
				<a href="#" onclick="myFunctionRej()"><i class="fa fa-trash-o" style="font-size:20px;color:red" title="Delete"></i></a>
				</td>
            </tr>
            <tr>
                <td>Casual Leave</td>
                <td>01/12/2019</td>
                <td>03/12/2019</td>
                <td>Lorem ipsum, or lipsum as it is some  or web designs.</td>
                <td>Approved <i class="fa fa-check-circle" style="font-size:15px;color:green"></i></td>
                <td>
				</td>
            </tr>
            <tr>
                <td>Medical Leave</td>
                <td>01/12/2019</td>
                <td>03/12/2019</td>
                <td>Lorem ipsum, or lipsum as it is sometimes .</td>
                <td>Approved <i class="fa fa-check-circle" style="font-size:15px;color:green"></i></td>
                <td>
				</td>
            </tr>
           
            
        </tbody>
        
    </table>
							</form>
							
						</div>
						<!-- submited leaves end-->
                        
                    </div>
                </div>
            </div>
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
</script>

<script>
function myFunctionRej() {
  confirm("Are you sure, You want to Delete");
}
</script>
</html>