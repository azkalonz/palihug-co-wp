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
define( 'DB_NAME', 'palihug_wp' );

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
define( 'AUTH_KEY',         '~^<j3(Y!btj_CKoaTJJ6;&l92Lt;YMa`8^;JH(DG7=0Lz;J}kXA-|_EtT@|(MNjF' );
define( 'SECURE_AUTH_KEY',  'g#UA1{ZE_rp1zcC:z_@@^_f|;Z(h3@A) T99HUctV<O?4Lq}xSj~kA!y5&+y|<B>' );
define( 'LOGGED_IN_KEY',    '<`U08_1.E PRiMkQb?W5fN&HNSW+|c3A_,C,-:!sA3Lfa*BMzvEkBm(Aj,_-JPp%' );
define( 'NONCE_KEY',        '7.SZm`skMF78HPn*q.[wE^9$eZRXP%v!ca Rp]pBk2S#9/0Nz@#i~bxOn6CPG*3`' );
define( 'AUTH_SALT',        'uI}xIa[!(BoX#y)#ne:^@*|b];X~;rJAc]!K+aErT_nVLy_J!?Y:6+;QAn|dw{Y2' );
define( 'SECURE_AUTH_SALT', '/^mL2j-qg%EKg]Tp=(nQgtw+3Z=*a= nhSxs(J%<Pr#.luKd:PB{sN[!}Puq*oH.' );
define( 'LOGGED_IN_SALT',   'J3ipN_Fu&kETyYxtgQd.}FH^)hmqlJW<`|`?ecc+sw!~&}F(-.8-AG=aTN[jKfh$' );
define( 'NONCE_SALT',       '+<[CyN>n`:2DP>^e32x::[gzqzN^H>7_w5(hGZ)nK{ NNY#+>rH&6Z 6<x}KNhZc' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
