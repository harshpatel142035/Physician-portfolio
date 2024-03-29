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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_36208686_wp385' );

/** Database username */
define( 'DB_USER', '36208686_1' );

/** Database password */
define( 'DB_PASSWORD', 'pTlS!3)C01' );

/** Database hostname */
define( 'DB_HOST', 'sql312.byetcluster.com' );

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
define( 'AUTH_KEY',         'npyvkcurrghzz2hyih4hiwq1ylwsajetk3slhypv3c7dt4lb3siz693a4mwwxvsn' );
define( 'SECURE_AUTH_KEY',  '4us6sfctqqfn3rdxmqqqwp4n80so5vf6krrbdndeqibrhwmzgpnjca3h8okqf3c2' );
define( 'LOGGED_IN_KEY',    'mua384c8mhxa2ot4jnmbbqx17ue4n9cj8gr5ysdwnrvtyru3ziojcnbyqrcu8ddx' );
define( 'NONCE_KEY',        'kunnl8udn2usjwbh7yvy1sl39eyuwstly5orb50kvqujrwtyfa5ryusnzm5nvw6x' );
define( 'AUTH_SALT',        'stgaisi0gfz9w9tdsz3kv37upf1bbhq1dbrloh4x39ltfdzcv55qu0kqfvx7yzlb' );
define( 'SECURE_AUTH_SALT', 'xh255vo5tnjlnikxbnxz3ctniiszt50ocvarynsvg9xtjj2vdh02dwd2l1zylqu1' );
define( 'LOGGED_IN_SALT',   '9gdkytjqnjg2ym5t2upqnf52fdyirvp3utocftkljroy7swfejzk8u9jicudw3gq' );
define( 'NONCE_SALT',       'ywwfunvotqpy57nmq9bikgilkmwfuofgtxnxpgfp1pkowlutzo1p4yw1dwm37p4o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1k_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '1024M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';