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
define('DB_NAME', 'wp_2016');

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
define('AUTH_KEY',         'jX[!yp>+)ien5XTiXS]Odqa&m;Ic54qo3ZW_P/RxQo$|waAKTCA2Wv&2ejLh6`+E');
define('SECURE_AUTH_KEY',  'h=:?;nX-cIdFvOn *JT&<I<Yqtc>NZ:)@8#O<GQCMqk5.AA!(}n()uHxIT@C.zVr');
define('LOGGED_IN_KEY',    '~_aBC9}fUgb12EhN]Rt$/F$, A~x4 :{t1lbh)UU/cB7{dJS]=DQ@C/nJEsCBQ{k');
define('NONCE_KEY',        'Lo6zfPess3@fPMh)m!HtC`]/?~>u~0L@,p4IO9f5%DdDOTQvN,QysZ8X#>5GM#?K');
define('AUTH_SALT',        ')5$=[>dBK?6V}rOB61%Y3iaSPb4@5wk:]Uw4sEjUP>%g_/B=E2ScFa;{8Ad._h-0');
define('SECURE_AUTH_SALT', 'kBD8h(q67LzeM}2o(EFm*0KU<^u/NXfY]OxcLCK@`7Yvr/<h=!q7YR0bR/BeO.(c');
define('LOGGED_IN_SALT',   'IdONN/MGqyyS=z=S^CO!eT/MmYXRnj-{}w1[&jDp(Bpx-b|K*c92<,SLl2M YMFK');
define('NONCE_SALT',       '[jTGqM1_>2:Xrzw4hO1<yaXEgpU;]qL$;Sj9[W/^}{A0K@Ia,e)t8>AB)k;7zpo)');

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
