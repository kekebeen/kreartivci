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
define('DB_NAME', 'kreartivci');

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

define('AUTOSAVE_INTERVAL', 300); // seconds
define('WP_POST_REVISIONS', 3);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DGMxm8D8C(Fp#s12d R~;?:dy{M-Z(3594wXd?RA}Wy!k:=-5?.R^ K_zsS*G6-G');
define('SECURE_AUTH_KEY',  'n`b1B)T_J93:_$ZxJx0O{(h|+0*Ytomd}+O,LP-5`Ju3+ByLrw|yKtT6uxBL0y3O');
define('LOGGED_IN_KEY',    'nJ4,8$rjbv[<<5f8+?o^Z6s(5(whX.pExS[gjmvCTBv}#h =FybH[j=nVyvPd*6}');
define('NONCE_KEY',        'ol~p2K2t^m$&BHTuqlo+Op? SvbU!E>^?uB_IKu=e.?lO(D:$O`So2}zwTmSs7ZE');
define('AUTH_SALT',        ':1fy5}KfAz><Joe:#&gw:`&PiujYF[{$&<_0:lU6>i;`cw!b)J7wn:DP#)4fz6F~');
define('SECURE_AUTH_SALT', '}MU0a]UcF;LGLcP[-O5.%TS_]~dV`lE5r2js~f<&,YBxwFL{>h.cH$; 7q W-kg2');
define('LOGGED_IN_SALT',   'eYIHk5hxn|0~LUSV*h8fzsCn@cBCb*6N$meb< H4!<Bq(JTi}WER~b|IcNp^AOdn');
define('NONCE_SALT',       ';P;qelQMOj^Z=Q=)~Qe{duHUKU>qZyxX5N]M&:U_GqUAA?,G GSBCOLm`H:pzHYj');

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
