<!- Caleb Ostrander
    Blog Assignment
/>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>New User</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />
  
  <script src="https://use.fontawesome.com/b9f1530c0e.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/validate-user.js"></script>

  <!-- Custom CSS -->
  <link href="./css/layout.css" rel="stylesheet">
  <link href="./css/index.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  
  <?php if ($SESSION['id'] == NULL): ?>
    <?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
    <?php else: ?><?php echo $this->render('includes/user-nav.inc.html',NULL,get_defined_vars(),0); ?>
  <?php endif; ?>
  
<div class="col-md-12 page-content">
  <div class="container">
    <div class="container-fluid">
      <div class="row content">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-9">
              <h1>Become a User!</h1>
              <h4>Create a new account below</h4>
            </div>
          </div>
          <div class="row">
            <form action="./submit-user" method="post" enctype="multipart/form-data" id="user-form" class="form-vertical">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-8">
                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?= $SESSION['username'] ?>" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="username" class="control-label col-sm">Username</label>
                  </div>
                  <div class="alert alert-danger col-sm-8">
                    <strong>Error: </strong><span id="username-error"></span>
                  </div>
                  <?php if ($SESSION['usernameError'] != NULL): ?>
                    
                      <div class="alert-danger col-sm-8">
                        <strong>Error: </strong><span><?= $SESSION['usernameError'] ?></span>
                      </div>
                    
                  <?php endif; ?>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="password" class="control-label col-sm">Password</label>
                  </div>
                  <div class="alert alert-danger col-sm-8">
                    <strong>Error: </strong><span id="password-error"></span>
                  </div>
                  <?php if ($SESSION['passwordError'] != NULL): ?>
                    
                      <div class="alert-danger col-sm-8">
                        <strong>Error: </strong><span><?= $SESSION['passwordError'] ?></span>
                      </div>
                    
                  <?php endif; ?>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                    <input type="password" id="verify" class="form-control" name="verify" placeholder="Verify" required>
                  </div>
                  <div class="col-sm-4">
                    <label for="verfiy" class="control-label col-sm">Verify</label>
                  </div>
                  <div class="alert alert-danger col-sm-8">
                    <strong>Error: </strong><span id="verify-error"></span>
                  </div>
                  <?php if ($SESSION['verifyError'] != NULL): ?>
                    
                      <div class="alert-danger col-sm-8">
                        <strong>Error: </strong><span><?= $SESSION['verifyError'] ?></span>
                      </div>
                    
                  <?php endif; ?>
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  <input name="action" type="submit" value="Create Account!" class="btn">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
</body>
</html>
