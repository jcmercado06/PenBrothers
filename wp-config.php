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
define('DB_NAME', 'penbrothersdb');

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
define('AUTH_KEY',         ',v$G n7JmM{E%`APx_BU;S#)4I</%k+u`RmgJ`hQf3De6d3%/dQYU? z.FG1W#@Q');
define('SECURE_AUTH_KEY',  '6iAD1&G|]r2)_/F([R%Hfr1H3QtZ2@?:)W[_1`c2jZ/s9zjt:Z:YDL^ h_Gi<$T0');
define('LOGGED_IN_KEY',    '~Ew%s8(T<GC~oq}&^@]uT4pPq;.a.%4._{<dILcsaA}<<1p*1:}_gd,=>/}Z1dM]');
define('NONCE_KEY',        'fgjZ=^Bg|;7mSUxI]g;Wh>jwhJ+v+}a;?[PoD]65R@yb|WZ8*PBZx~9u-vR|f_`s');
define('AUTH_SALT',        '51)j2cpR~mQXD-O7(C1j.3Sc+3SdfO<[O%Sq$tMT.)SZX_yi-Qj!ZTZ%38*u6Lc$');
define('SECURE_AUTH_SALT', '9g4Yl[S-$aUO3M3s:RDt;)p~z4KR_U(`G@t88.jh55/_)!4`?-uJQus`zo#fv-.X');
define('LOGGED_IN_SALT',   '|K9X}Lxs=s#tPqnokg}ce[Cva}##!,dxH@Hs0E+):6&/JeOTV5cAyZR(V;ue$u.6');
define('NONCE_SALT',       'ljc5c[r5M#Sj`xQmA7#v0BT3Y|v]9--4ifTp&&~56?&b[z:|<O/hbuw`Q+*{7q:w');

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
