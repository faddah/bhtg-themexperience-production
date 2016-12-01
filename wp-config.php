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
define('DB_NAME', 'themexperience_com');

/** MySQL database username */
define('DB_USER', 'themexperienceco');

/** MySQL database password */
define('DB_PASSWORD', 'jgX4wXDp');

/** MySQL hostname */
define('DB_HOST', 'mysql.themexperience.com');

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
define('AUTH_KEY',         'v#ET__(49NivTi5y:KqlA?CAh*000#xH:Dn(f:^PqD)is7zQ%jn`*|"_OWwvg~gA');
define('SECURE_AUTH_KEY',  'crNfKfv0K18(/yTH+w(m2ApEr^Znr@EzY"$1j^vB!D"1q#9viWg$SGcrn29A1d:p');
define('LOGGED_IN_KEY',    '0`@I^")M9T`E*qhM6|J9VZ0Du$*SCe~o*Zjj^U5MAR%mCqHUlts8Y+V2&Vl;~7fl');
define('NONCE_KEY',        'Jr3pVMC)^pj?&TXjfQ:+9%X/Pq`2apF:@0p4%h1vPYJ*:wsFL5fyQ#^Dgp^#hu+1');
define('AUTH_SALT',        'IA7d@j_qgD35UfPpqMqyhdSp^pnNm5?uBM`V~:X`KMXtz9Th;y*VD:u(&m6)5aU@');
define('SECURE_AUTH_SALT', 'w9I0C$$MAmqpls4qTKoJgNt0#"SttfqN;!EnCz/xxlbwP#e731DIs?_xiq&oLbHn');
define('LOGGED_IN_SALT',   'HmD1&4qyeORaNa!*B#cLhp!8!vt_(@;#Vn$"rRLXEtaY)U+qZixLqAJ%1Vs~DGRN');
define('NONCE_SALT',       'WCN5~rR5yP6FoOC+)JQHL9sPp49sL7E#HoLd4/oa;w2P0V:ZWMo+i(K@f|V|FJJM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kva73a_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

