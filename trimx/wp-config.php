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
define( 'DB_NAME', 'trimx_db' );

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
define( 'AUTH_KEY',         '03P.vRL<<i:P_nX*IKk7)$}D#%69K7*;?tya{H>aYSEQ?yl>Bi>9SPf86bym9+&p' );
define( 'SECURE_AUTH_KEY',  'vJNA9)V#+`>=oV{9X(g|jakL=@V^&NLjEqv!,!APWxC6-[Wy;_)@v}hxz{|h)b&%' );
define( 'LOGGED_IN_KEY',    'T6L],t^BU>O5?`D^O@VN,dui_o=(kyD3A:(aF9(e~@Tz4muW[3EYUZ[me:/nvh2q' );
define( 'NONCE_KEY',        'Tw+RP>E`=pxD52m$*#qqlbj<5p`DjD5-PUY2E8N98T+Iqh&Gj~uC9Jsg+qw*f<6i' );
define( 'AUTH_SALT',        'g$^E9S0lo@%$ [_RVqY<o$]2ISk)jKv`3c~22t)QyZ$jwdq}}y3v>J+e%U/m#gai' );
define( 'SECURE_AUTH_SALT', 'Q&$R&3M5 thr2t.<@B12wPpCx7{o{oZSDU$~+2z|fs_MP{mg-fId&VxBVGC+B_ls' );
define( 'LOGGED_IN_SALT',   'NC-Rh}#[33O@UbuYSvIewN9A1fb1&.=WEo8z,)I%,oq%!*J7$=)&IgnB=]0Qy,+>' );
define( 'NONCE_SALT',       '|9j}pL[$R*kF@k1DO~}HL53O[EP*KKDL!(j`-~v.`rcI@OHu)8ri;rfImxKJB%sO' );

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
