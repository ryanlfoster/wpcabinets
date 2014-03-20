<?php
/** Don't display debug in production **/
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
ini_set( 'display_errors', 0 );
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);