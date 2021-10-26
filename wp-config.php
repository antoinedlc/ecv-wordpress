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
define( 'DB_NAME', 'workshop_wordpress' );

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
define( 'AUTH_KEY',         'rjB#IwseQ&<<H,i+:+J#z%&bg4K*t54Q;}{<FiBqq{(lr^<x_#j>q^|5s[&HQuBA' );
define( 'SECURE_AUTH_KEY',  '>zBW<P}bX)I3gKcSj[<[5r<M3F XHN{.BPN040=9Q!3XJ9[qyyd]Lg6xRq>BkbSJ' );
define( 'LOGGED_IN_KEY',    '%t~S9*5p1v.bEz+(Iv*rfIV|S%IBNiE.$5&n~+s6uBkT}~<9Nk IUGl[O|&3sst}' );
define( 'NONCE_KEY',        'cTlUCj0rL;_d(G(T^Kt8[$i><^I-jnrym<zp/m-P79~/3S7t97l&zMc>J8NqBI5~' );
define( 'AUTH_SALT',        'rohRI~I_2Kz6r0cfv}uzL$Af~[1U>4Mo06onZ[:|EKH/tNJ1`cO%eTr%JX,=41Y/' );
define( 'SECURE_AUTH_SALT', '.UG l8ubpYZlAHqP0zlRh|C[qmi.=9.E: ffMkapgoCp;aAe:}bt#GcsIi-W,=|f' );
define( 'LOGGED_IN_SALT',   'S_Lgs![cjj<S^]0NNWeAt/%Hqe:1q_me{}w,ADwq&>@h@;J@nY1l+2%2GRZwMTc>' );
define( 'NONCE_SALT',       'kGaG25r:#iqoY94/;?B Tcb_`oAG3X%Mopx{|~AqVc ZZiyEV/|0u/1d^Zf~sTh(' );

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
