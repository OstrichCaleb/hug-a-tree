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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link href="./css/layout.css" rel="stylesheet">
    <link href="./css/chilling.css" rel="stylesheet">
</head>
<body>
    
	<?php if ($SESSION['id'] == NULL): ?>
		<?php echo $this->render('includes/nav.inc.html',NULL,get_defined_vars(),0); ?>
		<?php else: ?><?php echo $this->render('includes/user-nav.inc.html',NULL,get_defined_vars(),0); ?>
	<?php endif; ?>
	
    <div class="landscape">
        <!-- Navigation -->
        <div class="display-text">
            <p class="text-center">TOP PICKS FOR CHILL SPOTS</p>
        </div>
    </div>
	
	<div class="wrapper">
		<div class="container">
			
		<?php foreach (($chills?:[]) as $hike): ?>
				<div class="row chill-location">
					<div class="col-md-4">
						<img class="img-responsive img-thumbnail" id="" src="images/<?= $hike->getPicture() ?>" alt="">
					</div>
					<div class="col-md-8">
						<h3><?= $hike->getMainTitle() ?><br><small><?= $hike->getSubTitle() ?></small></h3>
						<span class="hashtags"><i class="fa fa-hashtag" aria-hidden="true"></i> Chill Spot</span>
						<p><i class="fa fa-fw fa-map-signs" aria-hidden="true"></i> 7.0 miles</p>
						<p><i class="fa fa-fw fa-level-up" aria-hidden="true"></i> 14,409ft.</p>
						<p class="descriptive-icons">
							<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							<i class="fa fa-paw" aria-hidden="true"></i>
							<i class="fa fa-camera" aria-hidden="true"></i>
							<i class="fa fa-fire" aria-hidden="true"></i>
						</p>
						<p>
							<?= $hike->getDescription().PHP_EOL ?>
						</p>
					</div>
				</div>
			<?php endforeach; ?>		
		</div>
	</div>
	
	<?php echo $this->render('includes/footer.inc.html',NULL,get_defined_vars(),0); ?>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>