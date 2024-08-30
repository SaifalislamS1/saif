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
define( 'DB_NAME', 'saif' );

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
define( 'AUTH_KEY',         '8Kdl)tkr:HM{f%s3 c~@SCu@Hat+/7 <cxGkEB3Fqa%jb!-clkj:V01oz?uWXI:s' );
define( 'SECURE_AUTH_KEY',  '*5*m@)R!v5^<pl9C8%HJ~?mOd6IkPY<>%&`&@+:s;C[=]=,?.^J:+ .Bb2t$-9g8' );
define( 'LOGGED_IN_KEY',    '?w*)DAK@a$(W&#[a[+1+`Oie8A1~1a.!yu8l|bC!/w77[[MIN~rAV]CIbs+-G=Z=' );
define( 'NONCE_KEY',        '*^.)&)f7(S!U9eUe^3zx;/rCsYG0:qam:b!TS]8v@dp[/8rZk>L*m0@AR[9R{l=:' );
define( 'AUTH_SALT',        '$7!?vvs|Ly/9J2,W1erl#=<{@0zy pM8-6gR_$8pe6^arm3N_pJzzoqjW[z%wu[T' );
define( 'SECURE_AUTH_SALT', '$P/t(q1w`EG@k{b/qutUk$B&YP4KUnnkz<HC;V#Ql(JRc,o;1VE,W:#8<O`.?QMd' );
define( 'LOGGED_IN_SALT',   '=vNKZWY|FHA&FXn`/#qRRvP][nYI5a|H!:9=|&MySic/lO)yNGT}VQPNl$p&o=R[' );
define( 'NONCE_SALT',       'TD*SNs^3|1T@Wa9,_+F`*q|]VX/-3HEx:sU= 8y*5xhCNT8q2MFfEsH{$}4mFgy8' );

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
