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
define( 'DB_NAME', 'jongkodingdhana' );

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
define( 'AUTH_KEY',         '~^-)%-.Utf|~!x13+[l1&]DXs?qxVS>$[`fYM#r[`fgz77w+^F<@rPuIaR)J;:><' );
define( 'SECURE_AUTH_KEY',  'an J?2wU*]Apng$Zt%[iq8{p@T;6kT?*?NN(rp?<1*(a?|4--]a(PYE.]3#pgiWn' );
define( 'LOGGED_IN_KEY',    'dnbJY@;4,]nf7i=Z}E]~Z[9Uxy0R#3ULa5Qt)QI.H([7tfH^$Mp:6Ov=qk2+z?9:' );
define( 'NONCE_KEY',        'rWO.;%B>dCv~+n4#9nbGoJC<OEXnJc.{^Kl;x>`H.6c/z6#C247_h=XUB=9&5xoA' );
define( 'AUTH_SALT',        'D(x$IXceGEmg6fCgqZsM|+R5P.Ms%,wa=t5G=6V|z5Lp;s#/QF=1Axa%>!-Fv<E<' );
define( 'SECURE_AUTH_SALT', 'F*_WR2$b0P3+wq01XcqLMKwyR1`j2Qr<r2{eWuPcSis;EGm_qSZ>ip.=V&Tqn7qf' );
define( 'LOGGED_IN_SALT',   'H~(!Zf}%gPU%=EL}$I6Ot?fs)$yjcGi|;c*8(fpDeT4`P}ybq*f7hu2O65o0386F' );
define( 'NONCE_SALT',       'UPi[9/}X$4pUUIB80j]*typ>Ld&qo((Qb#$hmb=AxFdI;sq!=.,t~5USCVqM~(9g' );

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
