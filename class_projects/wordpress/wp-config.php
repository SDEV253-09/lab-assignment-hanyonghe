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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

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
define( 'AUTH_KEY',         '.OZ3jUbt>h#K9j_C($=Wu^o,5r`Vl@F4]`s_#l(yTdxEjJ*4s2PZ>~51t/,V)4Cl' );
define( 'SECURE_AUTH_KEY',  '4nOY;vM<]W$Tsv+6d EL=]@|+rTvYOt{9DYumNxKtRjI2O0_{M.Yhux2dRy;73g%' );
define( 'LOGGED_IN_KEY',    'Qn[;.OwuZ~`.:-8-}VfGo5M}cjZ|G?vH9-fl;`28A?.;?,HfXtI{6/TFPX[X@sB|' );
define( 'NONCE_KEY',        '*[wKr-1b5yo%v|s$et{:D%SGk~.Iz=}3/!Ccb$H4^HtQ/ceO5 K.:(8d?>0ziQ6(' );
define( 'AUTH_SALT',        'Et.$<Ul&][IcK)[~!en#z>1R(x#?-{<_E|^zkco||`Ycs?H|}uAA8MJ5y9arm{yr' );
define( 'SECURE_AUTH_SALT', 'f${D.~)^Oa;3P|-BP{l368ze<n]lu|BxUW1qaM{5H8O`1O[cl;k=uUdO-o*Sor-R' );
define( 'LOGGED_IN_SALT',   '0XZS&qdYq2NZUQ1v|)e20AV~GQ$L(%FxIq?Vz9I$2<Xv]AgO<DI=o^2`y<}C1U9.' );
define( 'NONCE_SALT',       'eAj%NZGp#&@<#4sCL(?jcf;JN8}cOnUu]ov-XW!FR;uvN<{)#LS3=L~4Mbxf&1y^' );

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
