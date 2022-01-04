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
define( 'DB_NAME', 'celitte' );

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
define( 'AUTH_KEY',         'i:.=s`ZQ}J2T&(YV%1{fIb{}x0+G_l=kbd Zf}9HpfHEWjwC^d;oG&cg9L%FP}5G' );
define( 'SECURE_AUTH_KEY',  '8fYScYo|-$J 9ar.? C&`PWx}zV!jZjGsw)Ekd2;UG:uEw%I:j-{r#hvA=DC;Gj!' );
define( 'LOGGED_IN_KEY',    '|R Bf$NTS2Rdb{T&Bmr*A~Ne&x6]~.X [Ns`%D-(Bcr#aaQ%6$m*ZYcxC(AX)iL=' );
define( 'NONCE_KEY',        '%ic}o%0u_rS)b34Mk^DgELkg3_i8H.Hbr4{,:uu7=uBqUV12sJUM]-:[IC=1xMit' );
define( 'AUTH_SALT',        'dBBp4%ejCn%dq>[U.bV3{/*tXxS5&%p7s;@$`4C3vT5+X.L3n;KPCY/>E(B|QB5J' );
define( 'SECURE_AUTH_SALT', '+(nl%UO_:g:FZGfZ0vHS>&{{-3MO9ioSE1+1Jy|gqBWT=`v,6-IWl75qg6VZ|xV{' );
define( 'LOGGED_IN_SALT',   'L3Q6)Wvf]9gKn,~?3jlzzkb B4qA:i1+L+GiMw0nHOc?cUB9(#4HZ_Czc-d}Sgjb' );
define( 'NONCE_SALT',       'G:iz+nL;)9HLYCE_KAf5oYb(bHWibnl*X?7.&>2c|LF +T,(!U(V3wH]&gaPs0o`' );

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
