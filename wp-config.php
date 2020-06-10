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
define( 'DB_NAME', 'my_project' );

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
define( 'AUTH_KEY',         'AD[lLjAjF8$D?K^{ug^$YZr(F`I.-+A }?<0J>kAUoEpQR,fU/]De7skp54l-[F?' );
define( 'SECURE_AUTH_KEY',  '[,xET@,[]Dui_cZ^]ph9&Ev;U*ucd? 257!qQ^(C1D<(C )gGG}AXJLj8d@ Uy!Y' );
define( 'LOGGED_IN_KEY',    'O{ae]|5>$8ndxL^$>m=o6m0+zM nWSlr/C(=?hb?E22K=[N;K?<L#G$,s:ceTNFR' );
define( 'NONCE_KEY',        'EG)y+/:EP`_#JU,!3(bLN.&#PW^tFmDy7aNAcv8=_{?,iH5YD{)f5cA1R5(nK?,,' );
define( 'AUTH_SALT',        '8*cAumZ/Efl:@a{Bajyg=FM>PA4]T7pQUUlQ~O2UDBeFpW{b#LJaAA:VRF?_^x&^' );
define( 'SECURE_AUTH_SALT', 'YXupO}f)^}Qze9eHGk_zQ VV85]))ivD~8<,K$J3zb/:Fh?EE ,%~(i9nO}qOB/S' );
define( 'LOGGED_IN_SALT',   'Sfcl4oh@n/=s[7@{3g&pV14kk<E}WmTX=jux8WN)@lL(_SMr9AWxOWdxHhN7m41X' );
define( 'NONCE_SALT',       '!s2=QS;Aea;nlgb}p2Q#G[C|5M7Zm5,C*Z#Av})<}uvZh$kWhv3txh1`^P/90|@8' );

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
