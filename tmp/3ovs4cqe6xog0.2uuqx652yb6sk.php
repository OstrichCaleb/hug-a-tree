<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Duck Nguyen">
    <meta name="description" content="Duck Nguyen Portfolio Homepage">

    <title>Hug A Tree | Hiking Guide</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    
    <script src="https://use.fontawesome.com/b9f1530c0e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/validate.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link href="./css/layout.css" rel="stylesheet">
    <link href="./css/add-location.css" rel="stylesheet">
</head>
<body>
  
  <?php if ($SESSION['id'] == NULL): ?>
    <?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
    <?php else: ?><?php echo $this->render('includes/user-nav.inc.html',NULL,get_defined_vars(),0); ?>
  <?php endif; ?>
	
	<div class="container">
		<div class="card card-container">
      <form action="./submit" method="post" enctype="multipart/form-data" id="location-form" class="form-signin">
				
				<!-- LOCATION TITLE & ERRORS-->
				<label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $SESSION['title'] ?>" required autofocus>
				
				<?php if ($SESSION['titleError'] != NULL): ?>
					
						<div class="alert-danger">
							<strong>Error: </strong><span><?= $SESSION['titleError'] ?></span>
						</div>
					
				<?php endif; ?>
				
				<div class="alert alert-danger">
					<strong>Error: </strong><span id="title-error"></span>
				</div>
					
				<!-- SUBTITLE & ERRORS-->
				<div class="form-group">
					<label for="subTitle">Sub Title</label>
					<input type="text" name="subTitle" id="subTitle" class="form-control" value="<?= $SESSION['subTitle'] ?>" required>
					
					<?php if ($SESSION['subTitleError'] != NULL): ?>
						
							<div class="alert-danger col-sm-8">
								<strong>Error: </strong><span><?= $SESSION['subTitleError'] ?></span>
							</div>
						
					<?php endif; ?>
					
					<div class="alert alert-danger">
						<strong>Error: </strong><span id="sub-title-error"></span>
					</div>					
				</div>

					
				<!-- LOCATION TITLE & ERRORS-->
				<div class="form-group">
					<label for="description">Description</label> <br>
					<textarea rows="4"  name="description" id="description" class="form-control" form="location-form"><?= $SESSION['description'] ?></textarea>
					
					<?php if ($SESSION['descriptionError'] != NULL): ?>
						
							<div class="alert-danger">
								<strong>Error: </strong><span><?= $SESSION['descriptionError'] ?></span>
							</div>
						
					<?php endif; ?>
					
					<div class="alert alert-danger">
						<strong>Error: </strong><span id="description-error"></span>
					</div>					
				</div>
				
					
				<!-- OPTIONAL WARNING -->
				<div class="form-group">
					<label for="warning">Warning</label>
					<input type="text" name="warning" id="warning" value="<?= $SESSION['warning'] ?>">					
				</div>
				
				
				
				<!-- LOCATION & ERRORS -->
				<div class="form-group">
					<label for="location">Location</label>
					<input type="text" name="location" id="location" value="<?= $SESSION['location'] ?>" required>
					
					<?php if ($SESSION['locationError'] != NULL): ?>
						
							<div class="alert-danger">
								<strong>Error: </strong><span><?= $SESSION['locationError'] ?></span>
							</div>
						
					<?php endif; ?>
						
					<div class="alert alert-danger">
						<strong>Error: </strong><span id="location-error"></span>
					</div>					
				</div>

					
				<!-- LOCATION OPTIONS -->
				<div class="form-group">
					<label>Options</label>
					<br>
					<div class="row">
						<?php foreach (($options?:[]) as $option): ?>
							<div class="col-sm-3">
								<input type="checkbox" name="opt[]" value="<?= $option ?>" class="checkboxes"> <?= $option.PHP_EOL ?>
							</div>
						<?php endforeach; ?>							
					</div>
				
				</div>

        
				<!-- TYPES OF ACTIVITIES & ERRORS -->
				<div class="form-group">
					<label>Types of Activity</label>
					<br>
					<div class="row">
						<?php foreach (($types?:[]) as $type): ?>
							<div class="col-sm-3">
								<input type="checkbox" name="types[]" value="<?= $type ?>"> <?= $type ?><br>
							</div>
						<?php endforeach; ?>						
					</div>
				</div>
				
				<!-- UPLOAD PHOTO & ERRORS -->
				<div class="form-group">
					<label for="photo" class="control-label col-sm">Upload Photo</label>
					<input id="photo" type="file" name="photo" accept="image/*"/>
					
					<?php if ($SESSION['photoError'] != NULL): ?>
						
							<div class="alert-danger col-sm-8">
								<strong>Error: </strong><span><?= $SESSION['photoError'] ?></span>
							</div>
						
					<?php endif; ?>
					
					<div class="alert alert-danger">
							<strong>Error: </strong><span id="photo-error"></span>
					</div>					
				</div>
				
				<!-- SUBMIT BUTTON -->
				<hr>
				<input class="btn btn-lg btn-primary btn-block btn-signin" name="action" id="submit" type="submit"></input>
      </form>
    </div>
  </div>
	
	<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>