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
define('DB_NAME', 'wptest1');

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
define('AUTH_KEY',         'M-Bi-y5@&4w/}q2Zd8Ukp8&8<[+DJ-x#Tcj&s%Cg^Y&,.>a:u$ WD=?Pm88LR|p-');
define('SECURE_AUTH_KEY',  '$b](dKF[97YPP.F9eSOWY4A4 +;xP-O4PQjS4l`>OEMxhjMP]Mk450*~JHW.PHJD');
define('LOGGED_IN_KEY',    'BohR+pJ]{qByy7^ [wz0D%SUy47!_G#R_SG{R^G|O|lK~s}L-[|CUQlv2X%})ZJc');
define('NONCE_KEY',        'E2rL*95ynih@WfV#nc-{x;NclBm{^n|IkhKt!MFRHs6w8R2>.L^2VeV%}eZJ0rFu');
define('AUTH_SALT',        'Wq+D|-h@YynvmngEC7-RUni5VFt3J|jWJ/;F:{rRcC~7(+fS^;Hs5wU^3r$2m~$i');
define('SECURE_AUTH_SALT', 'C^z0KuU-l6H{1:<oZ/!y&=Wsi;@aD9%:jTf+RBV~}+i?3kv=BJ28N7x,34=%S9~ ');
define('LOGGED_IN_SALT',   'jQOrcgI7Y_%rB8A &/{!Xlww9f2X-<:1p,R~rDw%iTXrE1z$7S|V<2s9z$v/<Q!P');
define('NONCE_SALT',       'p+09W[9w.#DNIW.d|J`qk|uldO.+G`D(lNE|i[MRx0h+1J/A#do{PLgf ||Z)o*h');

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
