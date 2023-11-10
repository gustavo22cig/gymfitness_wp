<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gymfitnessdb_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cnxY,q-#jWQU$mib&S$ia+h(8gq!FlAxm v,v}C&v}q^I%]y2R<[r~g^lxIDI#/1' );
define( 'SECURE_AUTH_KEY',  '(c4sD`cL*QKBBfTqP#ReV5.=K}6i[@sJ<wq}j7h6 Y[jE%zhH?}h~RaN6xzWUt4?' );
define( 'LOGGED_IN_KEY',    '#L+;)a}UYAt3WujS2@c:tnfyY$N{Dn+^ab7e6xh5n+$xoo~*81bZxp?;^$QwsX9u' );
define( 'NONCE_KEY',        'Z1Uux/.]-Q8x{p|?AIbe>6g{b6uJWbUyoU}7$:UoPd.GFs<G?GmFaX.h@DwZ#e*|' );
define( 'AUTH_SALT',        '7-w#t^X%cH;zTD|_8wrLF74URWmR2nuf44oG3AU1&[~)=lE5_+r-!H0b!OD|rw+h' );
define( 'SECURE_AUTH_SALT', 'rpvPHchb5~kgEFbzSaW:^AeF*7Mj1A/z/f5AI>j{x ad0?P>__!3lX)6I|R%m^?H' );
define( 'LOGGED_IN_SALT',   '6;zmLGS05$2ZJ?N)y,HG-HkLRKGuyt(vT1`+Y8@ S8,}mvn@;}?y}QgP&(G(!cW>' );
define( 'NONCE_SALT',       'JgYW{$]~lmNjC8=7*GJ=lpeB@BFroI4s0#sb.@Euyc[1Ix*y {x=&0^E$ojL_#o)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
