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
define( 'DB_NAME', 'clab' );

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
define( 'AUTH_KEY',         't%^:DxNj?^+utn~ahP+{BHSJqh&=YBjxD{U`z~>%:FXQBiCZbv18nTZ{Y!M<:Gnv' );
define( 'SECURE_AUTH_KEY',  'm,3)|/oC8PK0!#.R:;[H`<8:]=aS~q5W003XNvw>:Snvwx$0{:@3Ym *ux)0iS44' );
define( 'LOGGED_IN_KEY',    '=iD`U3m2$K=47Sk0b3ygRiQPaiHESa=RGmT/`T+yT*dmi&jDAn~0M=K;EDQ9GV%z' );
define( 'NONCE_KEY',        '1-=d4UfTTjWmC5d?xd||GSwlGWk0*yl&xtzgy?^Xy|N^<K@hu6eW|II#g)R<m5,*' );
define( 'AUTH_SALT',        'A10Stu(+LsjgD!,K%BM+~dh`g^Qre,~(>P6Ov;]uxV7+Fw#%]9|Dace@hsEJ10NZ' );
define( 'SECURE_AUTH_SALT', 'rJ|M2Cui#^rC#K8OpaX~tTu]%B* hmoXnQ[^C9tG{~Ay,7`<x:Z&CZ1!1B EufAo' );
define( 'LOGGED_IN_SALT',   'JpDz]odO8_>||Q0f_u(9A,5{Oy8,#G)!%BHd?p]!O%d5#{.1gTX`]+/S80W2J62:' );
define( 'NONCE_SALT',       '9i-SDm6v)Yfak>~LGL0$@U2zH|${=#]?50N0Hm9TD-^I{sH]#iL6f:0s<O>:mm-,' );

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
