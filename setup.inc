<?php
/*
// DEFINE CONSTANTS ------------------------------
define ('FUNCTIONS', dirname(__FILE__) . '/functions/' );

define ('CONTROLLERS', dirname(__FILE__) . '/controllers/' );

	define ('CONTROLLERS_ADMIN', CONTROLLERS . 'admin/');

define ('MODELS', dirname(__FILE__) . '/models/');

	define ('MODELS_ADMIN', MODELS . 'admin/');

define ('VIEWS' ,	dirname(__FILE__) . '/functions/' );

	define ('VIEWS_ADMIN' , VIEWS . 'admin/' );

	define ('LAYOUTS' , VIEWS . 'layouts/' );

define ('CONFIG' , dirname(__FILE__) . '/config/' );


define ('IMAGES' , dirname(__FILE__) . '/images/' );

	define ('ECARDS' , IMAGES . 'ecards/' );

*/
// Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER')   ? null : define("DB_USER", "root");
defined('DB_PASS')   ? null : define("DB_PASS", "root");
defined('DB_NAME')   ? null : define("DB_NAME", "myjourney");

// DEFINE CONSTANTS ------------------------------
// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__FILE__));



defined('HELPERS')   ? null : define("HELPERS", SITE_ROOT.DS.'helpers');

define ('FUNCTIONS', dirname(__FILE__) . '/functions/' );


define ('PHPLIB' , dirname(__FILE__) . '/phplib/' );

define ('CONTROLLERS', PHPLIB . '/controllers/');

define ('MODELS', PHPLIB . '/models/');

define ('MODELS_AMIN', MODELS . '/admin/');

define ('VIEWS' , PHPLIB . '/views/' );

define ('VIEWS_ADMIN' , VIEWS . '/admin/' );

define ('LAYOUTS' , VIEWS . '/layouts/' );

define ('CONFIG' , dirname(__FILE__) . '/config/' );

define ('LIB' , PHPLIB . '/lib/' );

define ('IMAGES' , dirname(__FILE__) . '/images/' );

define ('FLASH', SITE_ROOT . '/Flash/');

