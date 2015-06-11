<?php
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

function is_hhvm() {
	return (bool) preg_match( "/\-hhvm$/", phpversion() );
}
