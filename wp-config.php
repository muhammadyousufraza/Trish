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
define( 'AUTH_KEY',          'D(0~@XLbYoD7:w~*O,kH~{9QD>}XhFA(A0l^U!BL1[[wgdc91;{(]p;Mg^w)G(@U' );
define( 'SECURE_AUTH_KEY',   'v1Mr@mz{,IWb-J}?2m_i4ryt)h(7$^{?1!F`ZTYzue0[f7-aGDb5>NjQO4<SO5~;' );
define( 'LOGGED_IN_KEY',     ']7T=s]MxO9+akNz=_9NgB{b53-i:~0jH:qO+C4XW(F3]mC,9^=UJCp81xFSBb,1i' );
define( 'NONCE_KEY',         'GlU>*d2<qx3*FkB}aQHWTzjmL(p[85xfc<IETPhN,P4Z0oakp42zas|lns+f`: B' );
define( 'AUTH_SALT',         '<`C]fjMSI=`Stu)d|O*g9SBD~,^2r?<@sQpD@3dxX*g/s;F`PKU%(3#%39u>qp$t' );
define( 'SECURE_AUTH_SALT',  'Q*j?tL.88T&jU}|c,jE3_6fy>RK6qX=oW&4`:(?E i!):1t0>#bd-9HbbC35(37_' );
define( 'LOGGED_IN_SALT',    '!N>-Et$z+&`RD(e=PM[vfS|ni>>L@|{%Fki49KIL0O!~yf]g`hnp<3=Thgeb_$%<' );
define( 'NONCE_SALT',        '`[B,UiIb,XNU&vmWqMf>r6&(nT<.q9+wSKuCEZYA!MVr%=9F=S;=p4ZM6|6IfQSc' );
define( 'WP_CACHE_KEY_SALT', '6yze&,5@TM6)+_5xJq<@yQtVf~=17gzvfHIdt$9tJaS0Ggs:;HVVmZY0Z2&?.j-`' );


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
