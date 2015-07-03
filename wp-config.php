<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'whitelabel');

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
define('WP_ALLOW_REPAIR', true);

define('AUTH_KEY',         '$Mg]3AI|.vHygqmTZk7Jld)AXX<>0&FsBVIJ;Au^& j]<r^<h{xaIScJ0b$zyC@v');
define('SECURE_AUTH_KEY',  'fTeg5a-|6%yw}RzBeD1hCeW+4Nd!z;atA`)rrPxI<:h1}ef :J?x;[?)< %Lz5W~');
define('LOGGED_IN_KEY',    'Rbqg,Ws@SjpMjEt1GdD6G$YBq>}4f_RJh.%xcIDQ;-.SSaJf?m(vqs#S|9.Pw+,:');
define('NONCE_KEY',        'JzGyzlC;q*3iD_,quEw%Ya*J`c)Q:U4g;G+``>v@^@sDv70<)#F4?g1xQpD-X4!T');
define('AUTH_SALT',        '<eJc-:Z,FyINy4Q.cDM.GWb{Cr9%=$=~]K$q+XW&%*?}26tJY@tm;1=9+mm3WK%>');
define('SECURE_AUTH_SALT', ';Fmdm32A8Cm=BEx8TI;WQ(}w>E*)Z0 NkN:f@b8;wp|GD{|*naPk~BGERr+A_k-H');
define('LOGGED_IN_SALT',   '&~C0X:b8;%{m ^RB_JDJZ#~m{[h-_Y>wHFYi+Yg-JRG%bg]Z%ESdl:%K2v?.2#)&');
define('NONCE_SALT',       'p]i}q9--A,j*,HQad+NX+-&qRf|1e&A{S17zH=D^m4PZjmL#oVR|F48PP17IO1Fe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ccg_';

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
