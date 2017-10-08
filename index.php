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
	$dbc = $GLOBALS['dbc'];
	
	$f3->set('hikes', $dbc->getHikes());
	
	echo Template::instance()->render('pages/hiking.html');
});

$f3->route('GET /logout', function($f3){
	$_SESSION['id'] = NULL;
	$_SESSION['admin'] = NULL;
	$f3->reroute('/');
});

$f3->route('GET|POST /login', function($f3){
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		
		$dbc = $GLOBALS['dbc'];
		
		$creds = $dbc->login($user);
		
		if ($creds['password'] == $pass){
			if ($creds['type'] == 1){
				$f3->set('SESSION.admin', $creds['user_id']);
				$_SESSION['admin'] = $creds['type'];
			}
			elseif ($creds['type'] == 2){
				
			}
			$f3->set('SESSION.id', $id);
			$_SESSION['id'] = $creds['user_id'];
			unset($_POST);
		}
	}
	
	if ($_SESSION['id'] != NULL){
		$f3->reroute('/');
	}
	echo Template::instance()->render('pages/login.html');
});

$f3->route('GET /admin', function($f3){
	if ($_SESSION['admin'] == NULL){
		$f3->reroute('/');
	}
	
	$dbc = $GLOBALS['dbc'];
	$f3->set('users', $dbc->allUsers());
	
	echo Template::instance()->render('pages/admin.html');
});

$f3->route('POST /change-users', function($f3){
	if ($_SESSION['admin'] == NULL) {
		$f3->reroute('/');
	}
	$dbc = $GLOBALS['dbc'];
	
	if (isset($_POST['admin'])) {
		foreach ($_POST['change'] as $id) {
			$dbc->updateUser($id, 0);
		}
	} elseif (isset($_POST['user'])) {
		foreach ($_POST['change'] as $id) {
			$dbc->updateUser($id, 1);
		}
	} else {
		if ($_SESSION['delete'] == NULL) {
			$_SESSION['delete'] = "1";
			$f3->set('warning', "Are you sure you want to delete?");
		} else {
			foreach ($_POST['change'] as $id){
				$dbc->delUser($id);
			}
			$_SESSION['delete'] = NULL;
		}
	}
	
	$f3->set('users', $dbc->allUsers());
	
	echo Template::instance()->render('pages/admin.html');
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
			$subTitle = htmlspecialchars($_POST['subTitle']);
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
			
			if (!isset($_POST['subTitle'])){
				$f3->set('SESSION.subTitleError', 'Please enter a sub title');
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
				$activity = new Activity($title, $description, $location, $warning, $subTitle, $photo);
			
				$id = $dbc->addEntry($activity);
				if (isset($_POST['opt']))
					$dbc->addEntryOption($id, $options);
				if (isset($_POST['types']))
					$dbc->addEntryType($id, $types);
				$dbc->addEntryPhoto($id, $photo);
			} else {
				$f3->set('SESSION.title', $title);
				$f3->set('SESSION.subTitle', $subTitle);
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
		$dbc = $GLOBALS['dbc'];
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			
			$check = false;
			$username = htmlspecialchars($_POST['username']);
			$password = $_POST['password'];
			$pass = md5($_POST['password']);
			$verify = md5($_POST['verify']);
			
			$f3->clear('SESSION');
			if (!isset($_POST['username']) || $dbc->checkUsername($username)){
				$f3->set('SESSION.usernameError', 'Username taken');
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
				$user = new User($username, $pass, -1);
			
				$id = $dbc->addUser($user);
				
				$_SESSION['id'] = $id;
				$f3->set('SESSION.id', $id);
				unset($_POST);
			} else {
				$f3->set('SESSION.username', $username);
				$f3->reroute('/new-user');
			}
			
			unset($_POST);
		}
		
		$f3->reroute('/');
	});

// run fat-free
$f3->run();

function validatePass($pass)
	{
		$r1='/[A-Z]/';  //Uppercase
		$r2='/[a-z]/';  //lowercase
		$r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // special characters
		$r4='/[0-9]/';  //numbers
		
		if(preg_match($r1, $pass) < 1 && preg_match($r2, $pass) < 1) return false;
		
		if(preg_match($r3, $pass) < 1) return false;
	 
		if(preg_match($r4, $pass) < 1) return false;
	 
		if(strlen($pass) < 6) return false;
	 
		return true;
	 }