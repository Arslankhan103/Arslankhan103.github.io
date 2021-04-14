<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alamsons' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G.jX80UAq$*:#dBb2_=73-i17)]343;z+tvZ=B(Tyvb!&h*yBY6;tgo8S;/4Bu!#' );
define( 'SECURE_AUTH_KEY',  'K4Baf2$BK ^J^s)b/g0`9c5Q$2WXLPL=mvm+*;f?=,UTZO)iUDLo$V0.bXY,o;2M' );
define( 'LOGGED_IN_KEY',    ')7vFQQn?h@Bro>KgGIgvo!botz;DXb8rD(R:5<KDNz*8CNs~Yn]~t7IO53G)w$}2' );
define( 'NONCE_KEY',        'R3Rezz%&n)E/v[wj#OSp#A_kI,+|*f.(]a:W<4d)mT?p[8lQ*}0zVWAFII!ScH12' );
define( 'AUTH_SALT',        '2~o2TJsP8c^.voKU{c<( $Zs_P,+@s54;`&V]y$}LTWah;X_Z% =k7ep:$Vlge!R' );
define( 'SECURE_AUTH_SALT', '@%HnI&%@!?:1J@3sxX.V%Q7F#3Ir>/#af+_|_!}=H&Z<]{+t|lh3jQ@CJ~U6Z?sv' );
define( 'LOGGED_IN_SALT',   'k,en.iRl^KWi)QMD9~<wiAf#qA4$@$pvi8?yP/F_6aIPO.cbQ*}}neQ$qIdqL-1[' );
define( 'NONCE_SALT',       'L&5Do-r3;3(W7q=}4sz%*D6Xl/91;;PXR)RyR1#EUr(+c/I9|Ap-sqc$pH6G]aj^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
