<?PHP

/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    // Clear the permalinks after the post type has been registered.
    //flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );