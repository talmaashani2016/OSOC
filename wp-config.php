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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'K|wh)CRsC]:ldh3#YL#=*+R)i*|.6[*WWe9$F}8OtA}sz;oEtgw0=cj2_tABxO/[' );
define( 'SECURE_AUTH_KEY',  'Vr+hPX9hPMmxl/}ee-=6)4|J%)I!_wwt*si0xgW1eJ}ZL9WfuQ!=H]-<&6iYI1dn' );
define( 'LOGGED_IN_KEY',    '#o-L<^cpp5 nB9!hbvS]thv9&IHUzF64zI?QR9IBjU}-H>Y!NeZD4t_,4 f-//`X' );
define( 'NONCE_KEY',        '_8V(,g[|XDLA4Sh3f<R$+fQYM66$009-C<zrK|&LAV]:!F*,5ify`dJ%}E3<r2I=' );
define( 'AUTH_SALT',        'k>5fQda7~UUqse-i.m8exc^<`sS(rfhEKD|+N_QWM$kP*k@yV%!SBI/xn2.U[ziN' );
define( 'SECURE_AUTH_SALT', ']^hh.lZUc#Vx1F3vaa{+<}hlmRqeMuw:C#/<v[$,esM3Gl6Q$AL1Wd%U0{CHx%lg' );
define( 'LOGGED_IN_SALT',   'RQsnU=2zqn)G/0xh(2eC>miSqQpN#P00Vc%xwvuQpkA!kUCF)`TO9C-rUY!P><(q' );
define( 'NONCE_SALT',       '#H3N+RG)T:O%zaH|{D#:dc6tb1r`VZf6w%=1yGhaL!RlP[Y&k1hsuyfts1JYmT2B' );

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
