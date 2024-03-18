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
define( 'AUTH_KEY',          'rAOhPn!7waE ~-Z)<+~~Ry13o)m]?0S GDc=$fPE&{/z3cjd$&@S!:]n%gf<Cw{S' );
define( 'SECURE_AUTH_KEY',   'no-[9}Da8ruzi=^]K&#ln$;n_ljX%U,rjrZk?5.:P`(S.;rJ<b^Jfn^K8yBAxsKW' );
define( 'LOGGED_IN_KEY',     '8S3&H!#RlUc$0CJWUXoc;P_M3cR^#Y)2|PW9/eUJ<uW^iyPS6JdCs9s@#FOFShz_' );
define( 'NONCE_KEY',         ',{ qqU~osi{xU|4ir&~8k_Vkj CdPY9pq!AS){:~{9T}eEwVS^i,<j<5ZZMA4g?F' );
define( 'AUTH_SALT',         '|c8{l`2WOLqrVRR% (p^(QBl;r}%a.@y<D]@fc>i9~f~(Iya)B/&EEj5{<d85Q[(' );
define( 'SECURE_AUTH_SALT',  'nyr0-Rb3NH{2}{Ji_r-5* &FIdE(v4YVXp&cM{n5+dvf5FInX A4gJ[+C$:D}oQL' );
define( 'LOGGED_IN_SALT',    '8[%GFoj^tyWG8X&TE5,J5wVFD//.9fez?3_qUrc&)SMQb=Z37vPO(RPHx{aOxDd%' );
define( 'NONCE_SALT',        '}^^%5UkXaCS{ghfxB%Q?fn=iR3Yps*V2<l5FBSz0f8~pscdm.h2[qrd%Kj<)XcAz' );
define( 'WP_CACHE_KEY_SALT', 'H$%jA_O+T#g@`BK{AcY920Qh.FCY7-]q>ve>2sjr[8X,Bwiq(q0ld<1?cDE,agH=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define('ALLOW_UNFILTERED_UPLOADS', true);


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
