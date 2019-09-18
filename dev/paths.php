<?php

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
* These defines should only be edited if you have cake installed in
* a directory layout other than the way it is distributed.
* When using custom settings be sure to use the DS and do not add a trailing DS.
*/

/**
* The full path to the directory which holds "src", WITHOUT a trailing DS.
*/
#define('ROOT', dirname(__DIR__));
define('ROOT', __DIR__);

/**
* The actual directory name for the application directory. Normally
* named 'app'.
*/
define('APP_DIR', 'app');

/**
* Path to the application's directory.
*/
define('APP', ROOT . DS . APP_DIR . DS);

 

/**
* The actual directory name for images directory. Normally
* named 'app'.
*/
define('IMAGES_DIR',   'images');

/**
* Path to the application's directory.
*/
// define('IMAGES', ROOT . DS . IMAGES_DIR . DS);
define('IMAGES', ROOT . DS . IMAGES_DIR .DS );

 