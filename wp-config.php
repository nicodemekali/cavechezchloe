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
define( 'DB_NAME', 'cavechezchloe' );

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
define( 'AUTH_KEY',         'Fk/kq>Qz0,CeJS=vO7?o?GH6 K=%cs.##Bh)a0mTiBS(/f#ZT;[1yRy01#e%K1O ' );
define( 'SECURE_AUTH_KEY',  'wuMIK}3-6GYoh#a!7JPcR-a|6sZd1mS`vaa]e>TQiq)DO2^#Bp|{XQEAV]owM1HQ' );
define( 'LOGGED_IN_KEY',    'O;Q>LE-a),g^|M rQXGB5{YdpN?W9z}c)o?K@PT$AWDnHsJ(WZ|I0wW(E!PNVn)j' );
define( 'NONCE_KEY',        'L3Y!~Yp(Q9X?/,Od*hO~~dw_xV 91v=rasqoje>^#sTSy*A~41c%ScK^MstGBWU]' );
define( 'AUTH_SALT',        'i?+JU0=((5 mJPRT/y7Q]bX8v8]#~W#duMJKzZ[G+]<MFc78sI1S,{/{ag(`4DnU' );
define( 'SECURE_AUTH_SALT', '_%]0_Xw|pkGS$pPVU:Q(NzciP]5i??0gZBviS2<9y2sGMgn(v_&40}j^S?U.DHSz' );
define( 'LOGGED_IN_SALT',   ';,II3Z2bVbMH,aHgPwyyt3*bK&nRK(L|iowZxv,~V|j)onH^}akFPkbB`([`k`iG' );
define( 'NONCE_SALT',       'pLgM9#xfrp Vr9Qx(>?{FJ;~:7{!m,qjm~_tn ItF_GrQ6L%v@Z6eV3}fS3ydgb:' );

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
