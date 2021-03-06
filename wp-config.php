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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(r~d@Zay*zI(a2_|=1Afi$vEa45g*7tu b.@?IB<s9k[bB6B19=.XPaz6[M.;E+M' );
define( 'SECURE_AUTH_KEY',  'E+Sk/lG Pukt!?9N&4Fp?o1b]yeeIz?~?GXk.n$b]gDSR?:}8ku0*LNohuGhM@7y' );
define( 'LOGGED_IN_KEY',    'lML-&8G/~5128ks_R~Y8v?H.8Bw+Q@;Z*]hB&;auyTae5r(.C=WgSH]X6C&qp9 l' );
define( 'NONCE_KEY',        'I4|^p!:KQ~+H+$6$w@/-znCCDJNt&dy/0Q[?&%Op358Ld]_8!]I^b9_8HXiLZPTW' );
define( 'AUTH_SALT',        '?G?6g$zE+Kce#[LyxWoe[_[tQ,j2m0.grWk8Q3uYb^QlvQx8`h6|s;92iT+@kSMp' );
define( 'SECURE_AUTH_SALT', 'c)~LB6$SQ @dY`P&S5%0I)J*WPv5$]}M^*!FQ]]_tuvA%jAMn&0;PDNx%g&CcR{X' );
define( 'LOGGED_IN_SALT',   '`!*O[d`+`.T9O138]FR;LxG0ZK4#d)[yfdt;cY#E_jD_::RFXU2P,x)m&,4rN(3[' );
define( 'NONCE_SALT',       'f=S>K823pMm`6-F/nW>HB#pfS0jV?hLu>+AW]@;Ao*dcj0EV3kA9~_P;3&4>r.>7' );

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
