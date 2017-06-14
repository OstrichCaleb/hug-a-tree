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

// run fat-free
$f3->run();