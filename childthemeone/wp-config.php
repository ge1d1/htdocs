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
define('DB_NAME', 'childthemeone');

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
/**Yoobee requirement - allows to to access themes locally**/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V}+|l&`|103:kE_vyh_+:^L?K~{w8d^lXrpkqJxk|ZQ^9w{)DRs.$(}/d[o4qi39');
define('SECURE_AUTH_KEY',  ';arN}EErBh*|1dq4$E [bO /Rp|fLFB-dYBaT_,(S5+(^2lfe4lwrkS|=r;^]tEN');
define('LOGGED_IN_KEY',    'G)}A|+k^|sLv> BX!#-e<ZDhK:guqRhjfzugPtvJ$`g+A# >C;WR[)_c]>T+t&M$');
define('NONCE_KEY',        '(AS<|NT*QwrJ*{^%~vo@NKZOQVhpI*$mxfRYY9Ck=fyDT#pszSiBz3p]ui]||lRg');
define('AUTH_SALT',        '@=vP84AkxDv|G)R`dBs+~kS$^mr`}u5*K:|}V$J.$aoi8+uw_QBCuZ4^>GV@sp=W');
define('SECURE_AUTH_SALT', 'M;DB6(q[/O|+&*9J$5udj<*Ave77|JZ+ghDwQv2F#4j&u9HD0^qJSXgmDv+5>0nz');
define('LOGGED_IN_SALT',   'C+MjZ,K H(Dqqj~-?g|pQ)EMwa~P3fgrsO!+SY3Y@d?S:WdJCA@={{>m>-Ia:99?');
define('NONCE_SALT',       'a$?7VEXA>Wjv_aD[NXbKU|jPx|fw}l7HPt=4z$IAmkm<I+j9r1KDwK`h%IX_2dlG');

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
