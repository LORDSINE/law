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
define( 'DB_NAME', 'gurukulnews' );

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
define( 'AUTH_KEY',         'xFwB^cAxC4<MPK]#fw,^2q$RblK<JsL3tx44aF[9h0IUtbdeFHCh7K3N2j%C4(=z' );
define( 'SECURE_AUTH_KEY',  'AtFjlt&r~=gv}.5PJl}WI8yH_~J-l-M/zJNS!7a*Y=_&Tn9/IP{;btiz. gyhz_*' );
define( 'LOGGED_IN_KEY',    '{s*%d4Ag>Q1$OHtHfs+YDHWX^ltWQ$!4t]xpHCluPm$!_CFGe1q<4j{,CXk*;a)a' );
define( 'NONCE_KEY',        'cXfIvW0m_<#_/r)zFKPh5;fU U7,>N27.kieh5%K!W 08Z_.16///m$GaQ5u-(<+' );
define( 'AUTH_SALT',        'p?ki`}-~>yz=|Hq)4nY9xTUQOnO]|iBwr8~~JihZ.FR3b1l%OPIIn]G8HW#eG:Sz' );
define( 'SECURE_AUTH_SALT', '-|c&U;QpsUBh:]>#+u)Jfl=GlpDG`^:m8`Q{/_$tfPO?C,,tt6<E52yb4/8Ag`;a' );
define( 'LOGGED_IN_SALT',   '?Dp0$+~`LZC)X+x=7}/IjiQk^1%X?AG2_e{*[XHMUtiXE$IGxiL(+I4d-G-V$PW;' );
define( 'NONCE_SALT',       '..A-KbiT?#wGbv5jFS.dfq+!p~,G^TAJymsc]NVx~>C&&9ngvmhoA9X=RdcU v}[' );

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
