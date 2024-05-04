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

define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portofolio' );

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
define( 'AUTH_KEY',         'NBOG}-SkOI5=Ri.9fjS3yEUN.v:^f,r8IGCy>T5T%T?F`]Kf3N%1^$2*eK/t/S1X' );
define( 'SECURE_AUTH_KEY',  'vl;Y(<fTdB1&IYCfVtayQ/ropb/j.lb!!5D2*4`V^2gw+_m8b_LgjhQ{03;D]Y_G' );
define( 'LOGGED_IN_KEY',    'C+fO@T|xRMXP!I>pRD/?]5-csBO1XJ9z0+j~MT&wH96lypB]33ycbksmNSS(@Q@L' );
define( 'NONCE_KEY',        'H;&LJ)%;1Ckbeo[DN3{eA(,[K f%c>-atg>SPwhI?S0oW*oGc~L8j3lRCDDYm,_S' );
define( 'AUTH_SALT',        'o-Tng {Of0GKR3d2qcLNh0Ru.E$~1+.1q~Hg>n>D5m>*wSiWFb: ,{/Zm<@=,sG+' );
define( 'SECURE_AUTH_SALT', '2tnm!<@_BB8VW I[R;3(_+XoB#_OI96@}:9a^p8H6Sd|yqOBr$L0Y}K#3n/ BI_%' );
define( 'LOGGED_IN_SALT',   'P?dgx7Y1(j=-GQrg|6g6N?DgsWkTa4`*T=k3T!x*r&0DLXLK/<Ke:LGCLcwV%8XY' );
define( 'NONCE_SALT',       '%ZTVQF5dd@5%omH2z/`l<O>>}v73?oQ&bd[4|44n|zY`o<TSp[C0Tl]<sb6zd_TG' );

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
