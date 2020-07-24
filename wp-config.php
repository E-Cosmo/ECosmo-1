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
define( 'DB_NAME', 'ecosmo_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '9|hen:Z^XNo[PaTjlHFFWc=39.*@1%pF#+&!B#r(pA.k>v5#SA&2{`Bzq<2N>Tse' );
define( 'SECURE_AUTH_KEY',  '>n$Hk/Q4 rT3I3/Z-X()@n3){0G_jF,xXTm+=)A|eI=!%S(i*z05}MnkS6T_9zB#' );
define( 'LOGGED_IN_KEY',    '}hpB x@m`E5N?sKz!*NuWT.0t$?Vz B{USjrPu*8tbJp(JSofhNzB)u*UGz8f[<H' );
define( 'NONCE_KEY',        'PnB4F|J=X}_%&cjC#X}JQlzj0N-sQ,xu=EZZm.8UUaspGSgb|.#|Am`8P0.=YsJP' );
define( 'AUTH_SALT',        '2X!H+#$IVL^EPX2^6XMdL@_~q8[RW~&NdhB4xAIt^_h6gx[P{`6P!9ZRz j>r1xf' );
define( 'SECURE_AUTH_SALT', ']Fln`:goK`Puq3M1,}nqWpY@9#<3Hw3hRQzh&&A}R[zUE%*.edx&IoVs]Dd)6aKg' );
define( 'LOGGED_IN_SALT',   're6CkfD0`sd8n0[}P{d2>r#=)Nj44Dm-hXZ*`Wp9erE8hu)}9oN0[0Y;,?=!~O1G' );
define( 'NONCE_SALT',       'mG,IL{Kw?<RfD+&1aGEfUSBc3HY84b?MX}y36>I]MnvYuvV8@H^6Xg$sO)fDoJAN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
