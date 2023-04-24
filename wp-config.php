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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdesignmidterms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',E^FI`mRf)nFnTLhSx7bT(0Qld%O%?h/h|RF{6)Ye|~lX{6Nx&#_bRZ>sx~qV.=4' );
define( 'SECURE_AUTH_KEY',  'uwOl|%5m$MSM)+R*k/RJJmHRtex#@Y}X}D?ch[ $ooa V<;`09c#9rFFXn~Y]-V~' );
define( 'LOGGED_IN_KEY',    'K!*Ua4aHLck>X4 NHgRxHUd:tFOJ-AmeOHIE_N7K0}}?vI$N%FGOk*Q%ZJBpT%l]' );
define( 'NONCE_KEY',        '=r`Pp^zY){]@d^P5Csvn0{vkAd,Dh%*QjL)JjWSxrbD<ONO+B!`5eBX7 J[{7.7_' );
define( 'AUTH_SALT',        'mMVu<wki^XFxA3M(j9qTq?d}!tnj4Le;#n!86fUoJou&5dd6RyWcxQ{C}a>e~SQ%' );
define( 'SECURE_AUTH_SALT', '%w3KP^=vK9P`Owd>G%k<*[|1yC;=/yBJ08Fv^lc<lcNdq&1T,*F4lmD7a<nta[<L' );
define( 'LOGGED_IN_SALT',   'Zxc5sL&u[yc:[19=E8?%S>$c3GIV#MW3r~IyGLTNX1q!j9YrZ$hcJ}~SQhdYozsz' );
define( 'NONCE_SALT',       'yO XZa 2/$y-0R0w7{OJijx~x=m}i.Q6G;[3 7UI=gDK;?/Gkt9V/=[<4`q;YO_c' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
