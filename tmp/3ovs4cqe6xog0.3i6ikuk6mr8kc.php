<<<<<<< HEAD
<!--
---------PHP VALIDATION------------

$dbc = $GLOBALS['dbc'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$error = false;
	if (!isset($_POST['email'])){
		$f3->('SESSION.emailErr', 'Please enter your email address');
		$error = true;
	} else if (isset($_POST['email'])) {
		if(email not in database){
			$f3->('SESSION.emailErr', 'Email not found. Try again.');
			$error = true;
		}
	}
	
	if (!isset($_POST['password'])){
		$f3->('SESSION.passwordErr', 'Please enter a valid password');
		$error = true;
	} else if (isset($_POST['password'])) {
		if(password not in database){
			$f3->('SESSION.passErr', 'Password not found. Try again.');
			$error = true;
		}
	}
	
	if(!error){
		//go to user's homepage
	}
	else{
		$f3->reroute('/login');
	}
	unset($_POST);
}
 $f3->reroute('/');

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Duck Nguyen">
    <meta name="description" content="Duck Nguyen Portfolio Homepage">

    <title>Hug A Tree | Biking Guide</title>
	
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />
	
    <script src="https://use.fontawesome.com/b9f1530c0e.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
	<!-- YO DEL ONE DOT TO MAKE CSS, IMAGES, JS WORK WITH F3 -->
	<!-- YO DEL ONE DOT TO MAKE CSS, IMAGES, JS WORK WITH F3 -->
	<!-- YO DEL ONE DOT TO MAKE CSS, IMAGES, JS WORK WITH F3 -->
	<!-- YO DEL ONE DOT TO MAKE CSS, IMAGES, JS WORK WITH F3 -->
	<!-- YO DEL ONE DOT TO MAKE CSS, IMAGES, JS WORK WITH F3 -->
    <link href="../css/layout.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
</head>
<body>
    <div class="navbar-fixed-top">
        <div class="top-wrapper">
            <ul class="nav navbar-nav pull-right">
                <li><a href="">ABOUT</a></li> 
                <li>
                    <form class="form-inline">
                    <div class="input-group">
                        <span class="input-group-addon" id="site-search"><i class="fa fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="site search" aria-describedby="site-search">
                    </div>
                    </form>
                </li>
            </ul> 
        </div>
        <nav class="navbar navbar-default bottom-wrapper" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="col-md-12">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="home-nav">
                    <ul class="nav navbar-nav">
                        <li id="logo"><a href="./"><img src="../images/hugatree.png" alt=""></a></li>
                        <li><a href="./hiking">HIKING</a></li>
                        <li><a href="./biking">BIKING</a></li>
                        <li><a href="./chilling">CHILLING</a></li>
                        <li><a href="#">JOIN</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#">SIGNUP/ POST NEW/ LOGIN</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
	
	<div class="container">
        <div class="card card-container">
			
			<div class="row">
				<img class="card-img-top" src="../images/login.png">
			</div>
			
            <form id="login-form" class="form-signin" method="post" action="#" autocomplete="on">
                <!-- EMAIL SECTION + ERROR MESSAGE -->
                <input type="text" name="email" id="email" class="form-control" placeholder="Email address" autofocus>
                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="emailErr"></span>
				</div>
                
                <!-- PASSWORD SECTION + ERROR MESSAGE -->
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <div class="alert alert-danger">
					<strong>Error:</strong> <span id="passErr"></span>
				</div>
				
                
                <!-- REMEMBER ME + SIGNIN BUTTON-->
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="rememberMe" value="remember-me"> Remember me
                    </label>
                </div>
               
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="submit" type="submit">
                    Sign in
                </button>
				<!--FORGOT YOUR PASSWORD-->
				<a href="forgotpassword.php" class="forgot-password">
					Forgot the password?
				</a>
            </form>
        </div><!-- /card-container -->
    </div>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script src="../js/login-validate.js"></script>
</body>
</html>
=======
<!- Caleb Ostrander
    Blog Assignment
/>
<!DOCTYPE html>
<html lang="en">
  
  
  <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />
  
  <script src="https://use.fontawesome.com/b9f1530c0e.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom CSS -->
  <link href="./css/layout.css" rel="stylesheet">
  <link href="./css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    
    <?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>

    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-9">
          <h1>Welcome back!</h1>
          <h4>Please log in below</h4>
        </div>
        <div class="col-sm-3">
          <img src="#">
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
          <form action="./login" method="post" class="form-vertical">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="row">
                  <div class="form-group col-sm-8">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="username" class="control-label col-sm">Username</label>
                  </div>
                  <div class="form-group col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="password" class="control-label col-sm">Password</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
                <input name="action" type="submit" value="Login" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
</body>
</html>
>>>>>>> 20bf09195575b2ae283025107fe129bea5817e8c
