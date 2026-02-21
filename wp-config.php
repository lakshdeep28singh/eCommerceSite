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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'LWM#NM &0:vW(0Aoz:lcxtU~dTP:xX;%?Q*_!_%7Mx%^ZIKg@Mimg2nsbU{e=cpB' );
define( 'SECURE_AUTH_KEY',   'Z*V=lo,@kubtUZPdXd/0bl6}4Rs+Qk4s$Zoj6&Z*# 9y-YB_)8TFKUP8D0:9v~y[' );
define( 'LOGGED_IN_KEY',     'j*}1;m6p`3)1h#K&sB o+mH(5*qLmy&`fvHCM:_r@3u{ed%*GhQbav4.`Oy`*$ge' );
define( 'NONCE_KEY',         'rqEx[h$0Ku-3<$Z4RP-mVXGo)qr7`Xp88T0I.v)uHCRy@Vb&-u%!NRGf;EXl2i95' );
define( 'AUTH_SALT',         'ej*Mth$;K|(rMIt-/iox*> hr2]g^@:7UR_sN;TH5vpFEdLMXAfTFNQt|7n6O.3|' );
define( 'SECURE_AUTH_SALT',  'L*m^a@*5sYw1imUYar,hhx6y,GN`OdlqPojxFLMn~iTmbG4<(<h+>l{CNbR&D;)z' );
define( 'LOGGED_IN_SALT',    '%PY>CA%;d<<mTqbpB?]^1&c#cdr|=2*:mm}B=O}al/I;0ddu!%[ipA| ]@a:mvm!' );
define( 'NONCE_SALT',        'S)-6Ea;<j;[9 Qfh^R {3n|A*IM=ZCTV#IxOj]>&%:<~J~-(}zKk ez:B9;xaj0(' );
define( 'WP_CACHE_KEY_SALT', ',|:,/#r8zAg&cq.5#z]uxx6{mJnwOeR^?>{BGOmI3PUE1U]e%wfi+D7FWaORtFh6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
