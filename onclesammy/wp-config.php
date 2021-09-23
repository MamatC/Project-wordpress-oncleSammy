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
define( 'DB_NAME', 'onclesammy' );

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
define( 'AUTH_KEY',         'e4^h(+F_51i&&(ac?v:SEY|;/QYLN4+quSTD8JvDFBCQ]wSg%r#s5Z|Q|1zuqF,g' );
define( 'SECURE_AUTH_KEY',  'hg80(_>]RH,/W:B#.!*#J_=3=pZ-{1qb5WG /}5U;W4[,-7k>@*EbQO!c!RUq|nw' );
define( 'LOGGED_IN_KEY',    '#%k]BADESI]kuO){@tRbG>J_|1w$f=})+e(>;ni/U8wRV~rm:qj<^Ne}QyA_[-p3' );
define( 'NONCE_KEY',        ',l1Q+t(}Ne1 Hfq!@Hwq :a ( ;,V7V~I;ZhFL=xAwJb#$GQ|H-FAhfI5-B6LV|j' );
define( 'AUTH_SALT',        '*4J[sQmcz_{3FM.( #uDn>-P/H84oi[2FT*5*XH=JmNNj,:4l#KmnUrI}scof:0s' );
define( 'SECURE_AUTH_SALT', '80`Kb$S0qi3RJm^LpGYHn<i3?RjA={$ZpO R:9|CdXt28H~J{$Y1h#*EqtQ<Kch:' );
define( 'LOGGED_IN_SALT',   'P^Kr2p=0e1GAX4fq.d|TWMMG|dKYmK_OG}0Adnf}{Ms.RfA1N)8jRyhDtl``9!~1' );
define( 'NONCE_SALT',       ']QXUQfE7,siTai^F%Pe9qE#g73L7(kdpab|Hx#1T.5W=^%bWEacwIvUt7<h;[R6l' );

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
