<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

$root_dir = dirname ( dirname ( dirname( dirname(__FILE__ ) ) ) );

require_once $root_dir . '/vendor/autoload.php';
require_once $root_dir . '/src/Structure_Rapidmail/Structure_Rapidmail.php';
require_once $root_dir . '/src/structure-rapidmail.php';


require_once dirname(__FILE__ ) . '/test-structure-class.php';
require_once dirname(__FILE__ ) . '/test-rapidmail-class.php';

// disable xdebug backtrace
if ( function_exists( 'xdebug_disable' ) ) {
	xdebug_disable();
}