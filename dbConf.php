<?php

/**
 * The base configurations of MySQL settings.
 *  
 *  Database Constrants
 *  If consttants are defined : CONNECT if NOT defined :  DEFINE CONSTANTS
 *
 *  FILL BELOW VALUES : DB_SERVER       localhost OR 127.0.0.1
 *                      DB_NAME         your database name  
 *                      DB_USER         database username
 *                      DB_PASSWORD     database password
*/


/** MySQL Server / hostname .... optionally localhost*/
defined("DB_SERVER") ? null : define("DB_SERVER", "localhost");

/** MySQL Database to be Connect to*/
defined("DB_NAME") ? null: define("DB_NAME", "shoppingCartDemo");

/** MySQL database username */
defined("DB_USER") ? null : define ("DB_USER", "your db username here ....");

/** MySQL database password */
defined("DB_PASSWORD") ? null : define ("DB_PASSWORD", "your db password here ....");

/** Database Charset to use in creating database tables. */
defined('DB_CHARSET') ? null : define('DB_CHARSET', 'utf8');


?>