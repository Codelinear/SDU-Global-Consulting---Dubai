<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sdu' );

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

define('FS_METHOD', 'direct');
define('WP_HTTP_TIMEOUT', 60);



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
define( 'AUTH_KEY',         ', mn3LY3ZN4RvvZLKzt:Ie^Wip*i/2fc._M&vTeP3^1X>9<`Mk}F01 -C0RWQ1oN' );
define( 'SECURE_AUTH_KEY',  '<IsE.OCB`-u>HS]A?fCo[~h98/mxmJw3}ftLF`O_CEZ|&9{GbbaY&Xy@i-ApHW=:' );
define( 'LOGGED_IN_KEY',    'N>>Y)U6yddPf`EigMlY>|j7ncE+21E<rJqaWWvc*$/1v/<<xs!?:>FFm;$QB!9hV' );
define( 'NONCE_KEY',        '((mnb27#r04[P8P-9^:%dD8b`)e9?{#P<YoS(bpX_,1iI5M1 {z}4Qpu|O(Wt7Z5' );
define( 'AUTH_SALT',        '4l>VoWLb{~|3E#R=j!.Fv&CtyZp N1{FQP2;Jl[07y$FZJ~_WSy=tsI.&oP&Sc0b' );
define( 'SECURE_AUTH_SALT', '>]?cv.`a!eNU(Z)yT=p^^JYV.Rmg#X*:j*LoxLj!{%q&Dpu1d<zGVLP?<.n4tWsT' );
define( 'LOGGED_IN_SALT',   ':J`&.j;}K$.Kk~1;xI &`p5K}]+VGef7};/{/w3P>Ukpr%}OggOeu,`>cV&^V4p,' );
define( 'NONCE_SALT',       'yz&Zzs.K:s2pB_:T`x&c^_{MZa-@z#T+^{RfYI:jFCsORqYg18Y1V~2(Iy(IRs3M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
