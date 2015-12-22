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
define('DB_NAME', 'genomiclabs');

/** MySQL database username */
define('DB_USER', 'genomiclabs');

/** MySQL database password */
define('DB_PASSWORD', 'genomiclabs');

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
define('AUTH_KEY',         'zN0Da4*R8g2?7?dm#:Z>nRpr2?[7$i.1 ]]^;x0?&HA~QklCwEMgOu{r%AMv!;{`');
define('SECURE_AUTH_KEY',  'Zw[UDXAki=IcUy>isv|+y1_z8^d?{Y]~c9!l}v}^ocUp,^cS,2dJ<)jO-L,NJmBh');
define('LOGGED_IN_KEY',    '%:;|VV:mCq{E-j-]Aje.o+WWRV?-)WVjJ.j^%(bkv,3D>7SL;=VON 53r1pk3@4g');
define('NONCE_KEY',        '+RZ-$~,WJBdY?YgV$%6I^A~]BP&xzFp-|(3kI{?Pv:c&)qQIPH-f_Cq)fWq8;1vS');
define('AUTH_SALT',        ':v_6G]uj.nj-b2G`i+*egrvY1V_y4Eu%oc XtcCf&g9&`/f69=}/v;uASjCI6IhC');
define('SECURE_AUTH_SALT', 'cT+[ud[7y!b,hL,4pmu8U51#fxnn(XErN8{o~_7bfsuquaMocO#utT4}-_Sxpw/4');
define('LOGGED_IN_SALT',   '3J1^23Sl P(Z@G8hOSZ_vzIMM|d/0aGhY(]]a^nSh+rf;3+7EC!WAGSi5j5a38KY');
define('NONCE_SALT',       '7|ej@S~;L)3 v1)uJs4P86I1<kyA7yDc1>; +xnd4-Jy;IMBQysCkyVs#v-?}s8%');

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
