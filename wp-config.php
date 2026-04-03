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
define( 'AUTH_KEY',          '/L7i?uoAHE?G9!M;dVlzFX 6pK%jv`fI#c(8(q+D*;{X+9c:XO]L!Cs^U{y3w8&W' );
define( 'SECURE_AUTH_KEY',   '1:0BCo1sJ4OpWiaEH9_1}`f<;)s/U~Ix@%lnn+,J^RHi+(u1URzj6(-Vwok)hRGB' );
define( 'LOGGED_IN_KEY',     '30DZ_>POoI%)dP{%;o<%RQK.^&*%(,F@k9!C7Ml5G`zTIw8*IxWz[@EFYFpq7Y99' );
define( 'NONCE_KEY',         ':,0`hj~b0knEp]~y;^L:_EIu~w=]fy]@!/P[/A!+piE*% 7`ksE^Pz_aHZC4#@Gs' );
define( 'AUTH_SALT',         'Zz__84w29E@u-RAV,:b4//o.<*l>EMBJ||3Y*y=|]!CY>|SPsTYP^/MdTZ4ss1ro' );
define( 'SECURE_AUTH_SALT',  'Ft1jKKBc>jw<[Mqa7GtjbOloyc$l%>R-z$,WhP`sd`,E5(Tv4hwGvDdug rESMRq' );
define( 'LOGGED_IN_SALT',    'X14v.WwKHUOkPr+Ho^6/`Zr9Ss1^bM+ws!Ui+_+Yi:w1t%f8!qZ1SNR8]elaWVQN' );
define( 'NONCE_SALT',        '62m#ZgnBWa5{y`&<CkjQwPh2nmLkg*j=4a;L_2&6@LHgTja=`l[{Qzk`rcKzgnGr' );
define( 'WP_CACHE_KEY_SALT', 't#`0U8D0##uIi+1<kj@7tNF5tG:FA0peLJNZ_$78#0wv~~GS=l3@$<Cb}xRUANPb' );


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
