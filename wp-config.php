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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         ':#IU!kNsTBCN~z:ixPO5l.25LHq|Bx%_j1l]BVWH>C/1})FFPc`_RmH@Y)qs}niT' );
define( 'SECURE_AUTH_KEY',  'mZl(R(D%msuLcP~8Kl-l`V>HXefI>|},m;l|EbR7MiV_rK2ZJS6]n[TE/}xP;&3i' );
define( 'LOGGED_IN_KEY',    'm2s2,_REW;#RJ8?3>Oi62NM(,/ F}/Vi9gTHk/$wNNWWzthba(5;dnql~|_5Sdqv' );
define( 'NONCE_KEY',        '?puibsNr=%>L Ugv&7z$t)eB]&>>injxNobUC[zV5yu/GeYk]?uTVcjca>jgv~!l' );
define( 'AUTH_SALT',        '$>(Zph]K_noa/3(:ypl.(RBH>,@Tt&$0TRjl}eDv[:lr&tanm`*WEtw5eX5OKj/i' );
define( 'SECURE_AUTH_SALT', 'b_[+Q~ni$nZaEpe$*gT`bRFN]u;Q78n#48hCjyLJ*f|,^($_UdFzdLWzT*e;~+q5' );
define( 'LOGGED_IN_SALT',   'f,ND)1DU{@A|*fQCZT`.I([4y;}Tdj1:xf R=|LN[:EW<46.Aid`Y|#1Wmo}cj&g' );
define( 'NONCE_SALT',       'd0r;iUG4[P=;PgaYci4IR1|}0}}Tj4SgUER$nKZE+s_gTY/95U>; xM|LO4]%WFR' );

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
