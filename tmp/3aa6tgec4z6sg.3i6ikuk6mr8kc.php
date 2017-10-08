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
