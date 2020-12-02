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
define( 'DB_NAME', 'edge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':B[~0#h>ml1{bm.U=iu,rj=Goc(#SqGcBRHOG:4Lt%s]R;m[18+^Erehs8r_{BsS' );
define( 'SECURE_AUTH_KEY',  'Zbxs6$s#x4)!z{4||3gcC?)G,!Ch`6+?.5Dn68<* %xl=v/l%,fmWN(ng]b;]a-c' );
define( 'LOGGED_IN_KEY',    '}N4M6Om&wqh$&/ z?Zup])Yn<3wc5__c7I;N*b]#]OjJ3C~;qW0KFD5,IoR;0I#7' );
define( 'NONCE_KEY',        'B9Zv70$K(Zh_A86FX@6S4%!$.#2k+f73UCy1a/h,$)q*3h7@0F9$XU0sRzLq6JTp' );
define( 'AUTH_SALT',        '|R/R>7;Es.Ccg674ACsCHKj3Xc(cD;e;26~[5v1u?~Xc07TYr>1e&dY)_[x@I}h}' );
define( 'SECURE_AUTH_SALT', '{*72K>(n`CsUTt=@qxU36~}B,GZQ~p@G;@N7-]@Q6)~~Z9s8Qr:Fk(L(EctUE`Oq' );
define( 'LOGGED_IN_SALT',   'j4U-dH9lPIOj$&3;@fPDy#TJE-%R_!R3+E|Z.D<CKxp8zWNa*s}dKfBh<>GRK,U%' );
define( 'NONCE_SALT',       'l^`ze3:IB=^$G&$l$17)Pr%$+BtZZ>LpO4)#&Psy{9h-+E3)CF.8Ep<ci` /MBIX' );

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
