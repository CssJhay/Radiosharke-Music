<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd2jl44829436001' );

/** Database username */
define( 'DB_USER', 'd2jl44829436001' );

/** Database password */
define( 'DB_PASSWORD', 'L{A1WiN6V8S' );

/** Database hostname */
define( 'DB_HOST', '160.153.157.170:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '95ZvmsPV*)k0_ Ir)J-)' );
define( 'SECURE_AUTH_KEY',  'SCB2spAHC*JrjSy608t_' );
define( 'LOGGED_IN_KEY',    '(HG)tHTVXg(Lyxn)/FUI' );
define( 'NONCE_KEY',        'h!DLAvd9SEq371E)W%7 ' );
define( 'AUTH_SALT',        '4T/74Ez-@tmTgbOX*N-Z' );
define( 'SECURE_AUTH_SALT', 'gtL!*x20w/HKYaWfVE(T' );
define( 'LOGGED_IN_SALT',   'gwpcv2@smfZn50kbMNv/' );
define( 'NONCE_SALT',       'nFKYb!ODn4n nkPmk-Sm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_849x55fpa4_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );
define('WP_MEMORY_LIMIT', '256M');

/* Add any custom values between this line and the "stop editing" line. */



define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';