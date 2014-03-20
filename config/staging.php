<?php
/** Enable Debugging but hide errors **/
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

ini_set( 'display_errors', 0 );
define('WP_DEBUG_DISPLAY', false);

define('SAVEQUERIES', true);
define('SCRIPT_DEBUG', true);