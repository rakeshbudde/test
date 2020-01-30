<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body{
	background-color:#307bd3;
}
.login-container{
    margin-top: 10%;
}
.login-form-1{
    padding: 3%;
	background-color:#fff;
}
.login-form-1 h3{
    text-align: center;
    color: #fff;
}
.login-form-2{
    padding: 3%;
    background: #fff;
	border-right: 1px solid #D2D2D2;
}

.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 100%;
    padding: 1.5%;
    border: none;
    cursor: pointer;
	background-color:#307bd3;
	color:#fff;
}

.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #9E9E9E;
    font-weight: 400;
    text-decoration: none;
	font-size:13px;
}
.form-control:focus {
   
    box-shadow: none;
}
</style>
</head>
<body>
<div class="container login-container">

            <div class="row d-flex justify-content-center">
                <div class="col-md-5 login-form-2 text-center ">
                    <img src="Todquest_logo.png" alt="company_logo" class="img-fluid mt-5" width="200" height="200">
                </div>
				
                <div class="col-md-5 login-form-1">
                    <h3>Login</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password" value="" required />
                        </div>
                        
                        <div class="form-group text-right">
                            <a href="forgot_pswd.php" class="ForgetPwd">Forgot Password?</a>
                        </div>
						<div class="form-group">
                            <input type="submit" class="btnSubmit rounded" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
		</body>
		</html>