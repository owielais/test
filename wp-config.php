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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test2' );

/** MySQL database username */
define( 'DB_USER', 'webdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 's2Nl1eU9meAsq2F89m' );

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
define( 'AUTH_KEY',         '5-Fh]pii:r/C]!689R#}Bif!, x6;burwMHhq!>?Os}h~A40gAcNrA5D@ou=67RW' );
define( 'SECURE_AUTH_KEY',  'o@iWW@,Wo0R{ogu/v/R2YZ:5pq1DW7)V%kymymz*IB t&tWz3aeic,Wg(+Rz/{Fj' );
define( 'LOGGED_IN_KEY',    '5)0to3027?/x9.V-q+WfP%QVrSNEh v;G[P1L!&+J2xV)@Zq|4:Ee+Z[n{Yw0HUw' );
define( 'NONCE_KEY',        '~W,{D>@? Kt6| ^d+Fv*2lcx#-Kw$=lD*xI5|+OM-;U5^upG1E1V9W71O4wkW~w^' );
define( 'AUTH_SALT',        'T[PNm]vyY- ; !H%!D$+lyq.87^u`hm9mGuNjE+kOR$nY)DC;M__C!Fb#]:l7Kzw' );
define( 'SECURE_AUTH_SALT', 'KIPc&^znvV<tvQ0,m[=%kV}|2Lf|6g5}YmX;B]HJ[hT6(j2dUSAxX!%EMndY_van' );
define( 'LOGGED_IN_SALT',   'ouFDtzU0uj00=(FHT-g1k4<btV?Lg t#>ano;v@4C>;w3P~E0!y j_V!}Mx_ ++!' );
define( 'NONCE_SALT',       '+ ?;&XoQ;.c5a*=8cA:23ZmfmnE#GTb.628h @JsLM:B**NOYqC)Kxg<qP{pCEhY' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
