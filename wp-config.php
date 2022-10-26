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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_677' );

/** Database username */
define( 'DB_USER', 'WP677_admin' );

/** Database password */
define( 'DB_PASSWORD', 'cQMaNLYLg3e!fb#5W8nf' );

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
define( 'AUTH_KEY',         'Q].>$QLeW-YZ;Cd[p5F(F*zx9c86n R%yQlI&syAI1;I`K-sqx9-%:SxW2-l@d: ' );
define( 'SECURE_AUTH_KEY',  '[n{:ES<6YAH-2,IB+YH~I)z|iJ||z!t~M`+H5f#=LD><wdkM{Icso4Y-%Typ$2lb' );
define( 'LOGGED_IN_KEY',    'SWwQ!NplaaN?QKbNj`dDdK:g183CEEu60/&]B>43.Geg693-hl2j=@;F[aOx-}J3' );
define( 'NONCE_KEY',        'Aj!dIXfM!yyf8tqewc~ta2@oO-(?9A.T|9S;YYD.4/Kvz,(ITRJzqcF)1diZF?HT' );
define( 'AUTH_SALT',        'cumxF+i#3dBW|-8bKQ}W6.k21W@W+lgN^iN#I_8fO8U|X.jpSwlqA6QVRT9p%Tae' );
define( 'SECURE_AUTH_SALT', 'sD5,bZw{Gt-#LG9is9i6C8;}XKV#`W!B3xZJ=AflXPkl~GQ8:y`~/!S5GGL;KQBk' );
define( 'LOGGED_IN_SALT',   'Ne(Ey7Q>0HD:(y$}`(lf6IuO5W^HgZ%jk19L_3,kq.RHhCE9C}tkKi,Q/.Tv:R:k' );
define( 'NONCE_SALT',       '=b*`|Keloz*X_M2f/D0tq%7AuhW(<eyH<LG`j@hYgko/58Fo7Mv#b6wgR2]C$21<' );

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
