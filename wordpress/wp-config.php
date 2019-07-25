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
define( 'DB_NAME', 'dietish_7315' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Saeedkkj1!' );

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
define( 'AUTH_KEY',         '/sqHMcd[Eg&(2x<JlJA70zJeOS.iS*^<s}6%3mVyJuwUSKCmh`W.{P!nE9;/y#j,' );
define( 'SECURE_AUTH_KEY',  ')8n!r$6XNalidHxZ!#FS~s&WYiLq1+JA_>5 ^3.0xx=Tk_gk>rpp6W`1W[}:r-J?' );
define( 'LOGGED_IN_KEY',    '[w=](E(/qaA7#YI_~An/UI?x/Pg{T5]pK?L%+(:UP2LV6CeSRjtnAPdTQXD2cbU7' );
define( 'NONCE_KEY',        'FX0#?a-`4hS&%8/]=Zp:QNyXLI).cye@oJ^x{me-Rk[3n@oYU7ml6L WqX@=)U1/' );
define( 'AUTH_SALT',        'EgaKWX@#lW+:IR`$SR|`LF,9gl=fUnG{Do7m+g8Z:nG=?YE]Qx1(gM:i%I0u=mB`' );
define( 'SECURE_AUTH_SALT', 'A+8&hM$Z0l9R0K7)b;uYamJzoB4Rrj>Dc$}ois;10Vx)~rz%jQBWxud(LIj2@6Wg' );
define( 'LOGGED_IN_SALT',   '8Tp~h%YG@]czORdb2;UW7HN@;1U((m!#Zb?erQE^fB`k^x4/dal(BYwOs9{EI6?h' );
define( 'NONCE_SALT',       '_N.f,u.PB((pA^!VR+S+9ps2rBlUUi$lHJgV9egf0ii<Zhn9BQzL45x;q9Q^IHh{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dietish_';

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
