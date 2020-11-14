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
define( 'DB_NAME', 'wordprueba' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '-H]kU8U8QMafg!55)G(brm& mW1 JyEmlVU|/Yu~[OYo P9Gz+F:;^#kiTW,W*MX' );
define( 'SECURE_AUTH_KEY',  'E^h;EJ31nDt/<JezfFs0WlzIDH5nZ_SMw`vYwK Q-c Q-HySuBdA/Z07X>dq UE]' );
define( 'LOGGED_IN_KEY',    '+-$+Q56DF_Dx+zx0-<ZG]aZc3nnJY+pIl<Kdk7jh6 PIHGIWo>PBcL3$8_tmx~Wp' );
define( 'NONCE_KEY',        'rx-hOIIrrfdd|Xn~eK2uq.n&)EFwlbdI9uJVIHr b82D8QVK.Ko3rF)R]`&@dUhW' );
define( 'AUTH_SALT',        '+x;v/A]p}g|GXA!|,Z;`v%$3)~F.6BoJq@-MXl$Ks7J&Q|<l~h~{TUbryyd/^:v!' );
define( 'SECURE_AUTH_SALT', 'C38`o*lo+>a*=EddaOn~YcRY-!saRBv4d<H,{vCQGzkt>LO;Y)h%]TrD)%}rL`37' );
define( 'LOGGED_IN_SALT',   'N(s eH~tv-%I;mxlZDR$ZsVj6ns_<t=W`s!G|R+,ytSm} ,0z}%-b(y%FCs[3g]F' );
define( 'NONCE_SALT',       '|WQ!dYXZVQN28bI0y50nVyB/fzwk,{L13!9aC2K3]<m3q3:@z$dQ*uh12r~,uf>6' );

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
