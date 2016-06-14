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
define('DB_NAME', 'agency-plaitil');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '/HshksbH#NQlaA=290cyR)pon?OdXMwePH=g:51tq{?mHfnTTsdyo_wP>JckchP}');
define('SECURE_AUTH_KEY',  'UatkuipRF=I++W*$2YIbMZn~Cae`Q{,jb|^B%22JB.J9m~Jh0tV[zwC25fvpJM:1');
define('LOGGED_IN_KEY',    'SvEt#<^.k/Q[]!nsRsV<NMO<iS=<b/Wb&5wV XN@ZmSl5nFB7YJ*]Q/j3]*cdF3o');
define('NONCE_KEY',        '?M]/9$=^:/J5Qv7v?LCT{vkUb60Kd]C=k}E5G5cU#Iy9!:VV*2*NF22NQNSQ_w)!');
define('AUTH_SALT',        'h`]aduyiZ}x4.TN=$beP@Z[niE2cA*U5$N6$0n1#}pWn.(s=&d_>%1@[inKjjD&x');
define('SECURE_AUTH_SALT', 'Km |dx?WgZz;Lsy($>uh$IgvPjkCh8@AXo-,WdbEp8Be9B)ex_#f;DM1Vnv>2;Aa');
define('LOGGED_IN_SALT',   '|qh*3k|!GGUvz!%-/RN>w0Rq$S`f#btci4#*7]>zHZEuKG2i -c-Ahv~;#F%QNcn');
define('NONCE_SALT',       '|sZ@qS{.}5V^Pn1z[0&%Dx}vH`A/|aO.n?trh#M8fY9KF0ylL=RNlMrLVU6X8zXa');

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
