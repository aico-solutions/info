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
define( 'DB_NAME', 'aico_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qnX6lN)7`zk>,PpKl)G~9p ^gG3HOasakRVLnUjZIwtgk1,2Sj5mpEK{@Eqgg***' );
define( 'SECURE_AUTH_KEY',  '~/IXaHM.B5J,<`gUu{INz*`YqV-Ji&CjynK1#FTgf}C8P[6P{iaX[UG=!_8Nn[Wh' );
define( 'LOGGED_IN_KEY',    'V>i|U.~D|YW~.kW/lt)d=$ r$Nx0HRqF|zv69EyN.=tF^UYov>Y|pexC3.07Jyb/' );
define( 'NONCE_KEY',        'fc9R+.vmgb,}0sKABfVijE[gMt%z.Pua16w<sAluO&C.f^KV^KDQmJfJ*)no+_Ta' );
define( 'AUTH_SALT',        'HeYpPsZM,z<A4lMZ}26Q<DuiyyqtRyBnev)YWl>WJy&7HL+B!jv9VDz}V>;l6qFg' );
define( 'SECURE_AUTH_SALT', ';y,dICJ+&F EkamDBq:>Rj1e d#UN93v$3B&YvO,gXc_/`FXUT=cff+NrH2d2 ;~' );
define( 'LOGGED_IN_SALT',   'HGFP4I3}4&D1Yi5T,ib~0F8}?= }wN?`q]W8<po-Ws2ufbpK=/C4oXv,7?xE8}Fa' );
define( 'NONCE_SALT',       'yC}bK|)%-kx31)S67QUHn~<!tm~vO8l<~DI;Bk!@S;xu_2wM<)%hc&(Rb+m(d+I$' );

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
