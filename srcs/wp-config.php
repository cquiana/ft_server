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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'cquiana' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cquiana' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-j|.>_6 Ve3?l5#>c?ToaeV8-(+T$L&bbi>5V&i*S37>j3T^;8<UvF3g^|hbw9?p');
define('SECURE_AUTH_KEY',  'vC+sXDG,Rt2oYOQq!BiL/E@xQ>IwsBZdQHP4PQ@#Wpyb !j+t_LCPa;FU<0@B/S<');
define('LOGGED_IN_KEY',    'zM}R=+G;Vm!aWb2*d/=lgDC><0T[z+b`UWy,!:pa@)4k%7^lXDVsxm+>XvI6p[Tf');
define('NONCE_KEY',        'T4|7zKq]uy%J;H;G&SSs[P3Xwtx6qh~:,&^R|qMR<K- ~bsep#jNmp)I40||DNi4');
define('AUTH_SALT',        ' 0C:kRJG<8m`[.0<rS#VY?:%C`-C+mvp:T@N(E7S-+>fyjQc4L)}#)Pj;w_:iQv?');
define('SECURE_AUTH_SALT', '[nR57.t!Q-9_IEmOzXXy}Q|X3euJexg1F`!*-.1l:XW.t0A#?)7Kh,djk3=l{<3e');
define('LOGGED_IN_SALT',   'FpM,&E/U-DKLo<N~S/+bo1oeDI* (|w?[4ra$nLv4:GJ-L3hE;@;67l/eSP83TK^');
define('NONCE_SALT',       'Uv,AGx@0(;^|VHP|Hy;Yk=~d>?Awe{xn-q>#KNn5` xu0-U{(H6NJ/#;rI;ZZHCF');
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
