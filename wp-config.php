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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_peiboappv1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5%.]2bU`^9Q[;~(sA8+C?WpS8KWnh_.dT$uB{%#ihMA^gLFo!mx62ZQd-G_h<:9*' );
define( 'SECURE_AUTH_KEY',  ' 5fNM5Q?1~hF&=uR?P[jq]0@lBzJi2fR1r1#M`e.4]Y/><q_sI9K_KH4 sM:~KkO' );
define( 'LOGGED_IN_KEY',    'yEWP0[8U6/jmeOED$w^4R0>X (HT9(Rw>0?g&8$@NmsLH[dXft;E{~T&V=_ccc*`' );
define( 'NONCE_KEY',        'JIdV.Q+g*-P057{CJjdi.]Dh^q@-YBIT(`MO^r|`cDT+ozf7vF<,XD~;;|k/DOAQ' );
define( 'AUTH_SALT',        'U?e{?Ym+B!Y=(fPVZ_tK,H_e?..QMDs4*FEsCfAK-rkBr[u o{T58=JS(9TJh6tU' );
define( 'SECURE_AUTH_SALT', 'ccf)#Qzhg+*Y;<Pd#MYRz-L*B[*O suA!A9K6$DKq0^!wc(/~?3qfdMS#0Uz15{$' );
define( 'LOGGED_IN_SALT',   'G`|Cx]u>NEyaDjPvjotGXRe9<(/y6(xAh&}p.}c5l0wIs4e[Z2CTXkUp1MmmLWLh' );
define( 'NONCE_SALT',       'bMbGz@yVpc{bOJ0No>)h Y /[Rr_{V)WZj(;mz `+@Q-dWt28v.U*]n_d?id/j.F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pbdev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
