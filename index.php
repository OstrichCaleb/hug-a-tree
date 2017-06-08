<?php
require_once('vendor/autoload.php');
session_start();

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
			
			$count = 0;
			$options = $dbc->getOptions();
			
			/*
			$f3->clear('SESSION');
			
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
				$f3->set('SESSION.passwordError', 'Please enter a password that contains 6 characters, a number, and a special character');
				$check = true;
			}
			
			if (!isset($_POST['verify']) || $pass != $verify){
				$f3->set('SESSION.verifyError', 'Passwords do not match');
				$check = true;
			}
			*/
			
			
			$activity = new Activity($title, $description, $location, $warning, $photo);
		
			$id = $dbc->addEntry($activity);
			$dbc->addEntryOption($id, $options);
			
			unset($_POST);
		}
		
		$f3->reroute('/');
	});

// run fat-free
$f3->run();