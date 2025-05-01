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
define( 'AUTH_KEY',          ' {V$U3.kFeXHWvVR mc]bLJ]eiPZO3k[kF5~!^&:.B09!+a/b684y>(UI{B0eU3z' );
define( 'SECURE_AUTH_KEY',   'UdnLOPc5bNu[o3w$cw(&4&3Mhc1,TlD;;>04+765#rOT bgW-69`N@q#AR>l={&D' );
define( 'LOGGED_IN_KEY',     '#^<,(E%<Q|MrfPSqum0Kz*&d*W%&U7sPR/{Xv(224/<qt{f_bg_7b!+A72sgk0_9' );
define( 'NONCE_KEY',         'XpKP8fE3_aTnG5tJL#t!LjCM^=RXq]>w;,UFqFRTHR{5`%<=t! #}+8r+qML)`KF' );
define( 'AUTH_SALT',         '^8+kWE,~RNtLVba?{Q_?.1]DGkzu71JPHN39dmq+8uPYEQoeD{4r~+lRlFi$+@R-' );
define( 'SECURE_AUTH_SALT',  'w~`5SY%GW6@h+Rgt4VnKuDjpWI9xe[j6E^b+}]twNtbOK4N-+5WW`8Iq+kgr4)mx' );
define( 'LOGGED_IN_SALT',    ';mev.Zskn^1=TuK6G(xiIF0F*XPTqbzcimKh3_LY[sA%(6!-3RmMxGU26nX!RI^-' );
define( 'NONCE_SALT',        '?UG}7w*XmE>]GS1{!2d@i%-l~WlQ#8&&C;+_D_?<]aaWizTr`(q<t,Ce!cqqu%HF' );
define( 'WP_CACHE_KEY_SALT', '8`*_en?z5T{y}z`XJyU6k)e(aP}hM0mhDV%;9m}d+dP2G@nUu`p8UKs`9;W`o/F=' );


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
