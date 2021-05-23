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
define( 'DB_NAME', 'bilbaobusinessvit' );

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
define( 'AUTH_KEY',         '[`!k2xADB_&{>%M+IY~f4uW<yVQ}EUx^n{k??F1Z%B5~~ sV]l5!n!:+zG_K5TzI' );
define( 'SECURE_AUTH_KEY',  '*+nFfT:I9}qDe(6}:L,0q-,2+^?Ej*Pq8EY>(Sy#C_n|}7AdTD^)t)dn(OOW[Cj1' );
define( 'LOGGED_IN_KEY',    ']|v{:du6JQ>A]?e3C(TTlp**_=<*Ax,IzK-mR9c9m`aB#|Rmg.6-COHFiiQx!ib,' );
define( 'NONCE_KEY',        'biw@lJZ1SqnN[$4J/pM6jLfjC]$YGZf~n;;1JFfzse}?:1$/1P3Oey`9qg]T]K-k' );
define( 'AUTH_SALT',        'TfC<L4V&8ZJ}uy7k4cG]dj$$pYaqRN^1Nt2qI-J,(a!+/6-`ivS;n0.g5$VU:+dh' );
define( 'SECURE_AUTH_SALT', 'NBS7,{]+M]`#uq6=,{|BGJ UEy<eZrO3#mGV;cEOU?WLw8Uq7JJstsP=QKm(K<NS' );
define( 'LOGGED_IN_SALT',   'W5(}N~LgU|K jSkVV!V0A+XgE=0nB#!WjA93a=qZXpuHd,jZM]i%9](du!~X1n;q' );
define( 'NONCE_SALT',       'FNp3^D`S+mdfDLd#sSIk&-t3tavH]op]U84a({Uo=5doM^*`Ra&lU3kqom+lMP^D' );

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
