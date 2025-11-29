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
define( 'DB_NAME', 'd387501_tabor' );

/** Database username */
define( 'DB_USER', 'w387501_tabor' );

/** Database password */
define( 'DB_PASSWORD', 'j9Tu4VgH' );

/** Database hostname */
define( 'DB_HOST',  'http://md395.wedos.net/' );

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
define( 'AUTH_KEY',          'DWH<s_%:lsvR>r#(rg4,HwD?Vl%zdY4]#tL0vLT93YuJkvc11U}loUw0u/U/$0=x' );
define( 'SECURE_AUTH_KEY',   'R;Hzn@t6ZPXdpRyl3hBa#+WypmE{cL]p<OaIo`sA(%[OK{Q*{hkfkI0`>w=H(Q:7' );
define( 'LOGGED_IN_KEY',     'T|JlubMmMSjSA2 Y;|O6uB-{7sD:JJnv%fuanIeZCdh;yJ`-d^ACr!,q(]l-xxCP' );
define( 'NONCE_KEY',         'kuT#5z|FX=CiCn@a8}:{kZ]C&hPCwv^NknAPdM|PT)ngeZA: ]r`gAjJVPxwk@?6' );
define( 'AUTH_SALT',         ')=tNwvI (D~EmE.N<+)lkwvbwOAb{f~)9`*`bQ2G7kEMKecE@3bIcg7pZ:bTvyuO' );
define( 'SECURE_AUTH_SALT',  '.f[Zemt,@ceHFk>HJl0U~u svR$?gUq/Pxdz|o0fDtWm){Mt+G&[s6Py[.`87>EW' );
define( 'LOGGED_IN_SALT',    'lT>HzWx]JvO{?4S;y-[^qJiGv3x,[U!9tY.|3`5L9?3);my:c9 mvANxKbB#+A#)' );
define( 'NONCE_SALT',        'q|Lx+R69~B!RD4eWPc%y.G)>} )JsB=4!<q^G}v$LK%xg#s$F/|=v j^BS9s5t;3' );
define( 'WP_CACHE_KEY_SALT', '0za:/T?v)=Nq|He/,RpS8J[L&H|TS~ B$n9R<wKVk`@p~$Zg?n!{%j_=(}@0J%mb' );


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
