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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'allatkert' );

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
define( 'AUTH_KEY',         '2Zg0cB#Rq-uA?UEGeS!>/?f>}-o5aU&hW>%wQSzM#KY.Vbu|@YkCXA+v=f-lHSFe' );
define( 'SECURE_AUTH_KEY',  '&yMj5(-9WW7u4Kv!FPT[ypFwk Uc{n;OJ]Aw8i{z8d2r[!9VjI_&>]`U~AmU1zja' );
define( 'LOGGED_IN_KEY',    '4yr6Vz4x44a!V!vpR;M-n= Bv70w`zP`&}SeOW(p?CgI-q=McrK2z0Ca64A3v:L3' );
define( 'NONCE_KEY',        '@$6U|Ku+r3#N1,5o2d)Cu^WC-9SV5wr#g;fegFs?xl g`3S:q&s6Lx7nE0p~$BI~' );
define( 'AUTH_SALT',        ']Q L}h_@a-wY~Gn_co,Q-MBig*lhhKG;}%4@yW3+]t4y: ZZ-Ii*  xGi >c#[+c' );
define( 'SECURE_AUTH_SALT', 'N+f,]f(UP&K(A;)*[W}Sh?_&k1MX58*@} GfI!G(_:f:1eyEh:1QSBN`1_h4:v3+' );
define( 'LOGGED_IN_SALT',   'A8F>?*x65~?X#2`4o WwTtx+z0 FdFn92^2y[Bq]$h5^/o=MsP+iLcuDyusgVz%H' );
define( 'NONCE_SALT',       'QV1SWc?mb>g[]I1oXcV.#u}qq2}1qk9sM^R`5#k):]QBF xr0?jrcmr<}p}NURgR' );

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
