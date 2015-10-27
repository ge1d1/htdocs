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
define('DB_NAME', 'tutorial');

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
define('AUTH_KEY',         'a!c-6a&EpoD| e]wkLjk?e(1N+]qx8RJd:_9n|J%?ZNgsdw/-A=q,-L^5{(VX^gF');
define('SECURE_AUTH_KEY',  'WQGAB_o2IZ|9LiVgbZYD|q--], ~5z#6=LSFM PhX+amI_Jit;DNK]m.Pvs#v@${');
define('LOGGED_IN_KEY',    '7q+dySda--Om3[<mfS|59PsIV!pV4l:kjYs`9#< CUHR@cn<`3<+#U6>?)sz6/-J');
define('NONCE_KEY',        '9Dx7E;~BN<+)$#lF1:|pb5X&89C+5AVEHtt1vJu6p#Ghsg1,Haa@Jt)~n8D-Q/1*');
define('AUTH_SALT',        'm2)Xh.NI-{|}|E|cm7/M=)ySTH/9Jw|DK<J6E:tBL/:iOWN6F-A-MB.-/7=OC8:5');
define('SECURE_AUTH_SALT', '#S|MO/zVJU>U_y#|:Qpl5+n}LVRY##PCn:^#KS&>8M/M/!MZfF#|tdUQnbJ;C_qx');
define('LOGGED_IN_SALT',   '6Kmror|Q)z~grR(9#Ed|~X@W6gvXWI,2vLa,&k<b}&I@Z)Dz`D9>A!)>AraI|z!a');
define('NONCE_SALT',       't7,/uD/yz/l-}(Pk8jB`|k0yc+iX ee-G@RLX-/=GCH[0Bo;km f;#fl 3u4)+FI');

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
