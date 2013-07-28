<?php

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'database_name' );
	define( 'DB_USER', 'database_username' );
	define( 'DB_PASSWORD', 'database_password' );
	define( 'DB_HOST', 'database_host' );
}

// Custom content directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/content' );

// Database Charset to use in creating database tables
define( 'DB_CHARSET', 'utf8' );

// The Database Collate type. Don't change this if in doubt
define( 'DB_COLLATE', '' );

// Salts, https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// Table prefix
$table_prefix  = 'wp_';

// Language, defaults to English
define( 'WPLANG', '' );

// Enable for debug mode
define( 'WP_DEBUG', false );

// Hide errors
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// Absolute path to the WordPress directory
if ( !defined('ABSPATH') )
	define( 'ABSPATH', dirname(__FILE__) . '/wordpress/' );

// Sets up WordPress vars and included files
require_once(ABSPATH . 'wp-settings.php');
