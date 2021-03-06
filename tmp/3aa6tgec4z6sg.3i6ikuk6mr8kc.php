<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Duck Nguyen">
    <meta name="description" content="Duck Nguyen Portfolio Homepage">

    <title>Hug A Tree | Login</title>
	
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />
	
    <script src="https://use.fontawesome.com/b9f1530c0e.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link href="./css/layout.css" rel="stylesheet">
    <link href="./css/login.css" rel="stylesheet">
</head>
<body>
	
	<?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
	
	<div class="container">
        <div class="card card-container">
			
			<div class="row">
				<img class="card-img-top" src="./images/login.png">
			</div>
			
            <form id="login-form" class="form-signin" action="./login" method="post" autocomplete="on">
                <!-- EMAIL SECTION + ERROR MESSAGE -->
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus required>
                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="emailErr"></span>
				</div>
                
                <!-- PASSWORD SECTION + ERROR MESSAGE -->
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>

                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="passErr"></span>
				</div>
				
                
                <!-- REMEMBER ME + SIGNIN BUTTON-->
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="rememberMe" value="remember-me"> Remember me
                    </label>
                </div>
               
                <input class="btn btn-lg btn-primary btn-block btn-signin" name="action" id="submit" type="submit" value="Sign in">
                </input>
				
				<!--FORGOT YOUR PASSWORD-->
				<div>
					<a href="forgotpassword.php" class="forgot-password">
						Forgot the password?
					</a>
				</div>
				
				
            </form>
        </div><!-- /card-container -->
    </div>
	
	<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script src="../js/login-validate.js"></script>
</body>
</html>