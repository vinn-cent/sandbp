<?php
/**
 * System configurations.
 * 
 * @package Mayor Emmanuel
 * @author  Mayor Emmanuel https://github.com/
 * @license GNU GENERAL PUBLIC LICENSE https://www.gnu.org/licenses/
 * @link    https://github.com/
 *
 * @version	1.0
 */
ob_start();
/**
 * For developers: Mayor Emmanuel debugging mode.
 *
 * Configure error reporting options
 * Change this to false to enable the display of notices during development.
 */
define('IS_ENV_PRODUCTION', false);

// Turn on error reporting
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', !IS_ENV_PRODUCTION);

// Set error log.
ini_set('error_log', 'log/php-error.txt');

// ** Set time zone to use date/time functions without warnings ** //
date_default_timezone_set('Africa/Lagos'); //http://www.php.net/manual/en/timezones.php

//require the function
require_once "functions.php";

/** Set character set */
define('CHARSET', 'utf8mb4');

