<?php
require_once('vendor/autoload.php');
session_start();

/*
 * Name: Duck Nguyen
 * Filename: index.php
*/

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
// run fat-free
$f3->run();