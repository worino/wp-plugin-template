<?PHP

/*
    Used to remove options and tables.
*/
function pluginprefix_uninstallplugin(){
    
}

register_uninstall_hook(__FILE__, 'pluginprefix_uninstallplugin');