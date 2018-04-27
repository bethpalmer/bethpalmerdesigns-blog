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
define('DB_NAME', 'bethpalmerdesigns');

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
define('AUTH_KEY',         'H4QAeM^QOTyc`,rJG_usQnwfrypO?=[>Ha)rn256;u<Yd_CUt?k<c~Sqv)DN(x &');
define('SECURE_AUTH_KEY',  'ih2l[*Bl6wRYd3pI(S,:IDggbFcqF5oRlB1|lxrEUJa~>.$CR=Wv)z}^A3[BZ;:,');
define('LOGGED_IN_KEY',    'Tz{:MAv+1+q|.GRsKq)cO}Fc*Gu}f8.`(&c$Oytr!PSMfDx9A+zO2oZt_p(4=6y=');
define('NONCE_KEY',        'Hhu336Vl@WLse&F|(Q;T!=A ?0TqN@+84_!D6NaSEfhEV!<25e~) e)n<rE2NMZ.');
define('AUTH_SALT',        'S5hO]XYn_n!V6Ch+?Ka/aLNfM^ft S[h6e9`+1sp;DK|/q8V 4%woj;dHW6}wA4<');
define('SECURE_AUTH_SALT', '^J/jN<*z{U`uAm_@*i&?8Ba{(Nl{)~)0+)C>i8~GF`/PpAm;[!z0b#cv$pURjtz`');
define('LOGGED_IN_SALT',   'I1ie >z`uSJuJ=knKo|4sB)~_O#v.BD)r3q>Mpf`TjBDaX^KR*}GNwPc12Sp5lSc');
define('NONCE_SALT',       '#--aYhmkZD4|S~Fetyz]A;Pg1M60am79!QeYTwIm+gg~ZJ=Ne<5_~J;}x-6S~fO)');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
