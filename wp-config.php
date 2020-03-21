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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '~H_]6ZJq7khlF**I%x)vYlpG@Bw0Cr8+:D%+i:#n[]A!ftKsc:hELhj(;2,^_P`Q');
define('SECURE_AUTH_KEY',  'Oo0vU0D|<AWMf)JQUkfCHJBPc-_)pNB=m&9{x8,tnMA=prFT9NQ:M;?pTK=yEM;=');
define('LOGGED_IN_KEY',    '{=qwnH^U9)@znIQW1~CAe$58Y%|Fl:+7]Cah$my2_6K%F>IZ:q}S%(f7?i2l{>&{');
define('NONCE_KEY',        '*C2<Iyk~fujI.D##2~oBsh=&G]$?]>xgp$[2U=C~b:70j76_!s.BFt}=^q]),: v');
define('AUTH_SALT',        '%Cm)<a_D{Oob[ceabHMH5ELetN{}z*U.4VziKdntw>vhZSsk+f=EN*gATg;VuBS`');
define('SECURE_AUTH_SALT', '+[lwYl;RK%JOVeDA{Q)I{t:}k$#&Ia#UbUYtoiLR+xYUZJ;<E/]2M!*&M*ww}T#S');
define('LOGGED_IN_SALT',   'jaj2R~xhBq/,OQg|`WU`fJy+yOsv4:rxc1r?n3$ V0.BkUH!Z?!$hT3?r{MtC_(<');
define('NONCE_SALT',       'k(4>^Y.AW0k6po|v{HemJninU$8_|I$mg(,S+jF=_1#H:]=jyd t*br=/M={Eh3*');

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings 
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
