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
define( 'DB_NAME', 'zad' );

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
define( 'AUTH_KEY',         '[cy=3i= %f:6zQ;9B:Q,GeU54]WMVhZ&m@xBGY+ll(p{qsN^qFPZ;4tsweq6K*1`' );
define( 'SECURE_AUTH_KEY',  '|M?YEtsvUIcnQ)|wlSz_*$L5jlez6G9HvoUO.fo9S`<x]ty5-luE(O6Cq@yH[}_8' );
define( 'LOGGED_IN_KEY',    ']~:ev^{~B2P4y7K7!x.B:{6>SC{KJ},P%|wNQ7%:Tc)S/_vqkja= G1-CAO=JHEu' );
define( 'NONCE_KEY',        'GJ?pM%mOx&8`~xTki.t}!IQ~l!#k:Q?CM7*aI(*n`P7K3~U=bhd<#>dyy,tSZ5])' );
define( 'AUTH_SALT',        'u4X:t$(i4FI{SWUK/Vvspu8Y#XwIWX<i{A~FjSA$,GUrdUSrmZ=N@!gNNLwz;Xck' );
define( 'SECURE_AUTH_SALT', '{s31OL.OFEz9Dceb|y[i!>>bG$>q+=~T{I$75p#Z 5VAc)uF?QkCgd$K0r_l=/,^' );
define( 'LOGGED_IN_SALT',   '1;ppUp5Y?wR.n|Hly3JXsL)25wh291=!kP&QnHy)boW=]TJu<_[ehH0Q=gl[ND-j' );
define( 'NONCE_SALT',       'II1rAmE/dHG}ZY8,+oxgDB^Z>(4nB;$;M%9#/ApO=N8}(E],-th#;+{`HL4`M56[' );

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
