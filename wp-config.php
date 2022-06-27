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
define( 'DB_NAME', 'wordpress_it' );

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
define( 'AUTH_KEY',         'tV*@M0XN!|@R5u.8.UjM@8_~GFIN`A_C!o)J;zzZ?Kul;1<R<d r0+j~&h]xB-YU' );
define( 'SECURE_AUTH_KEY',  '?9]bBeB9bQt`xAQ63@CLzRKB[uqV6F|8}|PbWN&LJb)0Cy6z,M<jph&1P!w{2#mb' );
define( 'LOGGED_IN_KEY',    'h]}KgVKl%SrlVYU:eLan+|j1*IZPQ-*G$C0e4e8JFE<1(@LzO;QbTc[3O_dv~6g2' );
define( 'NONCE_KEY',        ';;];lC`$M#c%Kym:Aas$ZnzG*oi_yAmSjj3?@t8B,-0y+%:~P.~$:JHSqQVHZ_aK' );
define( 'AUTH_SALT',        'e0me2hroIi(d;~?I].ok~rL` )py[8NsH0cw,Mjugu68Ny<{e# 2VC1dww)n_Hn3' );
define( 'SECURE_AUTH_SALT', 'iU!#}6Bzu*Rsh&]Aq#kcV;05 .QDD~f`HSuy3!#Swr_7$b}>UD(S>Pd(Gf9;HzPH' );
define( 'LOGGED_IN_SALT',   'v.I:T%+X[U&4FEwHL29:DJMFtoW($@XXj-LLd`x2mCJ)?xw0ybW>&zzcMwAD|*wq' );
define( 'NONCE_SALT',       'T1_e^rCaz6{DT09iY<.t[xIbbW`q5xOH2cA0s<u$$u,My#Ms]xXQ.$0LQ5uTdXJ5' );

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
