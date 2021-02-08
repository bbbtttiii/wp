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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'WsOWgpj*ai4[:sTa|vlWdMn%%>w3=yf{!n7F&b<S#jj|6rHrKwt,RSf&tLJCQ8gr' );
define( 'SECURE_AUTH_KEY',  'jUQ[=5J<<D#+xU<j68<,Z0OpjvotW&T>kg`[]k]<dh``1t~pLye*+X0;#`la8/4+' );
define( 'LOGGED_IN_KEY',    'J(^?b]z@1,RSi^B_wMN_i%uvj^# iWS|~;hWO.#Vdxy~ 5 }CP8zw<RmrS-36EBI' );
define( 'NONCE_KEY',        'd@!B8Sw-QJnAnX]/US<oEZ9vy+q&4+m`4]-aWz>mL-t8KmpCv]e# 82bffi`tNmH' );
define( 'AUTH_SALT',        '=k-gZdJXIrm{=<@Nk;nxV)JS7bwnN3#`QljCAmbzojKYFGpIj({px:I=I}U1,lIA' );
define( 'SECURE_AUTH_SALT', 'H-HIS:$J uPP2Cic>n$.nhto%+NW`:B*6mAi|Y[rv/fyS Xm6;G$Cu`I>C`X6ZQW' );
define( 'LOGGED_IN_SALT',   '73vJgebC4r mA[6k<:i6rNnFmJ7-5i._Z2TM u1olkX%BS`mXk=cBd#rT?l@6Z[5' );
define( 'NONCE_SALT',       'r;m*(UV#/<*:g[W,u|+aO1U456{@#t%)^l!1E^p>i+epx6iV^x#NASXXR!uP, ^6' );

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
