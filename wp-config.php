<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mazurytobiznes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`[q-!}t)00srnG-v~<pN0[F%jv,WoDvzCvE0bWa!W!to[`g#gW[pNln_@#ztEWdG');
define('SECURE_AUTH_KEY',  '2j:N]sxp4>EP+/rUBlQ4,|Q-(RO^+;6P:P:<ma1)}xdBKHqq0tGnu;ycC;08$;5/');
define('LOGGED_IN_KEY',    'F9Pr-LKNQkwJ*qJWq~$C)1-V4|w=tLlnV3.K}}PDn&oU!8e`1uAT=4,%3X25TDu)');
define('NONCE_KEY',        'N%~T{5EO2NEm0#}a6m6IOYkiga8h2UeD1L93W{+<}$SOw)HcbQM!XUqP)-3[ten#');
define('AUTH_SALT',        'VftJTR2}&|<f!;9X+<i4s4q!}dHBY++!=V6e}c~{>M-Q:imz%|o3$GpeNlY(1_DP');
define('SECURE_AUTH_SALT', 'dx|?C{GHe(~lgj.b)H.807%m|~:oiLz_9`$gW}Ft.d|O8nL;G_bQ~hQjE%w|-M >');
define('LOGGED_IN_SALT',   ',?`0HsID|6WakPE|CeKzB)2y`:_[jBHK0Yyo)gSCXUNgU)P.o|tuJ?L[Oh_Z#(Ac');
define('NONCE_SALT',       '&UF>&|]@L=vMJ0zA6>^}q<l&Jf*K>,C_|=22hq+Sno.:o12p<>x3Oz!tm<KNaO7s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
