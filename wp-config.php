<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rinoplastiaperu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G&;Y+:x3JV=?OBcao(Dy!RyU3I[[)s(EN3}U[Oj|sd[h+JUA2!/GgF4CI?{`|1DW');
define('SECURE_AUTH_KEY',  'Rw!|}CWXr)XcV6C@mU&pjpe0~&89z<vjL~X@7=i$wLsGG7bC^](VV@<c, fT/4Yo');
define('LOGGED_IN_KEY',    'Q+%duCIh.A/oy4LhC4)ssei sr0GFW0P%VssboO4/|_QU`|*!}wTj^21ISB06pt=');
define('NONCE_KEY',        'MZwl4_hke}_u7z/*DXaSdX$-]@R=]+/>kmi|(R|Y9{x>AN|zo.f<O#Q75#i4aT1l');
define('AUTH_SALT',        '(:LNT<fu Q#^n$)u/L=W|#;w0b-WiaguEBFZ-?=G01>1n,@!dVe;-QL]PH]dy$yt');
define('SECURE_AUTH_SALT', '9dCHf$i|6?]1(~3E)HQ$8RP1CxHqWXb5ebS:EE:U%jr,67@KT6NUy7d2AB);R^Rb');
define('LOGGED_IN_SALT',   'D|]oB<&},c8+3s+(qfI^z[*&}>}#MU1%dLp+PM?iw,@(#>8LC,d%*{k_qa8zR}t1');
define('NONCE_SALT',       'W>Ft: IxQcE2/>V1=?0Utea+O|3S=i4u9+nxNML{nF|g1Ho_|qMQ8{tE+?yQ4Bi)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rp_';

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
