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
define( 'DB_NAME', 'stor_dp' );

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
define( 'AUTH_KEY',         '5+~F2jZ}4KUlKp,r/sdaNAno87VHZwKNp`0,vf)8Tk3&rA{m:f6-.FK<BH4pov;Q' );
define( 'SECURE_AUTH_KEY',  'F=zP!{T`C+$6^CLu|0[3-`l4oBU#u_#}Ip?/_5;z0!F}|9hT;o<aGZ0Iw_4YIf6^' );
define( 'LOGGED_IN_KEY',    'y3sUxqI o}l#G9,pS:3Q/{<aSm%T.EFRLZ~uj_E1@|)K?.g{&dz{7mX2/_@[k,CG' );
define( 'NONCE_KEY',        'F0ZD7hK@+|7%hDG$o<fr:?sJfM&N&JEB%XfR1)MG=zY 30Z:{.*>n.a/yh eC^n4' );
define( 'AUTH_SALT',        'g_vS{by!bG(#NN0Pg~5jwA73NwBg$&]V&) #wH.2i2v1<d!+tgZ-c4F*dt7^J^J)' );
define( 'SECURE_AUTH_SALT', 'wmUe>CU{<oK_oL[*_1aFw${@Q8&P?W$#6dbz+D4yy:Pt*glc<wa?UBnFWPV?7Omh' );
define( 'LOGGED_IN_SALT',   '4B=bGHsHecXaN)dPnlNdg7(H{6j<}B8$wb*[[OSAFK}H|G)vPD2bbV<)LFlgaE&A' );
define( 'NONCE_SALT',       '[xhaa5O)}^{Ucu3#DxWy62lH7sW>La68pw4@wFGbQ}[(oB}`_pR0<W&Li*v5p$7r' );

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
