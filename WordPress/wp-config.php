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
define( 'AUTH_KEY',          'V@nVZ;h7)y$jTO_*A;dIuY5*^yMy56LIpCsl^@>huIUF;o+w^.9;6J2FA.ew75i[' );
define( 'SECURE_AUTH_KEY',   'Lrm1vr7:j.Km]rG,]zpS_nI08#gM[)e00XA`x@<XVVo:B>|k56|$T9w~Gi7DcQ0!' );
define( 'LOGGED_IN_KEY',     'CDaAGNeemy~>rMY <yD5~edSN9JBT>+SNmVZpCh4DN@B&u9kJ_{#=`_%)R#@GVJ3' );
define( 'NONCE_KEY',         'V*2$qiHte;`3fQguCCYMF>r>oX`S2y*6k[Uq%t:mz`V(OSRH FWdm?cHCO!wt2v@' );
define( 'AUTH_SALT',         '.Bnq 0L-L_MtUSD9#}~LULH,.tlH/mTpYZ ?LF4DOLP*0D!Ggio^^^U:)Kpk13+d' );
define( 'SECURE_AUTH_SALT',  'VL#,L MvP[7d1=JVZa,L<-k]BN1(DNkd@^;&!!wk4%Ce3E]!UO42^tB^FfeH#DgG' );
define( 'LOGGED_IN_SALT',    '/8t%Mtjx>v(p/rTqr5P`xU_8K,0`@H+)SAX%@O>tf^crZh2*A9bJP80]8gj<h0(o' );
define( 'NONCE_SALT',        'VR-q?ls<;p;7=q%A<Jh731Lm0z4j.?YyE~E00ma2M{6R?l{Bb|a9D}0J;%P E%Bv' );
define( 'WP_CACHE_KEY_SALT', 'IM9b-<-<xY=>)G1Wfr?#pAG>e9S6AQ #KU&@_Csh?yunrJPG_?8EK!,:$4^&92~Z' );


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
