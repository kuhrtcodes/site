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
define('DB_NAME', 'kuhrtcodes');

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
define('AUTH_KEY',         '-((-9#:iyn+-?L<[f6TbT<}t(3dJEn:^R3--I-8VTz>Oi%)w3F=,Wp:fVZ%,J+:v');
define('SECURE_AUTH_KEY',  'q-xzTq5:gkgi:9N9 D/pAk~P*9hy$s{d_(QXs^z_BW!rJ45Xh4<Kc-Jeyq;qcYi0');
define('LOGGED_IN_KEY',    'pLh_Oi-ZZ[K?S p--_(t4= 5nLHj49BzL.fHh``0<$2Gk%;a$a?8t#n}%rTLLF2O');
define('NONCE_KEY',        '>f#I%F~ejkS(1SZbs/#L#LAfKe|<pNMXUzy$+r=E5XaO3>Do,d%B3CMB,^,?,Cf+');
define('AUTH_SALT',        'jG h#7QcllD5MWz$e?:.XjM`(v0lAl>`>`R4+Q^mmO@jj+w9kN9[`Bi ,y^_F4O.');
define('SECURE_AUTH_SALT', '-3H,30/emCA(1Kmfo<*rc]q90M3<Cq*>Fd^1P(-jF:+LOpZf[4&?<<Pe>M}6T1:6');
define('LOGGED_IN_SALT',   '$ib) RM{,6)/Nkm}9Pgj.,r,:O-EV~-:(Q]/d!fnXYCi?=M{zp3|c%%Gc`b|gH6`');
define('NONCE_SALT',       'oLHKYs|&e]_Xf~0bT?Bo)?}nbr*3/~<~gT}$; ,F6Ru>[d7V{`yMjJ{w9Qjd4T ~');

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
