<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('setup.inc');
require_once('./functions/functions.php');



// Set some defaults for the template, view, and date

$LAYOUT = 'default.html';
if (isset($_GET['x']) && trim($_GET['x']) == 'display') {
	$LAYOUT = 'show_img.html';
}

$VIEW = 'home.html';


//$TEMPLATE = $default_template;

/**
* Conventions hostingplex.com
* $_REQUEST['v'] is the view the user requests
* Later we will add more conventions here...
*/



// Find out what file to display in VIEW to display
$file_displayed = 'home.html';

if (isset($_REQUEST['x'])) {
	
	$file_displayed = $_REQUEST['x'];

} elseif (isset($_REQUEST['s'])) {
	
	$file_displayed = $_REQUEST['s'];

} elseif (isset($_REQUEST['v']) && !isset($_REQUEST['s'])) {

	$file_displayed = $_REQUEST['v'];
	
} else {
	
	$file_displayed = "home";
}


	
// define the VIEWS and include according MODEL and CONTROLLER files

	
	if (file_exists(VIEWS . basename($file_displayed) . '.html')) {


			if(file_exists(CONTROLLERS . basename($file_displayed) . '.php')) {

				include CONTROLLERS . basename($file_displayed) . '.php';
			}
			
			if(file_exists(MODELS . basename($file_displayed) . '.php')) {

				include MODELS . basename($file_displayed) . '.php';
			}
			
			$VIEW = basename($file_displayed) . '.html';
	
	} else {
		
			$VIEW = 'error404.html';
		
	}
	



include (LAYOUTS . $LAYOUT);

?>