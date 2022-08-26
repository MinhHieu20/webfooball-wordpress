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
define( 'DB_NAME', 'webfooball' );

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
define( 'AUTH_KEY',         'sP,]DU,uFSZ@#5!Esb<}470ZJ/BA?ap=qp$<Lak2-v7r>pHxt^AhW-!b&yj=`eOS' );
define( 'SECURE_AUTH_KEY',  '#aqDTRB[;JH7d8/6A~dZ CnoDtBK#9C4hfaT^}>RLtKb6Lv(3`jawY;G?@rmUh4L' );
define( 'LOGGED_IN_KEY',    'ui#/~dTkMRG/>VEn3*H!<LZ=8GYZ+*IB6m-AHse#zGe_I@Xz:h<_zb4R-sM%YuC+' );
define( 'NONCE_KEY',        '/Yh*5bHb9YF@Vu}Kc.91CXhYc^rW?g^~By)>-;QPzJS~ ^hZ9$PQ};>rLHTYm@gf' );
define( 'AUTH_SALT',        '7gK8;bjkI[-?e0e36w)Xn^G&>#irI~xr|./er3Hp:04>asryFXZv?{1)ivTL<hl&' );
define( 'SECURE_AUTH_SALT', 'u5?$9i2>T,`2:n1.vq>KT`?7T]T{HbVs>k0N~0SB7jL4i6x{R+lnhU^_Haxrx~mc' );
define( 'LOGGED_IN_SALT',   'q=$!moY9%ON7;CZ{wU$C!RCAO!o[bA7npf0>^/h#y;d?H :7Awz7CMqd~:LR;eyc' );
define( 'NONCE_SALT',       '<9^.?o{*|Q@a*2Fy{JJk;IvW-PJ<Nw*tv^pRU?O?>oi{YCo6E`@V+@4B!<N@b,n1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_webfooball_';

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
