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
define( 'DB_NAME', 'homestead' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'Pk(0!Vg>y[v3&33@/@Q5f<!34Qy.FEIoHS;zH={=?Aym)Uwx:I3jIY|GPs[O?2nL' );
define( 'SECURE_AUTH_KEY',  'W8i*(-6.vfr%b.B_;N`W)$Pv]3UGeRnu:@u]aIZ/v)BAS_vx%;*=mu:s2@.jHnO@' );
define( 'LOGGED_IN_KEY',    'l=0>8g:a3hG_~Apa,{GGxYa!14E/I.OS%$(-tS_]._f5P4d@hp40U .}#M<?6ZsY' );
define( 'NONCE_KEY',        'pee:X<h96@CC#9Ha5]u1oUj@)j,)hnJ8N70?^xX?NDi-6-|Fe2^ogAmTwfO?7wh{' );
define( 'AUTH_SALT',        'q)?nig}xFj_AH,2PeX op^^p+%</S~$KRyo2}``l)d!WH[D(658D`=^UC^YBR;^d' );
define( 'SECURE_AUTH_SALT', 'Kd+$%/I(?p,G3OIROR;_?)=n=f?Le(BW0%n5o_Kr5Gs:JH)mU_87zzH-I9EK@quI' );
define( 'LOGGED_IN_SALT',   '>$s>95nAtTGl61S3D/F{#Y=mpb?O%giV6<Otlx9TYO[sndp`ajF:ai8xAJQR#YMc' );
define( 'NONCE_SALT',       '*]Pta4%5a[~ x*fRHbJ|S4C+e/H=&NJfHqHeprVJE}yH:WNd[S 9KSq}G867~iaY' );

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
