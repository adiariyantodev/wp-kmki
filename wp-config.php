<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'xP0mitrCjQmZUdmCDhshvA==' );

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_kmki' );

/** Database username */
define( 'DB_USER', 'webmaster' );

/** Database password */
define( 'DB_PASSWORD', 'wpkmki;1234' );

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
define( 'AUTH_KEY',         'vs n/Ia1w{6a.[U[TB_rs%8M*QceCJN.X8#HxzJM$PvI:`z76o#z).j7%AhQ/q.S' );
define( 'SECURE_AUTH_KEY',  '>}}j*n+p_MJF^:;Oyn.]FT*j`%IK_S8[irZo,pT;_h]g)>l<:{kU,O4R$O6hUWBm' );
define( 'LOGGED_IN_KEY',    '``{4.@mjQM;E>j5R6p8^_GY{?y!4,;$>k1F(+GW&[|hcwEd9|ak?0sl4XK|9iedb' );
define( 'NONCE_KEY',        'z/wuj5Ia*3TQVS%mVY*T8HR7.=Ct=P /mjn9D[crmw)NKyEkk}TD|eCH4l:JP4%U' );
define( 'AUTH_SALT',        '(.<,7#^0]H}3&@IC#RgirDb*MxM.QMS]7P3rMXEW@P:#7Gj~ky>LYDig6H)7bcOB' );
define( 'SECURE_AUTH_SALT', 'I&pJ~!j:bv}!:=tLBA:Tnm)$6+REy.S-2t8A/Y<7um=rE frD;Af(SqxN7e2t}fF' );
define( 'LOGGED_IN_SALT',   '([[w>xMu!3zT0Tqa,z3+C$;y2Ry8tq(rvdymS5*3wih(GkltQ[}RibJg4Kforq}g' );
define( 'NONCE_SALT',       'cK;@CLTeo9n#]J9}@:Z}(&T*mB^_k#a|hs-$vhT1CPbjPaI`{r}{:!SU3!c7/saM' );

/**#@-*/

/**
 * WordPress database table prefix.
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
