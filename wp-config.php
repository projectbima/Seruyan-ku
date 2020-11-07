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
define( 'DB_NAME', 'sql12375129' );

/** MySQL database username */
define( 'DB_USER', 'sql12375129' );

/** MySQL database password */
define( 'DB_PASSWORD', '56ylNFckDH' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '@[T=Pj*)a@P}M+QHcK<~7fNSN2@8.six?tRRj`bcnkNKDXZ5.vp}WY!FtJP+t)%-' );
define( 'SECURE_AUTH_KEY',  'gy|`f!ez7Tt<aT*lboCB/*|a05Cv?Jd~`4$sZQrQm<K;)h(o.q0AEDWwcI2j8!(8' );
define( 'LOGGED_IN_KEY',    'a44,S)_YRrc7E/m:;w<*3 (%HVJtZpiervo@A5eZ;iu%rc=|/(S5d6^<cB1 w0j&' );
define( 'NONCE_KEY',        '{]H-8BA>Z_5#zh*UA_0tk*i/Nta@.; rbuWjx4T#wcMPt7-#a8C_{|(HB@x^ZYP^' );
define( 'AUTH_SALT',        '(:bH^Hj7`|5|ek3K.j4e.aK:H z_%t&Gj?AZ@4Wf*0EoND&sp&PC@&mZQ0I) UQ0' );
define( 'SECURE_AUTH_SALT', '|>YHD=J;]fls;y``uuEaF#4e6BO/2E#`=cQ wS>{jL4iRw z% fhkLMKA6?Q-_N}' );
define( 'LOGGED_IN_SALT',   'AUsgCkn/L}z^kQrq3Qe&0#C=t@q?>2-+ToWFfY(U/K#w{f-1Zj1|(C;Q%R9sR$lh' );
define( 'NONCE_SALT',       '}g2UTsP_>Cg0b}$h5djW4kmT;I:N2egd+@R.ww.m0D/z<^B.42bO$>j>Xx N%izJ' );

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
