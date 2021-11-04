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
define( 'DB_NAME', 'db_portotian' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'sjPEiJTDXh:R2p^tPBupzPi*R0pwiA5>d!qZu)@?r+5I9]!@.jNxZYGSqeO]o)`i' );
define( 'SECURE_AUTH_KEY',  'G!v1@;_X;G4X}fJD<ab_@i|o=,<~K{xXy*c7n7GwHx@jK9/P*H>gyb0qS%<5Y, {' );
define( 'LOGGED_IN_KEY',    'vnATR(.M`T9W352Uu{O`<]NkHy05hG>C]XPt?C]XgJDN ^2k6hIM~i<ikZ)2km12' );
define( 'NONCE_KEY',        '7;Mv_+yDX2@3TH r3?WE`&7Tq6^X#a^IbZ|OJW7#>agO^@J%0@(17:,1*b1hB8/{' );
define( 'AUTH_SALT',        'tXPBF;Zt&P*jESC[vRJrz57S.L[%&2cDgSsp-s|T4s.cZ,p0+PXkfS4)Ez55wZti' );
define( 'SECURE_AUTH_SALT', '<BWmu@jC(0tGZyaM<3,VjZ/rl}QrI(O:sJbPfrk8~9r9U_|$.::s%KnGCZJe(p1X' );
define( 'LOGGED_IN_SALT',   '<G85<Bw^Csq25Ykr[A&QN`G5qh1NWfF8&!VKABvS|$1}9NR[;Zl 6&z0v=m_4.d}' );
define( 'NONCE_SALT',       '@;b5Qk`>CKlInx@YtywPIPge4K9vLqUwu%%p)],bp`[}^(zgj*]0Z`i;{_o=tJvO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbporto_';

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
