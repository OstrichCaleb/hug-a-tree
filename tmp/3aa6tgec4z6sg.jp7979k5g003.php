<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hug A Tree | New User</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />
  
  <script src="https://use.fontawesome.com/b9f1530c0e.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/validate-user.js"></script>

  <!-- Custom CSS -->
  <link href="./css/layout.css" rel="stylesheet">
  <link href="./css/signup.css" rel="stylesheet">
  
</head>
<body>
  
  <?php if ($SESSION['id'] == NULL): ?>
    <?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
    <?php else: ?><?php echo $this->render('includes/user-nav.inc.html',NULL,get_defined_vars(),0); ?>
  <?php endif; ?>
  
  <div class="container">
    <div class="card card-container">
        <div class="row">
          <img class="card-img-top" src="./images/signup.png">
        </div>
			
        <form action="./submit-user" method="post" enctype="multipart/form-data" id="user-form"  id="registration-form" class="form-signin form-vertical"autocomplete="on">
          
          <!-- USERNAME + ERROR MESSAGE -->
          <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?= ($SESSION['username']) ?>" required autofocus>
          <div class="alert alert-danger">
            <strong>Error:</strong> <span id="username-error"></span>
          </div>
          <?php if ($SESSION['usernameError'] != NULL): ?>
            
              <div class="alert-danger">
                <strong>Error: </strong><span><?= ($SESSION['usernameError']) ?></span>
              </div>
            
          <?php endif; ?>
          
          <!-- PASSWORD SECTION + ERROR MESSAGE -->
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="alert alert-danger">
            <strong>Error:</strong> <span id="password-error"></span>
          </div>
          <?php if ($SESSION['passwordError'] != NULL): ?>
            
              <div class="alert-danger">
                <strong>Error: </strong><span><?= ($SESSION['passwordError']) ?></span>
              </div>
            
          <?php endif; ?>
          
          
          <!-- VERIFY PASSWORD SECTION + ERROR MESSAGE -->
          <input type="password" name="verify" id="verify" class="form-control" placeholder="Verify Password">
          <div class="alert alert-danger">
            <strong>Error:</strong> <span id="verify-error"></span>
          </div>
          <?php if ($SESSION['verifyError'] != NULL): ?>
            
              <div class="alert-danger">
                <strong>Error: </strong><span><?= ($SESSION['verifyError']) ?></span>
              </div>
            
          <?php endif; ?>
          
          <!-- SUBMIT BUTTON -->
          <hr>
          <button class="btn btn-lg btn-primary btn-block btn-signin" name="action" id="submit" type="submit">
              SIGN ME UP
          </button>
          
        </form>
    </div><!-- /card-container -->
  </div>
     

<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
</body>
</html>