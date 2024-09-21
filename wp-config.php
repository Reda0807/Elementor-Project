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
define( 'DB_NAME', 'landong_page' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'cfI4Tpv=DpSKNqjcxgP_CPuy%2[omX.VyRcAwJuNt2<wuo@2nH.6(3.U)?L/5w<k' );
define( 'SECURE_AUTH_KEY',  '5iS8m?`#gL<d:y:szG^rx[`#D$b^X+^br.NakCmX]TMrTIH5W+x</xr5_)$MCVpZ' );
define( 'LOGGED_IN_KEY',    '7D1?7}5T@,beJ^Br6vW?xu$$Nwfss-fLkbb./pb<tS@&mO&i<&:?B.aqlyjxg=5.' );
define( 'NONCE_KEY',        'q^2SM@XIVz2]{^G2o*0]}]@kkl1Z{8KWu_Y.;Z`w&*jrI{ME*2c?/!j`v@[,*43l' );
define( 'AUTH_SALT',        ',V~zg9s(3.z3@jvQ ]o8)d~b3Wwj]a(u~B6C1]H<Gc;Ru9QytTV8j!TywrD#V9i%' );
define( 'SECURE_AUTH_SALT', '&|txuKa+Y|]W[k=5!Ui)d|e:]/:s{,mbQznwC53d5m0{#jRs&HfoMcU$9^Kl~I.9' );
define( 'LOGGED_IN_SALT',   '%u/5!Xfew6?tE*azGo{paSed4vD1D8M)Znus$TNKToi{QcG@4;A(F<deXc*)^`+y' );
define( 'NONCE_SALT',       '~@wpdAy##i;?2* 9jW{[SNtbuZc{:-R9qz[0=]hNE2cJmCcw):w;lhRc6+HiZQA~' );

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
