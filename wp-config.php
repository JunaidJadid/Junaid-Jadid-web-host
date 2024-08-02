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
define( 'DB_NAME', 'jadidblog' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '2)_.|clPFs6#6yk :_5- ];}t_inc+[`iQ- a>94%lCK-k~I{u&`QHt_%@`go[lg' );
define( 'SECURE_AUTH_KEY',  'K ,mlx?/iL;6_:<^$D0uS61DS7[7_|V&aNI=v3cM]suTj5&~QI{+f@_W9;,/pPLX' );
define( 'LOGGED_IN_KEY',    '5Lg1f07==O/Ev!E`Ae@cAAtg5>Svd2=+-rRtl(vn{otTM:_cv5!QC2BW+|P=+j29' );
define( 'NONCE_KEY',        'J@MLPXV+LIxKB5qs+6l(pi[t<JI8r{3;F` UXTO2%v/]ASO~BG.HZ0fY`30B.p`T' );
define( 'AUTH_SALT',        '-!v+$>^[/1u7%Hb<Eb9WK<dAE:jB%eqU<^-@Kq g7QaaLItBNFihywkscV`;IuD6' );
define( 'SECURE_AUTH_SALT', 'Yu1w[aY-G5&P${ ];A(J-L{TO&QM3QaF=Z+&.QIEm17*_U[j9eA=dBn]@0p.>a)+' );
define( 'LOGGED_IN_SALT',   'dp 6Mr[7hPkhSUjJ~;4>!E<ei^/h#r:v.lXoW|4gOGOCmj%u8:jV[rb4+ ]3fOW;' );
define( 'NONCE_SALT',       '>_g1fVMuuVB[=@i8MeZR,)LJ-bZVCl$=;=vyF@WsX.koW`KIygKO|#Qr6vy|K)%8' );

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
