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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', ' ');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         ' ,oq4JxJNU-F#^rKbEno_3fM>B:sNXX#1?_~ok$phYbuJ4a?O1tlg6wwS|XE|=C|');
define('SECURE_AUTH_KEY',  '2.cvf95Qx9GJbV|Tq;AI=IAU?w1sb`b.jX-nx|`;P->(i^$A*V+wstd}>9;~>%-4');
define('LOGGED_IN_KEY',    'Eij@_~=*{STirPz.rpq*a.V}{n(&+n-FyWm/%f$lTIRZz7tOY)8`/(^;rtO`xWCp');
define('NONCE_KEY',        '`,4o)p^%C]=_fvpFS}7fLd%=OgyP-3Lahbpp#4q2a-e0y4$mUSg}_07h:CS>)/f[');
define('AUTH_SALT',        ']rZ^mKlLd(g6>G)#!Et>#rDG02fMD&m,OwFmd{!|Pjp?XVtl]`+*}Fd4HVTy!cO2');
define('SECURE_AUTH_SALT', '$[5q-R4,u?,SoU9E3E^DxL!r_<M`oNB1$8^Ggk .#R/Bob6[3=xg$y 6J0X36zMf');
define('LOGGED_IN_SALT',   'hv.I95<oL&:dC0[08Hf8>fy[$F1.,oXE,;>[B>rAVtOaMa[xv1a{02U9}.g=?jZH');
define('NONCE_SALT',       '&*Z}RVwWqPBWnQ5p6#C;8Z5Nv(Zs@)`T1D=0:aI`M]Fuk{Gt5V;<?qD;n#~<u!@#');

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

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
