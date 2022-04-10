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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'r2rbqq.Y0{#?Nvit>]3`K$+2;VIr XqK-x32Gl?/:L$3Fw!jPNi6EkkO]89M/p^1' );
define( 'SECURE_AUTH_KEY',  'aik)kPswvN-[e;EZ.]k:gSGI@AOgngJi40*]2-@w`dGk`W#LaPdatd8EnDnhf76s' );
define( 'LOGGED_IN_KEY',    'ZW;hWa*)xyG_0;%|nR.eBRA&j{(UY6=%1I//1$Yax.LIe7*.EH+2)hm0nn4w69S}' );
define( 'NONCE_KEY',        '56!Cm8^pi^?CcCz=N>7A ENPvsmKr12jtP7wryXf o-,qEj{g&&h/]|zc)^x$no,' );
define( 'AUTH_SALT',        'Ejj$xWdw/Wl3b6}-Cf$IMdla<aA!3GOC*B~yX-) YnH0I|?g+gV_|^,(t7/T[>5$' );
define( 'SECURE_AUTH_SALT', '/*a8xh/r81lZ,{Ak lv-^{t#YSpc@oaQ1y(w3IWr^lldT#kj~^ i6NDKKo#b}P]5' );
define( 'LOGGED_IN_SALT',   '!qZ|I.G[o,M[Un#Sw^;.%QAeJ,N#F}hc%r^1ZVgE)pMcY*]?5z5$h919|na2l$TC' );
define( 'NONCE_SALT',       'MZ:&gl<!Uyoz`?[9or0Nc$#|-+ZN0`By{Pm~0W<?,tCB|qk.w;4GbUS>-&]g.?ay' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
