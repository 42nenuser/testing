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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cGC+>EFZp;zagKMSq9>:R-X.h_dI?k4LK/)oz(jFaw`j5T.d600-3QD-mG5r]H9&' );
define( 'SECURE_AUTH_KEY',   '(J;[r-NKcrzhPlJj(cDE<PA7|^TGmRR6>[N;DF*]lTe5h V:cy||30@FE1#n_}yx' );
define( 'LOGGED_IN_KEY',     'WkXp@Ih=*fsZGL)Fefaj5lMWtBC#hUWBN.leB-Bmj(WpP1r8.LGN_*nE4kMZF|9G' );
define( 'NONCE_KEY',         'YE7$TDi3+V#AUi}a%x;m>@M6Q(l8GMs*,Qs4%`h04,`Ug3Oo#q9!|0!r&:h)dL,a' );
define( 'AUTH_SALT',         'k,r*/7Sg4.OCs/,}x-c?mra[U @i`FYuT_Zg{*a-%74_Yw!~wZbLWB9Uf@I=^2~}' );
define( 'SECURE_AUTH_SALT',  '_#TZk9?YDX<W9:M}pttgz_5#HT~B1,Ui|TJM)yeBiVICv&KV=. ul[&r=VYlBT}_' );
define( 'LOGGED_IN_SALT',    'M64T4pIK%Sb?<K,`&AsL-?4>$z.:yK)zZM+hdL2Jsfp7%6-3V!I9@,.0,3NY(~Lv' );
define( 'NONCE_SALT',        '.uM#1g^Hw@%Sv`=)@G86IdX^w3{Wp:@^!<UiLd@Vc/qx)Zc[*_5X~l|ksez{4/mH' );
define( 'WP_CACHE_KEY_SALT', 'w<x[RjjTh8Q?(;|+gLc? Q1@?wCS=S $rJ??G 7|M(G=  r`O+N.9Rj;&?EAP=2u' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
