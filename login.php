<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/parsley.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/parsley.min.js"></script>
  
  
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<form method="post" name="login_form" data-parsley-validate="" >
			<div class="form-group">
			<label for="username"></label>
			<input type="text" class="form-control" name="username" id="username" value="" placeholder="Enetr Email" required="" data-parsley-type="email">
			</div>
			<div class="form-group">
			<label for="password"></label>
			<input type="password" class="form-control" name="password" id="password" value="" placeholder="Enetr Password" required="" data-parsley-trigger="change">
			</div>
			<input type="submit" name="sumbit" value="Login" class="btn btn-primary">
		</form>
	</div>
	</div>
	</div>
</body>
<!--<script>
function fnLoginValidate(){
	
	if(document.login_form.username.value==""){
		alert('please enter email id');
		document.login_form.username.focus();
		return false;
	}
	if(document.login_form.password.value==""){
		alert('please enter password');
		document.login_form.password.focus();
		return false;		
	}
}

</script>-->
</html>