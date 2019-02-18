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
define('DB_NAME', 'wordpressdatabase');

/** MySQL database username */
define('DB_USER', 'apollo');

/** MySQL database password */
define('DB_PASSWORD', 'a27413277');

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
define('AUTH_KEY',         'j?6Y<8vy_NflMrf&A9e;?`K%@sB?Wd<SqbT4y{MT,sN!1G7_P gh<lOuM4buQ,i ');
define('SECURE_AUTH_KEY',  'uXC(-ddxK3<]fw2t:XNr,doElZL]8=*a):wd.zAyCn#pxg~L(y*5ZHOz,XWIO0`F');
define('LOGGED_IN_KEY',    'Q@A9~$p[JF|a;OZE;0N*be]`qd|8{&|rU8@3oGVU9lR#(B }o|h*R_bw-(y$G_LF');
define('NONCE_KEY',        'psR.$^.L9[0jr896-2Va(V$us{c?iy:0}N%Y-]/w]!j&IW*_~0?;Z;XK&HD11RAA');
define('AUTH_SALT',        'i1KI%K~&N}Lqis8&>}z @a|#2cyZmg*51d,Tk$?koTrG%1!u-NZwi{(33&C8iiej');
define('SECURE_AUTH_SALT', '&(P&(}~6@,lbGO^:]@zvRO@F>C7RlX!E90]NIHr*X{S+?bO]W&rJM:(E{v]|MU*x');
define('LOGGED_IN_SALT',   'y /1,jLez#Om=/$<m6=tVyDi,ASIYNSQF+M6;G]f1cv$W9;|7uiF%{+qzxz/LM|T');
define('NONCE_SALT',       'Day2$VyDEO$.~o3cTxny.hUi1.v+rUupWHnfpllvwz3O.4E>;< C5Z1D RJyw3U?');

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
