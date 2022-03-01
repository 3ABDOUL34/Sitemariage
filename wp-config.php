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
define( 'DB_NAME', 'abdoulnd' );

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
define( 'AUTH_KEY',         '1zU{/ A]?RD=H@~C:9wkJgZ#w;|iz2ra>apy1=N>T:44^I{PP`>*C6Ul%V*;5gL1' );
define( 'SECURE_AUTH_KEY',  'AIie~`OlkUro>RbbPIY#P5?Qn:JO0#lq0UJH25J9=;b. Y>]XS4?wbU9KE~lvTj>' );
define( 'LOGGED_IN_KEY',    'r<80PEQYYWF5&p]o+WhP.>Ud<1L,kU4~k]w}WBU}~KSXeeeUqZsmofc1,%)<.{s:' );
define( 'NONCE_KEY',        'o8/AvNsJZw[M:yP8^nw {P:M/FPmtb0NBQ3&bO#6;nf?czK3BVm]-{LumD*3F>AK' );
define( 'AUTH_SALT',        'jDHW]>%QD>bB]>3RPDY43_E(B^eYJgE<qhn5i.bl~X<2xF,z9!ud8/,yq8AH6th1' );
define( 'SECURE_AUTH_SALT', 'sySD-J;n@Z}D(U}f^bwZc%Up-G;-@PpuQ3`a,^+Ov,9L:s`gea/jcy&iJd=I2zie' );
define( 'LOGGED_IN_SALT',   '; Jc8%bLsYG,k:xheX^F yzM>cWrtipyZ`m0grDjWVu&kmlSft7%^}^LNZA6b~1V' );
define( 'NONCE_SALT',       'R9E,|f7w8gnAR,;tj>1icMus0vo?]?hM<FObfHjrLIYVHQ`:RVqu{ BR_T:B0|RD' );

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
