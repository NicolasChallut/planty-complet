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
define( 'AUTH_KEY',          '#6:-;xp#C@o#>X-2^G6(G@+>qywCsFLYldm?`n^i;.A5V~5Qm^`trPn:u?~xe^JM' );
define( 'SECURE_AUTH_KEY',   'TFg;`IP*bY)6n~`s_=!3G{Lf%kF5#WN^ +M;8Ee3Ew:N^ 1CV*DK/$B6:z6.>55E' );
define( 'LOGGED_IN_KEY',     'j8NKw70*6Im%n$.(f}jv2ASF}!-5@F_?6S+[a{}xUtN50O N!hf{:kE.M&$;bDUY' );
define( 'NONCE_KEY',         'Ly,x}8rFRA?R*fUJ{&*$N]un|<x!`q&nxvKwuTQwyl7Nzi9PWRX~J>_9X#9RCs[]' );
define( 'AUTH_SALT',         'HIqw&R?z $P,CjQ|QEg.H<(VhR#AEL4/Q>VNjFavOIn0fr(`h,-cuMJn76@_oMD&' );
define( 'SECURE_AUTH_SALT',  'JP3mXuN]6=y<Vc_4ML1& Oa6R8V$sgfOX04qeDH@quL=)^ +C?Zkf_81j}-56*0f' );
define( 'LOGGED_IN_SALT',    'uIGF+#G(K|mr|ZQ#Ry#tTj$j& J237]u+BD`5=?},^3Vp3d^(#P SN$<OTLsGNkI' );
define( 'NONCE_SALT',        't6B-/-]M;k4J}cE<TyA3YBC,%#X*~TZEkE2>*<8c8B}lQDN{7OSCkDoBp1j~SW,h' );
define( 'WP_CACHE_KEY_SALT', '+f?MAFww-hIsf($b<ye2V{tEG,U/fZ_EP$qg h{G|.qclbr2hE&Rw=2aA*K+CY]u' );


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
