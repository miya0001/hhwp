<?hh
/*
Plugin Name: HHWP
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: hhwp
Domain Path: /languages
*/

if ( is_hhvm() ) {
	require_once( dirname( __FILE__ ) . '/lib/hhwp.php' );
}

function is_hhvm()
{
	return (bool) preg_match( "/\-hhvm$/", phpversion() );
}
