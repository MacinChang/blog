<?php
/*
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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zhangji');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'zh_CN');

 define("FS_METHOD", "direct"); 
 define ("FS_CHMOD_DIR", 0777);
 define("FS_CHMOD_FILE", 0777); 
/* Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WfK:c44_R9/wH}iSBDC:yp8CJ(x}d;!z$_]}{!)aI.$D75<y^l,N&M2gM_vM~AC_');
define('SECURE_AUTH_KEY',  'fmm/<MeI;BddfmxfX: 2i>8@;Bn~u3:ls^g%E>(_Cq!wnQNDfpW}Zt?[[CIp9e;0');
define('LOGGED_IN_KEY',    '-k?|unKiwK1uFf2K/t.4R1,5.*`K-C+cYEj%9Go(J[D+bb/8]z5sx2(uWb_IJ@+>');
define('NONCE_KEY',        'bdnBSmDh/b%neMm5#tmpk4xY?7<x.N!?)zP$*&??v`)bQcCe+vh62ZQ7-^@mtx%Y');
define('AUTH_SALT',        'D8K<{O{O49(Y]&?Q#{.PhWd)c@>`:XH4~Cgw]E*-R?9[1?+2MoFj@Zrp[O}*B6TH');
define('SECURE_AUTH_SALT', 'S Q[b2a|9DIYM5wBjl]&kZ>cQP?X-U=yqGPm:BC~qD$!2|mIQU<mM?CD|-a8uV_V');
define('LOGGED_IN_SALT',   'zBgt_B7MgGx1.r7,HO<l!FSFg+{__d6s6h~|1w+4Tyd|$6vdLYC~Z^S j5h<SG=G');
define('NONCE_SALT',       'OLvjFx5z)gUyfL:i[}&c95WW=Z*E:D%aV%b%%2vWU|Tp^x^+zu9cV=]`a,SGCl[3');

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

