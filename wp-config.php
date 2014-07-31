<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{)B.?TIiWb?HJq6(gb-(1H~0mvee3s]G;6wN>g-z8(<Smk?xHUR)dF(MN3Y(<dv-');
define('SECURE_AUTH_KEY',  '|6Il|geuj/yaMN5RYw%q`-RR2&gH.v!^Z R(s3sNX3SWV;-`||h:J;,|h-bJ6K`@');
define('LOGGED_IN_KEY',    'cs3e<Rc]u[wS |PZz$[I!z<nTA=>ERym=7>DOICPPS_,J4*,?_X@/5(--~d1Ob.u');
define('NONCE_KEY',        'oq/A~>vn+7|KgAUHGaD4Uq>^Dn|gQEp4n7r|k-u3$yGc~)J].}meh-v(L!?:(ZZ[');
define('AUTH_SALT',        '+4}Hz/rJ XUs~4qo!@h.jjy BTg5!<(1vq!N3,6}7C@e-kL>Ud-x8qRh3?K_OH1/');
define('SECURE_AUTH_SALT', 'rL9<VQ1Uo-[#Fm;p?m%fpnl+#}(>h%c8a_ti1us<yU|NO_XAAz57`J$UD@js%h0~');
define('LOGGED_IN_SALT',   'B@=ts,tB,Hx0t|;E*bBIERG1/. b?n#mW/+*FFihu4-7VcPg%@@(Y[m.3Jq_~K(r');
define('NONCE_SALT',       'Q:Pe`sa<q!_S8VfDrZ0DXjDbt3| jf7]OVu>Py.9:&U.C*|8t.[Y]#0_I9]!+&8<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
