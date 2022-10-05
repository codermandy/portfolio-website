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
define( 'AUTH_KEY',         'yc<xFHANHrMOmn:Q]=;3<9>YDX^).@dssouPt_]o[fj/D$`T%e95Em/wjG/l%POv' );
define( 'SECURE_AUTH_KEY',  'w|(ch*.Z&nv_7&=w?6)5FQ= _K)RBG90ol/:*w`P GJ.I/!)hVb<(VLw|A&%QYC0' );
define( 'LOGGED_IN_KEY',    'dDf?bK#<1vS)pLK$@qIJXZV9c{m8 +~ZEH#e`7?(LTzL+2~I{nJ#7x^XH10]oI;~' );
define( 'NONCE_KEY',        'wD%d4zHvpB(x<6a&l>W6{7LrGW.Lf_N<3{^*yjU&LSu%8GT=&~Ix`~x|BP-KUC 8' );
define( 'AUTH_SALT',        '5V_X*$e,fkm;mMRVi6sM9_.<o1XCV;=+I4~x4S%W{>>8V /u_wXB>~UOy^os:m}X' );
define( 'SECURE_AUTH_SALT', '@nnb-*Ns)o.xBH36/Umu@b%FW*<tc1?>YPW`q<`:9])-Gdy6257Q|M3V~HVK&R<B' );
define( 'LOGGED_IN_SALT',   '5w)B/K4N{1b~Fi|hk/)p _0D|tzwh~>VlxKxp70^xE El4L5s}O;(+-4:j(bl;bQ' );
define( 'NONCE_SALT',       '7]vIh+SB{#@*n[?^~2^$qRRVHtGd-UFo= @Q6PIav9FqIuFq8(Mc:~-ys<QEX}XU' );

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
