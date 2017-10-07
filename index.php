<?php
require_once('vendor/autoload.php');
session_start();
new Session();

/*
 * Name: Duck Nguyen
 * Filename: index.php
*/

// Create a database object
$dbc = new HugATreeDB();

// create an instance of the Base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3){
	$dbc = $GLOBALS['dbc'];
	$array = $dbc->getMostRecent();
	$f3->set('top1', $array[0]);
	$f3->set('top2', $array[1]);
	$f3->set('top3', $array[2]);
	
	echo Template::instance()->render('pages/home.html');
});

//Route to hiking page
$f3->route('GET /hiking', function($f3){
	echo Template::instance()->render('pages/hiking.html');
});

  //Route to add a location page
$f3->route('GET /add-location', function($f3){
	$dbc = $GLOBALS['dbc'];
	$f3->set('options', $dbc->getOptions());
	$f3->set('types', $dbc->getTypes());
	
	echo Template::instance()->render('pages/add-location.html');
});

//Route to biking page
$f3->route('GET /biking', function($f3){
	echo Template::instance()->render('pages/biking.html');
});

//Route to chilling page
$f3->route('GET /chilling', function($f3){
	echo Template::instance()->render('pages/chilling.html');
});

$f3->route('GET /new-user', function(){
  echo Template::instance()->render('pages/new-user.html');
});


// Submit a new location
$f3->route('GET|POST /submit', function($f3)
    {
		$dbc = $GLOBALS['dbc'];
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			if (move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . basename($_FILES["photo"]["name"]))){
				$photo = $_FILES["photo"]["name"];
			}
			
			$check = false;
			$title = htmlspecialchars($_POST['title']);
			$description = htmlspecialchars($_POST['description']);
			$warning = htmlspecialchars($_POST['warning']);
			$location = htmlspecialchars($_POST['location']);
			
			$options = $_POST['opt'];
			$types = $_POST['types'];
			
			$f3->clear('SESSION');
			
			if (!isset($_POST['title'])){
				$f3->set('SESSION.titleError', 'Please enter a title');
				$check = true;
			}
			
			if (!isset($_POST['description'])){
				$f3->set('SESSION.descriptionError', 'Please enter a description');
				$check = true;
			}
			
			if (!isset($_POST['location'])){
				$f3->set('SESSION.locationError', 'Please enter a location');
				$check = true;
			}
			
			if (!isset($photo)){
				$f3->set('SESSION.photoError', 'Please enter a photo');
				$check = true;
			}
			
			if (!$check){
				$activity = new Activity($title, $description, $location, $warning, $photo);
			
				$id = $dbc->addEntry($activity);
				if (isset($_POST['opt']))
					$dbc->addEntryOption($id, $options);
				if (isset($_POST['types']))
					$dbc->addEntryType($id, $types);
			} else {
				$f3->set('SESSION.title', $title);
				$f3->set('SESSION.description', $description);
				$f3->set('SESSION.warning', $warning);
				$f3->set('SESSION.location', $location);
				unset($_POST);
				$f3->reroute('/add-location');
			}
			unset($_POST);
		}
		
		$f3->reroute('/');
	});

	$f3->route('GET|POST /submit-user', function($f3)
    {
		$bloggerDB = $GLOBALS['bloggerDB'];
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			if (move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . basename($_FILES["photo"]["name"]))){
				$photo = $_FILES["photo"]["name"];
			}
			var_dump($_POST);
			$check = false;
			$username = htmlspecialchars($_POST['username']);
			$email = htmlspecialchars($_POST['email']);
			$bio = htmlspecialchars($_POST['bio']);
			$password = $_POST['password'];
			$pass = md5($_POST['password']);
			$verify = md5($_POST['verify']);
			
			$f3->clear('SESSION');
			var_dump($_POST);
			if (!isset($_POST['username']) || $bloggerDB->checkUsername($username)){
				$f3->set('SESSION.usernameError', 'Username taken');
				$check = true;
			}
			
			if (!isset($_POST['email']) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
				$f3->set('SESSION.emailError', 'Please enter a valid email address');
				$check = true;
			}
			
			if (!isset($_POST['bio'])){
				$f3->set('SESSION.bioError', 'Please enter a bio');
				$check = true;
			}
			
			if (!isset($_POST['password']) || !validatePass($_POST['password'])){
				$f3->set('SESSION.passwordError', 'IDK');
				$check = true;
			}
			
			if (!isset($_POST['verify']) || $pass != $verify){
				$f3->set('SESSION.verifyError', 'Passwords do not match');
				$check = true;
			}
			
			if (!$check){
				$blogger = new Blogger($username, $email, $photo, $bio, -1, 0, $pass, "NA");
			
				$id = $bloggerDB->addBlogger($blogger);
				
				$_SESSION['id'] = $id;
				$f3->set('SESSION.id', $id);
				unset($_POST);
			} else {
				$f3->set('SESSION.username', $username);
				$f3->set('SESSION.email', $email);
				$f3->set('SESSION.bio', $bio);
				
				//$f3->reroute('/new-blogger');
			}
			
			unset($_POST);
		}
		
		//$f3->reroute('/');
	});

// run fat-free
$f3->run();