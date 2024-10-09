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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tokohpers' );

/** Database username */
define( 'DB_USER', 'monpers' );

/** Database password */
define( 'DB_PASSWORD', 'monpers-59' );

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
define( 'AUTH_KEY',         'D]0>8|C_P1!L8T_z^D>6,.(]FxKZT+7dDKd0:aMQ)jB];}f>fs%*[-CUNB6HKjP ' );
define( 'SECURE_AUTH_KEY',  'qoR@Bf5D9!;7$M3A,J}vY;=SLn&C?yG>6-Uoe-UV.5xz/Su{:24S+Pq2G[6<bb$Y' );
define( 'LOGGED_IN_KEY',    '!O_R%ANFBn*!YRa9XzoMAmz7c`C3 DW[/lP61K:i8HU8tQC;k-/7fr(Bo^=x`fw9' );
define( 'NONCE_KEY',        'SP_vzG3^,tfbfZpp~uIOX&+PX%:<IPYx_BHV$O>vIE=/;g/a26~VHkAbFKd l 0L' );
define( 'AUTH_SALT',        'h&a{ 2*vcrRt]INO5X23L~]{f72rI]-@eg8zOlzy#[<EBe:3tDyl5b43[;H%Tzop' );
define( 'SECURE_AUTH_SALT', 'm?Y:3]0^JTjXd|v1LvyJ-*WT`caOGP<^:O6UHwU7&VdCPi+S[(f|r&m+Qh)r6)Pa' );
define( 'LOGGED_IN_SALT',   '?z@`UY2$a%o&+AU0Mo{Z]^Y]oW$JWIb[VLq/&vvK;f~6`/nAY+&*ryl9f<mcT(N&' );
define( 'NONCE_SALT',       'mL!lz`zF<?E`K 3g@vZ?&4eGu_ntBYe-k]~NlNmHoYqVC20xbJ$v4[.)~:Ny^d/r' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
