<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aqua' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '87Mh/f|%<!=(TV4@]!_./!l->qa*Tg[=/u_@ZwV0LJ-~ECI$G3x?#HfN_b!ii<zO' );
define( 'SECURE_AUTH_KEY',  'g,I~6Cmq IfdD$0F7N|OrsDozbx60&_^ZQ>[mf??_`o(mte}D?{!O4q!x|J*110D' );
define( 'LOGGED_IN_KEY',    '7F^Z7(OvZ1[)@2HPai++S$1Vy6OLUA)zTUuILuv,56]6ZQ)lLyC%NO]+0:EeieU0' );
define( 'NONCE_KEY',        'YH)eN93b5L^A@Yq~&>N2*fmjcsvra^L;,tWQ}j1gY/*i&qyq^OwYvYU@x~M1Z+$U' );
define( 'AUTH_SALT',        '1E%?b_h[YLpZ2`lZ~sXRHTygu8.x(e<ix+&g]-f-N)mJY@>5#IoqyHF9DRY >1!k' );
define( 'SECURE_AUTH_SALT', 'D3u#[S$@)f^gP<NXD%7,K)8ZSz|<rJ|cXx),K3:c*<!MG_Qg#KWrH:VbGtCw931X' );
define( 'LOGGED_IN_SALT',   'fvDu,M68Mv`OPs2LouFZWF)rQsp)=s_qix#<N$>`59%mnW$Oo76T,O$kTP++ZdT>' );
define( 'NONCE_SALT',       '~xj!%C}&DqBliL$DS&x2<mSJDr|mB=9H0V5x/UuE[ut!Py.F&U+mVI=p2*B=p4Ze' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
