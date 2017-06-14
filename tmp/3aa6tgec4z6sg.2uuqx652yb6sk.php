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
    <link href="./css/hiking.css" rel="stylesheet">
</head>
<body>
  
  <?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
  
  <div class="wrapper">
		<div class="container">
      <form action="./submit" method="post" enctype="multipart/form-data" id="location-form" class="form-vertical">
        <input type="text" name="title" id="title" value="<?= $SESSION['title'] ?>"><label for="title" required>Title</label>
          <?php if ($SESSION['titleError'] != NULL): ?>
            
              <div class="alert-danger col-sm-8">
                <strong>Error: </strong><span><?= $SESSION['titleError'] ?></span>
              </div>
            
          <?php endif; ?>
          <div class="alert alert-danger col-sm-8">
            <strong>Error: </strong><span id="title-error"></span>
          </div>
        <textarea rows="4" cols="100%" name="description" id="description" form="location-form"><?= $SESSION['description'] ?></textarea><label for="description">Description</label>
          <?php if ($SESSION['descriptionError'] != NULL): ?>
            
              <div class="alert-danger col-sm-8">
                <strong>Error: </strong><span><?= $SESSION['descriptionError'] ?></span>
              </div>
            
          <?php endif; ?>
          <div class="alert alert-danger col-sm-8">
            <strong>Error: </strong><span id="description-error"></span>
          </div>
        <input type="text" name="warning" id="warning" value="<?= $SESSION['warning'] ?>"><label for="warning">Warning</label>
        <input type="text" name="location" id="location" value="<?= $SESSION['location'] ?>"><label for="location">Location</label>
          <?php if ($SESSION['locationError'] != NULL): ?>
            
              <div class="alert-danger col-sm-8">
                <strong>Error: </strong><span><?= $SESSION['locationError'] ?></span>
              </div>
            
          <?php endif; ?>
          <div class="alert alert-danger col-sm-8">
            <strong>Error: </strong><span id="location-error"></span>
          </div>
        <label>Options</label>
        <?php foreach (($options?:[]) as $option): ?>
          <input type="checkbox" name="opt[]" value="<?= $option ?>"><?= $option ?><br>
        <?php endforeach; ?>
				<label>Type of Activity</label>
        <?php foreach (($types?:[]) as $type): ?>
          <input type="checkbox" name="types[]" value="<?= $type ?>"><?= $type ?><br>
        <?php endforeach; ?>
        <input id="photo" type="file" name="photo" accept="image/*"/><label for="photo" class="control-label col-sm">Upload Photo</label>
				<?php if ($SESSION['photoError'] != NULL): ?>
					
						<div class="alert-danger col-sm-8">
							<strong>Error: </strong><span><?= $SESSION['photoError'] ?></span>
						</div>
					
				<?php endif; ?>
				<div class="alert alert-danger col-sm-8">
            <strong>Error: </strong><span id="photo-error"></span>
        </div>
        <input name="action" type="submit" value="Submit" class="btn">
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