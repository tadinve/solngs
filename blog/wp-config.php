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
define('DB_NAME', 'genelabs');

/** MySQL database username */
define('DB_USER', 'sollabs');

/** MySQL database password */
define('DB_PASSWORD', 'e?H((1^+X3po');

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
define('AUTH_KEY',         '{BV+N<_|z6(E-6:{c<E|pTAkflT{p$cI0Zhs`jz9r@4(uIxCl8<D}ThS`U35AkTw');
define('SECURE_AUTH_KEY',  'K>Y]VK;;(z2{-|]00<xACZ]T2U^0Su<K=[k-TbKOA(HkUW`Uj!W4I&9e,CjIB4DZ');
define('LOGGED_IN_KEY',    'SJ3{?g0Q5 ]^}2rP}+G)v)pt7!a<AT2o(b[L->uaWbd.&K#bNl>|rl&Y1uAn+.-9');
define('NONCE_KEY',        'o3J}s;R+KmGo{#<J_7iD8*x1.OP< v~,j/2OM9)[Q2N.|w#F o3{`;-_F5SZ BL_');
define('AUTH_SALT',        '|;&d)No;Ef4Z45}K[M:0D#q#Nbz.<z2S)VbBkO-VW(++r|+C@.+|.f&J@+>PSyjy');
define('SECURE_AUTH_SALT', 'C$dK@Sdllmv*>!$Umae`bp`&KA?QvX+YkxxPA`v`j-?R1A:}~|-6(obL4C.8,/y3');
define('LOGGED_IN_SALT',   'C|(l2PF)f1tv!oR}~yahIdd|x/HD~,Xb;|Bi)$vlKBu${~+oU0Pd{<^6vn<gVII4');
define('NONCE_SALT',       'Np|ph<^4>(T0;s;i*7zc-^~Z_)a]TU 4}^-~q9p|>F5GY}8(BHgRQ{>9;m<y(`(`');

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
