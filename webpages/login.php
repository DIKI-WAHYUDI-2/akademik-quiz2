
<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller is a front-end responsive framework based on Material design & Bootstrap.">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Login - Propeller Admin</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $app->config["site"]; ?>/public/images/favicon.png">

<!-- Google icon -->
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo $app->config["site"]; ?>/public/fonts/material-icons/material-icons.css">


<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/bootstrap.min.css">
<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller.min.css">

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="<?php echo $app->config["site"]; ?>/public/css/propeller-admin.css">
<!-- Styles Ends --></head>


<body class="body-custom">
<div class="logincard">
  	<div class="pmd-card card-default pmd-z-depth">
		<div class="login-card">
			<form action="<?php echo $app->config["site"]; ?>/Pengguna/login" method="post">	
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo">
						<a href="javascript:void(0);"><img src="<?php echo $app->config["site"]; ?>/public/images/logo-icon.png" alt="Logo"></a>
					</div>
					<h3>Sign In <span>with <strong>PROPELLER</strong></span></h3>
				</div>
				
				<div class="pmd-card-body">
					<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                </div>
				<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
					<div class="form-group clearfix">
						<div class="checkbox pull-left">
							<label class="pmd-checkbox checkbox-pmd-ripple-effect">
								<input type="checkbox" checked="" value="">
								<span class="pmd-checkbox"> Remember me</span>
							</label>
						</div>
						<span class="pull-right forgot-password">
							<a href="javascript:void(0);">Forgot password?</a>
						</span>
					</div>
					<button type="submit" class="btn pmd-ripple-effect btn-primary btn-block">Login</button>
                    
					<p class="redirection-link">Don't have an account? <a href="javascript:void(0);" class="login-register">Sign Up</a>. </p>
                    
				</div>
				
			</form>
		</div>
		
		<div class="register-card">
			<div class="pmd-card-title card-header-border text-center">
				<div class="loginlogo">
					<a href="javascript:void(0);"><img src="<?php echo $app->config["site"]; ?>/public/images/logo-icon.png" alt="Logo"></a>
				</div>
				<h3>Sign Up <span>with <strong>PROPELLER</strong></span></h3>
			</div>
			<form>	
			  <div class="pmd-card-body">
              
              	<div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                            <input type="text" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                            <input type="text" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>
                    
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                            <input type="text" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>
              </div>
			  
			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
				<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Sign Up</a>
			  	<p class="redirection-link">Already have an account? <a href="javascript:void(0);" class="register-login">Sign In</a>. </p>
			  </div>
			</form>
		</div>
		
		<div class="forgot-password-card">
			<form>	
			  <div class="pmd-card-title card-header-border text-center">
				<div class="loginlogo">
					<a href="javascript:void(0);"><img src="<?php echo $app->config["site"]; ?>/public/images/logo-icon.png" alt="Logo"></a>
				</div>
				<h3>Forgot password?<br><span>Submit your email address and we'll send you a link to reset your password.</span></h3>
			</div>
			  <div class="pmd-card-body">
					<div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="inputError1" class="control-label pmd-input-group-label">Email address</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">email</i></div>
                            <input type="text" class="form-control" id="exampleInputAmount">
                        </div>
                    </div>
				</div>
			  <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
			  	<a href="index.html" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Submit</a>
			  	<p class="redirection-link">Already registered? <a href="javascript:void(0);" class="register-login">Sign In</a></p>
			  </div>
			</form>
		</div>
	</div>
</div>

<!-- Scripts Starts -->
<script src="<?php echo $app->config["site"]; ?>/public/js/jquery-1.12.2.min.js"></script>
<script src="<?php echo $app->config["site"]; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo $app->config["site"]; ?>/public/js/propeller.min.js"></script>
<script>
	$(document).ready(function() {
		var sPath=window.location.pathname;
		var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
		$(".pmd-sidebar-nav").each(function(){
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
			$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
			$(this).find("a[href='"+sPage+"']").addClass("active");
		});
	});
</script>
<!-- login page sections show hide -->
<script type="text/javascript">
	$(document).ready(function(){
	 $('.app-list-icon li a').addClass("active");
		$(".login-for").click(function(){
			$('.login-card').hide()
			$('.forgot-password-card').show();
		});
		$(".signin").click(function(){
			$('.login-card').show()
			$('.forgot-password-card').hide();
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
		$(".login-register").click(function(){
			$('.login-card').hide()
			$('.forgot-password-card').hide();
			$('.register-card').show();
		});
		
		$(".register-login").click(function(){
			$('.register-card').hide()
			$('.forgot-password-card').hide();
			$('.login-card').show();
		});
		$(".forgot-password").click(function(){
			$('.login-card').hide()
			$('.register-card').hide()
			$('.forgot-password-card').show();
		});	
});
</script> 

<!-- Scripts Ends -->

</body>
</html>