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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'vv@`Pa1l@Z{$-[clShPe,N0@R`FXvx?&ph4tI dv$-eE@8] WmB_Nd+tbk8Niw#C' );
define( 'SECURE_AUTH_KEY',  '$?-apS+19gt,eA^I%ucB9&sJ9Zz}ZYg&o/:u1m:;YRZ!cv+<&2#aE=oC`s?=yu_(' );
define( 'LOGGED_IN_KEY',    '8)jzO=k_>#N@&RS$9qq-Or1Vc5^[VDDvti$G.Av@V6OR*X(tc&h5g$>C:!A6U}fP' );
define( 'NONCE_KEY',        'V5&me$$8]bPy$A,s(@b!6yA7ZL`=+ZV6/D%{8Vy[oW~utww-?yEeW86d4,5viD_I' );
define( 'AUTH_SALT',        '|&`.<`Dnkqq/*}PC_V<#G6|aI#!N5`b@}md0gY~kTfDWesL;GL@@pGTtL,feVIxT' );
define( 'SECURE_AUTH_SALT', 'yok8W~_tH3>ip%E#V[VTkM8}f DPZ7Y0a2A+g=h[hI*j!rcI6U1i?e%42<Ds9wHH' );
define( 'LOGGED_IN_SALT',   'iZ8TiY]8LPuCDhmDxCa.jel:;/DQPJ*0 mh c{kFGGU>hU96cZb(iu/dIl~ m0%D' );
define( 'NONCE_SALT',       '9#,I=#,a|>Xq7H3~hen}?nm#9Bc_i&6l:N)$c4{gDP-Qgjg?LP3$h/X`)6jr2Myq' );

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
