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
define( 'DB_NAME', 'GameHood' );

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
define( 'AUTH_KEY',         'Y|q2{Bo/g_]+#PoxV-N!WshOOn8PI#tNa3h]=&Y5+;~+Gg~0quGE;$eR0~IR|<eW' );
define( 'SECURE_AUTH_KEY',  '85(scl)Q)(Z6SOE~y*nY}JXQ>tm1}K*l !E~`X}Iu|0Mm44#-z!A|uU>K2dyvFh}' );
define( 'LOGGED_IN_KEY',    'e<&IXVqOm~k4rarX8LitDCO.ED>PT2k<1xm,vu_n=A:OaV*{l`!N1g6|+-[h3O+o' );
define( 'NONCE_KEY',        'g#n{%~FiaBPD62R<90`|v6mvi=m`A@^laL*Rea2=$YdOEshaP!Adi6u_]bkPn;TY' );
define( 'AUTH_SALT',        'Fc 5_AWB`<D{~()B>]}i>q{)K{XXm*FZD}aWrNa^+4arQ_Q?6jcQ|+JRXG5dnA~v' );
define( 'SECURE_AUTH_SALT', '2M%B_3l}?ds_qW@im,yj$hf& Q7^Y_e=]7;G8)UQ3_-C%a0b>i3!P;C6rpXKHlO/' );
define( 'LOGGED_IN_SALT',   'Sb^C|U1 PC!5!)mI^1t/b{2^O0xyp`p]H2I9VV-zLiY b>^8`+HbH2VZk<g,%sDo' );
define( 'NONCE_SALT',       'M_{_H/mukxh4W2eWM0+De9.4s3m(l.`!7XM&$JWbk|s2&_2SgG<d(iUY$n4Nj1|Z' );

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
