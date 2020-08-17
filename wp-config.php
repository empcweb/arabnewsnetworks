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
define( 'DB_NAME', 'arabnewsnetworks_db' );

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
define( 'AUTH_KEY',         ' hnH-!41}@3y=*A}eA4y`z&d[]v|+hh7-QN&{P}.jl#_L]bNWG~,K=nI g?5;&mz' );
define( 'SECURE_AUTH_KEY',  'L]D);Y%O$PX~e5W/ *&;eYd;Cfw3@ty[y:~[HsuQE^PN*Tc]gg]E~#[!B4(n9emt' );
define( 'LOGGED_IN_KEY',    'a{2`8@U0sk<-)b~2rP(07&uvuFR6&6A/U) &^>`yYt<h73$`,t8?!p)p;PJmi4YK' );
define( 'NONCE_KEY',        '>_lcxEgKzPj@Gm.f<d_uWs3b~lgJun!lZ^P JE[5!A)qr]2jxl,Yf{z>_HPsrA2&' );
define( 'AUTH_SALT',        'ZAhX?3y2$(uv^9O{cCC5=jk&EY(?&^2m:}rbC=im/92eHF}Az8OVunp fP4(rYj1' );
define( 'SECURE_AUTH_SALT', ' 9?V,NdG`v59#[VC-J<!crVyk%NG3ahA1~[$6kUh{]4i>HTojN yd;85`(G[$1s%' );
define( 'LOGGED_IN_SALT',   '`me4J[{r=x1|;(XymQ+LS_O3ZQv|h:nY [FEh2)UxlQ`]bL=.hinfU.?#fNP #jE' );
define( 'NONCE_SALT',       'YaJv ^LL6E$2pkqAl{L` JZdXCO!%6vS<(4kFv}!DF^>j[PUK[?IvC!h$K1mYMXM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w1pZ_';

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
