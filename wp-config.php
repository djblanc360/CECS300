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
define('DB_NAME', 'cecs300DBm2pbh');

/** MySQL database username */
define('DB_USER', 'cecs300DBm2pbh');

/** MySQL database password */
define('DB_PASSWORD', 'cRqZiQCLWI');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'uujqQEMCK8@sw1wkodwkocCdNV4C0J8B0v@8!|v,zcgUkoRFJ}15~t-a+_ipeDLtW');
define('SECURE_AUTH_KEY',  'd~sdCdhV5|NVG[-@8@odh{qbPTuTIMATH2A]6{;.u#+*tTtxmLADlW9D;P26*t+rf');
define('LOGGED_IN_KEY',    '5TH];_9D#-~h_]pelLSYBE>$^,}rfn^u$bjXjrfIMXfEMA.<I{ymu<ymqTu$b');
define('NONCE_KEY',        '_|O:4[ow1-~sVZwkoRGNdhV8C|NV4C0v@8!|ockaiW6D#HP;.]px9~#+ei_lpSHPh');
define('AUTH_SALT',        '.uTuymM6EmLAE2E26<q2.<+a+*uTHLtTH29LAD2xYIQB,>F3znr3ynrbrbQYIfQTI');
define('SECURE_AUTH_SALT', '2;*2#]*p+pteTpaeS1SWL]~DK5-pt;thla^fUYMYMQF,MQE,y$3$rbf<mbfTfTXM7');
define('LOGGED_IN_SALT',   'OHlW5[:O:_#-X6{.7<$b.<+bLmqfE26eP;.<I<+mq2xiWa+aPTH7}0,v!vznNvU');
define('NONCE_SALT',       '#t6+ptijJ7B0B04>z}^,yYz$ncBjnbB{MQF,y$E.ujm<yXMQV4[:!8~swk@swkJkV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
