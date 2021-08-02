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
define( 'DB_NAME', 'wp_local_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'F5K?uihr!4S>B`8T+O]j#jaQHT|`1G$L~rme}*,T.%o>-O2O$eNz4Ne+mc20c]J.' );
define( 'SECURE_AUTH_KEY',  'FnT^!:`D]>CP.P%tOF19tX`/{{=w6Q*z}a}joOl87CRKq9Zsex>Dvu6,2L/&:pfY' );
define( 'LOGGED_IN_KEY',    'l1<eH?!,^H?cAz?a)$35IIK%laxapk)aA%gO5LVxW z%(xJ|HGlzH_{z[{Z+IxrO' );
define( 'NONCE_KEY',        'S!$nDh&=z,zd*)Mydd`=@ &o?b]}m5!c|%/Y>X4di7/_@3|-vzN2kw~ulTGbh9-4' );
define( 'AUTH_SALT',        'XIxCYNjO)KK0}dh=yy6j)Ro{B}W|)CoVLI5ljt&0QFEd5=Dg5vg-ruW?%4q-xHuR' );
define( 'SECURE_AUTH_SALT', 'XVV~6iSil9cX^,Eb/X3A8ntlRbU*W&.J %Ng&0dxDuQbG^K#El,B&5BY>?/lUA?0' );
define( 'LOGGED_IN_SALT',   'K{G/04$1z>;~!#b~vHk-p`~@9JK-]BAruL|H;Jxeb:<qTXt&A(i0n`-3S*mvV?~E' );
define( 'NONCE_SALT',       'R#nnW ,iPtGlF<*P<L{/$}:-M&)0dG-,ut{``h`g}!Mjw_Ws(e3Y@2h:1GvAB$Xa' );

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
