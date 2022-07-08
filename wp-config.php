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
define( 'DB_NAME', 'db_pluginkiper' );

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
define( 'AUTH_KEY',         'e(r7<G6I,eK)G G]}?x9^[Rc-0.[{1AO(6cIg^TBwo0J3Gb,fP;Pns:3{NMdgiEo' );
define( 'SECURE_AUTH_KEY',  'zJ%%zQ2BuF8jOeJ2fK[e$L|-kgdz!*HHmC@}j(>~~jxEY.CdglX%d >W@^nOy28f' );
define( 'LOGGED_IN_KEY',    'e4l,67 &(>MbL[2ogsH)Fu%fvp<2+5!b>#ismqHoKJAn}=x3qBD^_H1,(*!e5q++' );
define( 'NONCE_KEY',        '.,,+n^1D#Ghy*cbTEB=TaHRYP?UmZaF2xc9_q=N9KEyWwt_#=^F//U=6L0!db-5*' );
define( 'AUTH_SALT',        'E<$Y5L4-F>NDvT;qHJg@7]EIQ-d}^x-PBF.lM#Gl,nf#ezS+zN6#fAkvRT,2KDZK' );
define( 'SECURE_AUTH_SALT', '*BUaV=OE]?fDz3:kg?K`k*^KW^(^r%Slf(2L>8.BP%yHIl<XowqXChE7I*`j<!m1' );
define( 'LOGGED_IN_SALT',   '5Q0f,N~/4&,!PD*Y)YVO`)FvRl;:!mis!l|`J?8Sh;d:KJL:#%6kYcqG?8@*Jql:' );
define( 'NONCE_SALT',       'r8zQJ}q}EuhtF9 70D6T$Vg/E4CI4=o@w!bg3@@&[=C[YLJfu*_PnGqa{DLC7d2k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kipPl_';

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
