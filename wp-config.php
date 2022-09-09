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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'Dimm' );

/** Database password */
define( 'DB_PASSWORD', 'D!mas!(' );

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
define( 'AUTH_KEY',         'F89DD+vW~r^EbRmzv= rhzaREV`OM|d%x5p,j;%h}$Yuw3LBE/MCp&9YV(/)k.1B' );
define( 'SECURE_AUTH_KEY',  'e%tpg[AkS4l9d@{qD,]aKA*N;u>x(7D5t$j1PeFa3{2~pO1(5I4,Y-RS+xt[~zRD' );
define( 'LOGGED_IN_KEY',    'hzq@:C=$O=54i4-gU{^R[<cgTihv} UU GaKkCiW bP>C/Un:3^#hQ-s6`[qoYVM' );
define( 'NONCE_KEY',        '~ c3$FiTlv$;r/T@$iTXu{>,fnvpI8NDo_3gOm]/U+}_zDwwvc(8MsXWFDMSF=js' );
define( 'AUTH_SALT',        'C2n7V&1zX{kiDG3_RVrNnxu^k,JW`A`8Y+|~ul#N:t-TXw5Q6hLDr|c[?tZk[bH$' );
define( 'SECURE_AUTH_SALT', 'qMA2DjbLO[==6VM%`g*CCuYnGr}SwF5;WLgmsrQk}N0%=?Pa+Ibcer~Cl[vi>naT' );
define( 'LOGGED_IN_SALT',   '420iE<IPZGmt*xKG18oRBz6Guu.*%zPg=gI-|<D]rjm!J2M+^h3CHJ=:Yfw<?S1R' );
define( 'NONCE_SALT',       '<UpM/{mS&}<jQs1iNF@_VaSWK:mw>Tg}~N_Um.5=K]b,W[DJ,_=[M&N[i 0|At7)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
