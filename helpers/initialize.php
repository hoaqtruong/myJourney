<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected



// load config file first
require_once(HELPERS.DS.'config.php');

// load basic functions next so that everything after can use them
require_once(HELPERS.DS.'functions.php');

// load core objects
//require_once(HELPERS.DS.'session.php');
require_once(HELPERS.DS.'database.php');
//require_once(HELPERS.DS.'database_object.php');
require_once(HELPERS.DS.'pagination.php');
//require_once(HELPERS.DS."phpMailer".DS."class.phpmailer.php");
require_once(HELPERS.DS."phpMailer".DS."class.smtp.php");
//require_once(LIB_PATH.DS."phpMailer".DS."language".DS."phpmailer.lang-en.php");

// load database-related classes
//require_once(HELPERS.DS.'user.php');
//require_once(HELPERS.DS.'photograph.php');
//require_once(HELPERS.DS.'comment.php');

?>