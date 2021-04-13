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
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         'yuGC8G2l]r-/15{^R3MyRahj{S7!z+WfTK<-fTJqwLyJ.i#Pf3B|J FLvc~*[kNb' );
define( 'SECURE_AUTH_KEY',  'S?[d169I8*+]?.qL0?s}Ftv|ydH?qLRF/7qqV[lPD1_&TSiI(WpA*d9Ieat-r=@c' );
define( 'LOGGED_IN_KEY',    'N??^u(zN24m{jIq?l%EH?.+O]RkSL1]~m%<!Mf&W4EYLF7t.JJLr7g*,Hr*9.CC`' );
define( 'NONCE_KEY',        'S$|p_;4c.?Hd$?_bhmVyE4loo+Xx0DEMn*vN+d~&/B_SDc7wNmOaUVQTy+4&u,5 ' );
define( 'AUTH_SALT',        'QrfV!u~Cazu%1]*-!h~ipN`6Ys)dk9FW]@X`bV=fV{Egzt}aR$?C?5W)??Y<Di6&' );
define( 'SECURE_AUTH_SALT', '^#EVhcH?/eJ{CUX~pbn<:|}hOpE{m!Hgj?3S=?Q9i,j~@?! bXVdWZoxwvQJ<fc<' );
define( 'LOGGED_IN_SALT',   'jyNJl]b,|DfS*.[QUS4TTQ>Jm3+-o;qz=xRH~}gV!NvJ->m;6[#jfWds?C$_r(#w' );
define( 'NONCE_SALT',       '_iICq/xe/48 u_wm`,;!vjE6c1z=NAh++D~w*//pO)k9Gxw}&52<==ozA#p-e[Q_' );

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
