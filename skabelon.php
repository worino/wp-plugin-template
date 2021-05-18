<?PHP
/*
    Plugin Name: Skabelon
    Author: Ulrich Dyhr Ottosen
    Version: 1.0.0
    Author URI: https://ulrichdyhrottosen.com
    Description: Plugin Skabelon
    Tags: Skabelon
*/

/*
    Required functions to activate and deactive plugin.
*/
include('activation.php');
include('deactivation.php');
include('uninstall.php');

/*
    Initialize plugin code.
*/
require('init.php');

/*
    No code below this line.
*/