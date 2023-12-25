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
define( 'DB_NAME', 'phonebarz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'EuB2HRqJ]]Hqqf+x<b1AHcB|xM~hkCwJz`M-;P+zotXKcm&}B=;E4BX(r~7 _rB`' );
define( 'SECURE_AUTH_KEY',  ')ln]F6 @[0d,7!HSu-XV&h.G*9LM$wzS=(FM,[aWfx#yrnJOQso`X<Bk.N<_j)DN' );
define( 'LOGGED_IN_KEY',    'bzg|_m@&L/oiNobZpbMzQgxWx]XMJk1!qXZKLNCZ^UAx?Zxc;jp;;-y3_qmqkH03' );
define( 'NONCE_KEY',        'wNF,di<TU]/y%6q<HXq:ucMt r]CVQeGPcJcil;y#{3|.)<,/VJ Rq#R)@7&ku.}' );
define( 'AUTH_SALT',        '1qUf(tfJ1W<QaI(RpzT<mX}ID,z%@?7>2VaQc@HfoczM!?d~o<<JxwlzJTQn8{Q+' );
define( 'SECURE_AUTH_SALT', '?<^Ch0v(n/gpdq|8s2=V/ofl0mJHw[tPftbV/j<MA7:skAA^qw*N2644,mgI{</E' );
define( 'LOGGED_IN_SALT',   '|9tiGx Y<6OdYzotj9#VK~`>i&4ajl!o7cxyt~IbK]6*$Q+3JO2d9Nr][FqPNRFC' );
define( 'NONCE_SALT',       'U&ljoaM-|h(Q,(-Y$%q&lKhqc~>)x#RCrDu9v/<)AV9Nb2Q0>10wb7?{_$y37Ysa' );

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
