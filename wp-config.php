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
define( 'DB_NAME', 'testsite_db' );

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
define( 'AUTH_KEY',         'nnW $?kh$uH.sKaTQy0P~.j5H&:iLpA-3@|jJ OS]Q)q3A7aOZH*b>:.Gws_<27B' );
define( 'SECURE_AUTH_KEY',  '[9[}y4vD%W23<_dpKFws=O1fi=ObzWxRC~<B.(-rVFEW.S0d`=.otos5L@nS(x,w' );
define( 'LOGGED_IN_KEY',    'LZzicez 5SydKZ+5W[)!$P#ii;s7w]..0q(l14OOI+tm)7K1(Jfqcf6y^,NkttMn' );
define( 'NONCE_KEY',        'j&X#mJbT/[+owlMF!bX4;B+Cf/ds*E9`:}`CVml|dZJr-%<S0Q%Q^itdwV9L).X ' );
define( 'AUTH_SALT',        'ANhHUxHzg.8KTU>A)P=O!bV>7s<,BFR m/=Ohhm{,lPFK]X?OK7N9C?8WpeO@D e' );
define( 'SECURE_AUTH_SALT', 'zIBBC 4{3bcEgC_<e.$/_j]X5{IjvlGMTSKvJ#gK[[LKzVR$Ey,1J[-YtpUN#ep{' );
define( 'LOGGED_IN_SALT',   'mey<T$l#0%P]Nl=:j_%/FJ9+pEW.unXm4j>kHRGjYE*Lo9c0>?fofUBdtw{dgIz?' );
define( 'NONCE_SALT',       'p0r&TrsyU2.2f9<9U2rM;li@OTHvL?E3R#,1Ij-) iM!Ra^CcBbKM#kf7pre$Ae7' );

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
