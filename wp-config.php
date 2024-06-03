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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ndOQV%6e0>db_J+i6{kS36IU:rv9Mle{,V{wG=#kS{_<STL$%9uRl[(sLcN#N_6Q' );
define( 'SECURE_AUTH_KEY',  'TQ:hrCO EA?H^Q^sS(74J.zkmB@-?ffk*-~=)ZktGH8KH8z?!YKV& tLMT^Hit4i' );
define( 'LOGGED_IN_KEY',    'qT)&rjeqFtum<m}E.xftiCo= g?@nsdpnI#EZAr7Zv=y$iH865ARP2p>F)sYr.k)' );
define( 'NONCE_KEY',        'o%5`~BWW!CU-INjr$=TW`_NkZ(m33^hn;YBgc+Q?8L}KWH9SHP@Xm^p!pDD~#`?.' );
define( 'AUTH_SALT',        '>/t&f<rxs%JJh~Pmg+R.iWERSW8e*3ib--Ry{?vqE?yLf$d.6vCuo(f9y[7a*<I9' );
define( 'SECURE_AUTH_SALT', '?dM1$6kl9yQr.2fH2<c4,-p%Cm/e78>=aPt93Lc2/mS7Q]thAmHF1gt*[;/E^$^)' );
define( 'LOGGED_IN_SALT',   'KkhURKRyH~FDG@yhR3,/:NZCXkS_A=26KTTT o<&m0F&z98{;.!HDm[^90Fj&qkg' );
define( 'NONCE_SALT',       'xuu>oXmvS.uP+YB7Z%)D2dAS3wwUt&ETBVl1tD-&e|`Q+#{tqaX3{Z8Ncnk54;.a' );

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
