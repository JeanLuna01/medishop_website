<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local_wordpress' );

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
define( 'AUTH_KEY',         '/0/f>rWM1[4[(m`hEVmKds7T6fhhX}uXQJ9AW;,Uk_4f6V[_fripA6~%9 dvQK0m' );
define( 'SECURE_AUTH_KEY',  'bwVQFzk.!jwwshDfS(-##Bgd3@[bZl0VNgfFJ(-u0mX8Vt1mWz0];oGUuYLq{WWy' );
define( 'LOGGED_IN_KEY',    'SEF#xo/aLS9~oo]f+xYSZU|QMDK7d!7|(Yi]G.UC+t,O8ShN*.OS/3X]]8cBe>th' );
define( 'NONCE_KEY',        '(:/Vm_q cL4lIKHry9QP4T@`(=sf<Y_2iFt-P%AT=G-Xa4 aQw5{mGi3V]nZU8:A' );
define( 'AUTH_SALT',        'Us2sS`3`wZe>l1{L=Z $HA[nm[U}Dj?}-{%S|iFU.haw7.eJ7NP 2W3h]3}N>P:6' );
define( 'SECURE_AUTH_SALT', '}Ax+ ?#x{=])#/t-Dt4{iV^[gLT3Rudu%OQC+05=iS&j%lWIv2%+r0Y7]j:q Yhl' );
define( 'LOGGED_IN_SALT',   '@(u*BjR#1VwVI*`>QL8vo+V}6:1$|@`0]K[,lGh+kCmb+#oz,)TY|vawBk@pU`hG' );
define( 'NONCE_SALT',       'RfA%4UaAey=h27CuN*fc0Fh<&:$uQR+Tr(9d5#X8]=k.A=@<yOaZ=f:@WwZ!2*^c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
