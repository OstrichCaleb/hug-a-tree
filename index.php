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
$f3->route('GET /',
		function($f3){
			$view = new View;
			echo $view->render('pages/index.html');
		 });

// run fat-free
$f3->run();