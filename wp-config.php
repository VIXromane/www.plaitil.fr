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
define('AUTH_KEY',         'RtCzJmz_.KIV^cX.E1dU5*]<7g!`nP%2<4z(#TUd?YS#<y2dBA[{+W)OvV`~A~c~');
define('SECURE_AUTH_KEY',  'LwGj-{K&V}J*=;.MRsz(rqyaG!jeBBE4(/v[*o*eX=$8ZOT=dEGsO}l+ZJXC+Co*');
define('LOGGED_IN_KEY',    '=85UwJczJc;mev-@/?:%Zyk[##A#Gid3Z.y){D{QCBT2$M}(cYpAXooC3||>,jS_');
define('NONCE_KEY',        ' v>~]Yt~.78$;2IpF0#+rvshg~Dn$!)<+jlXwnf9e-h>[I({0|5CAs7[}x49>~0g');
define('AUTH_SALT',        'VTQ{7=;wiTUyZ#?FAnl&HZ6.It*[L1+iF!Vm?6~5$IFT@fXhZv.Kf=4jx.UcYMXE');
define('SECURE_AUTH_SALT', 'xJ^(qDY$ot)TYQUrd3p;CTlQ)p/_N=_.Kcn){MhX~wx:G8ghd86+FhS7rjn[mcRR');
define('LOGGED_IN_SALT',   '5nup,f$ t[&lrc<~HyoPgpyk(RDXae{I-kuL=zGb@.hCpr4&+r#mJ]Z3[Zv.-6e9');
define('NONCE_SALT',       'no5l^7,,XMNr&pTdTZxxwreO.oEl-$121`W8O2}ryMEkaE4f!0e;J:kL8*Z/UXm ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_pt2k16';

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
