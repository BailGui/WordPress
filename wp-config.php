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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monsitewp653' );

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
define( 'AUTH_KEY',         'Vcjj-+wx:^^=X5q]DETP|F%]j6C:NYjn5_s%<L;&jJfdyOD`m%d[8U3XFn$nadQe' );
define( 'SECURE_AUTH_KEY',  '?^1P-/)%0I=biZPz]54&gsB0%|JN4>afeMS#@Yq#qf_Dc%aW/nf[Jw_@_o)W$pIA' );
define( 'LOGGED_IN_KEY',    'BjJ}b{7(:c-<]Lt;p/}o*;U!!3.uWhP4VSZs5E2ZKU7V ?r!jF!nE UqjpwDe1SK' );
define( 'NONCE_KEY',        'nDc,_E/[mPy&}6Q0JcF9<(BG6e<0j(T/^L(lptoV,YYuYp8BJf_cvhRPu|}pQ(eF' );
define( 'AUTH_SALT',        'tW~GV{;$y?Qh:63f*kyX/4EMke0dot<m7(:yv$CbYWPD(uqqZIf&L3@A/^.#1fyI' );
define( 'SECURE_AUTH_SALT', 'KH)U[5)8#VpA>c$Z1fV:uB<=oRIS_@hX<>gCW)*R85<`d.qtoe|SzVQd|MWTj)!O' );
define( 'LOGGED_IN_SALT',   '3ha8-a^K%l&T{WHH-uKR#}9pP*ll<B&S^t8:0FyZmHE/Xm.r*&bzZ]SUKnKQ-5zQ' );
define( 'NONCE_SALT',       '@(n>vc=cEsNsA;c5BZLb=`|}oi<1d)MfYnlRw6s,*8X3RYe~/:}zKmk~Q16imq*E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp653_';

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
