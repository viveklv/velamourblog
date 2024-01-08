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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog_velamour' );

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
define( 'AUTH_KEY',         '51>p:HC0$)2j$!=:mt/@+c22b]pp7@ib64RhXb&ND]/DP9=K}F@w`DWlf!r)l/+v' );
define( 'SECURE_AUTH_KEY',  'W<9Ys?(dXS8Q#K!2{SCb(X}_>{j2(wJte|qw!cX6Wov*,:z$jO3xl(reUd5ZvUZw' );
define( 'LOGGED_IN_KEY',    '/!_8;q}m y7<d|nL$qnw<7Maf)4{C)vmQ=#NG%AIU[MG.,f7cro9uccQivgT|=(j' );
define( 'NONCE_KEY',        'Gg,h%5^S$)Z]-wmeC=(Kxv>r`1TDNbSoEr=11$^B`c+H,5c~*J$~uW2^B:o%$&Qt' );
define( 'AUTH_SALT',        'Cahk4Qq{G*Q>E]CM)?iNrXn4x{<Jgq>|15&r6ikah}^E1fnWd)L$%&kx6U5q)/N$' );
define( 'SECURE_AUTH_SALT', 'kln!3sIO+QeomZW5,xGqfR:#Tb]N3OuQ>YJb6~/>R>%w2^QA*9W#]nPn6eD{>ezn' );
define( 'LOGGED_IN_SALT',   'u#_2d2T[_|@!E EzHW)kNI)Jj`KDa-Y le`&)4aO/5`k35@Bw5k~qoLarSVXSi1^' );
define( 'NONCE_SALT',       '7QPx)]h)S8<G#W:kNem(_R@0Kn-:^_[)~9P`,R@;4k!@oqDp]h&vu?OP2llc?9W;' );

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
