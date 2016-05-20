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
define('DB_USER', 'lechpol');

/** MySQL database password */
define('DB_PASSWORD', 'zaq1@WSX');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'd[#h`O4+Cg_;MF`vVA+Y+d&%( x|1{8o`kRx_4`G+>+Ss[?g=iP,RVxhL}N6=zH@');
define('SECURE_AUTH_KEY',  ':LJyKJ|7G]ix)I?jSiG3vu66<fV0=-f8;Rj[s DM&q4N~-Whb|Ma,WcpwiHSD_=p');
define('LOGGED_IN_KEY',    '2|zw1prGka4`h!0NbxyU&{Wx}(<&pAR{JgUHH-t,d+;*)sofSD&,2rX>Q.fMuw-G');
define('NONCE_KEY',        'i|jR}+^*<BFvx&p[B[;-|G(+/q=])dXr*K,Jh X/Z1a.vBc]|aH7ZBsBo{JQ<~+`');
define('AUTH_SALT',        '0EfVy OjTphYOG25*)(hm[g}:$Sb5h,lE(&p+t5B!m4s8G[.7^n0B_7Yzk9$fjdZ');
define('SECURE_AUTH_SALT', 'Ct^]@y$O3Yy!6n),!^sK5|xGjubDcF!---IN42ejIGT#UVFXyo:P//;wC{R7H*U&');
define('LOGGED_IN_SALT',   'vF=0@WULBR N:tTl}s`n|Q$lm4v,AZ2#jNT5l-EhyL*8LJG6L~hw~9*H#.wxw,2.');
define('NONCE_SALT',       '+-)b}xs!7?-w225^x:V:rE]dT KM(_&zO~-k&/D;s,wDPuLl1f0i4)(s|fF~rGKC');

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
