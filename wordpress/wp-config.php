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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'sL)n-CwInU[^++mYgJ>J?Z-Sah+HOqSCNJ8%+t-jp?p@21;9>?0a/e3+ QDi~BwE');
define('SECURE_AUTH_KEY',  'Pld!29kpoF$7bhR8o}?yc:y)/v@Bd !G~^1Lq:WS5sEtfJ-$KUV5`_Xl7HR[jt}%');
define('LOGGED_IN_KEY',    '@pB2jYA,Dgi9P~Nh;eSs-!@IxgdOhak1;-nm,r(+dB9~e1H<}P+?xxbq,44Sla*b');
define('NONCE_KEY',        'E_D0-`|H8(9Q,r6@C9MzW!wW&|9Rn5dA&0,N2fw.<_ZdIW*~<a=+?D7>y&bwa:D|');
define('AUTH_SALT',        'OyDq3.&QD-+]ylu##akl1+H>l&GAFM-cd(:M_T;8N1BPEWF`>AED8s!99@%ggq@c');
define('SECURE_AUTH_SALT', 'eHDZ8#g8:F.HNFoxTnVu;&5^t_=J>>NtZR;Ytl9D?.Tp;|6QJq<q-iXye,c9dzcK');
define('LOGGED_IN_SALT',   '`8KCd}Ze0*$N+8!k~c/]Gv=[cL%th-h,3GNws13+-(!Cm0B.zw|1u8zIDT|NWFvD');
define('NONCE_SALT',       '+B8~$UG<vZS}|DTFgm* Rkjwf|A%:=b$D1km1L89$U-IYihDZA=5bol{Jq?9ee8^');

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
