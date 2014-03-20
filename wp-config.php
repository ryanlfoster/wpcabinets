<?php
/**
 * WP Cabinets wp-config.php file
 * This will configure WordPress optimally for use with cabinets deployments
 * You shouldn't need to make any changes to this file.
 *
 * App Configuration happens in the config folder
 * Server configuration is loaded from env variables
 * Designed to work with: https://github.com/rohmann/wpwhetstone
 */

/** Set Environment (Assume development if not production or staging) **/
$cabinets_env = getenv( 'CABINETS_ENV' );
define('CABINETS_ENV', ( $cabinets_env == 'production' || $cabinets_env == 'staging') ? $cabinets_env : 'development' );
unset($cabinets_env);

/** URL and Folder Structure **/
define('ABSPATH', dirname(__FILE__) . '/' );
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));
define('WP_CONTENT_DIR', ABSPATH . '/app');
define('WP_CONTENT_URL', WP_HOME . '/app');

/** MySQL Connection **/
define('DB_HOST', getenv('DB_HOST') );
define('DB_USER', getenv('DB_USER') );
define('DB_PASSWORD', getenv('DB_PASSWORD') );
define('DB_NAME', getenv('DB_NAME') );

/** Database config. No need to mess around with these */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_';

/**
 *  Authentication Unique Keys and Salts. (https://api.wordpress.org/secret-key/1.1/salt/)
 */

define('AUTH_KEY',         getenv('AUTH_KEY') );
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY') );
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY') );
define('NONCE_KEY',        getenv('NONCE_KEY') );
define('AUTH_SALT',        getenv('AUTH_SALT') );
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') );
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT') );
define('NONCE_SALT',       getenv('NONCE_SALT') );

/** Load General configuration **/
require_once('config/application.php');

/** Load Environment specific configuration **/
require_once( dirname(__FILE__) . '/config/' . CABINETS_ENV . '.php' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp/wp-settings.php');