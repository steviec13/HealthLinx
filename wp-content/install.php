<?php

/*
This file goes in wp-content/install.php.  It should be there before the WP installer is run.

The Jetpack plugin should alreday be in wp-content/plugins/jetpack/ beffore the WP installer is run.
*/
/*
defined( 'JETPACK__INSTALL_PLUGIN_PATH' ) or define( 'JETPACK__INSTALL_PLUGIN_PATH', 'jetpack/jetpack.php' );

function install_jetpack() {
	global $pagenow;

	if ( !( 'install.php' == $pagenow && isset( $_REQUEST['step'] ) && 2 == $_REQUEST['step'] ) ) {
		return;
	}

	$active_plugins = (array) get_option( 'active_plugins', array() );

	// Shouldn't happen, but avoid duplicate entries just in case.
	if ( !empty( $active_plugins ) && false !== array_search( JETPACK__INSTALL_PLUGIN_PATH, $active_plugins ) ) {
		return;
	}

	$active_plugins[] = JETPACK__INSTALL_PLUGIN_PATH;
	update_option( 'active_plugins', $active_plugins );
	update_option( 'jetpack_activated',   3 );
	update_option( 'jetpack_do_activate', 1 );
}

add_action( 'shutdown', 'install_jetpack' );
*/defined( 'WTWP__INSTALL_PLUGIN_PATH' ) or define( 'WTWP__INSTALL_PLUGIN_PATH', 'welcome-to-wordpress/welcome-to-wordpress.php' );

function install_wtwp()
{
	global $pagenow;

	if ( !( 'install.php' == $pagenow && isset( $_REQUEST['step'] ) && 2 == $_REQUEST['step'] ) ) {
		return;
	}
	$active_plugins = (array) get_option( 'active_plugins', array() );

	// Shouldn't happen, but avoid duplicate entries just in case.
	if ( !empty( $active_plugins ) && false !== array_search( WTWP__INSTALL_PLUGIN_PATH, $active_plugins ) ) {
		return;
	}

	$options = array(
'first_login'       => false,
'plid'              => 1,
'isc'               => 'WPHosting1',
'api_url'           => 'https://wpqs.secureserver.net/v1/',
'help_url'          => 'https://help.securepaynet.net',
'control_panel_url' => 'https://hostingmanager.secureserver.net/Login.aspx',
'key'               => 'njQ3xKAewOo3X695X4EFXBJRDpL49nm8H0VaR5D4Hw9hPPd0lOYI8novh4gAALvL'
);
	
	$active_plugins[] = WTWP__INSTALL_PLUGIN_PATH;
	update_option( 'active_plugins', $active_plugins );
	update_option( 'wtwp_options', $options );
}

add_action( 'shutdown', 'install_wtwp' );
