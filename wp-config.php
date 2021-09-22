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
define( 'DB_NAME', 'aicoinc_db' );

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
define( 'AUTH_KEY',         '&0~A]TTt@y=MtETl|S[K:|W6 uP4!f#e8<pHsyD?nZX}yS}Ycrfq-&0#DE@9,K,P' );
define( 'SECURE_AUTH_KEY',  'Qgw)4UcIdtijjuKS`AzF$~h!8x|lRdMq&,Gw%y=r2Z0A2-8eg6.QEBb7fY,  D.x' );
define( 'LOGGED_IN_KEY',    '$$Wfv?Z.VA+fMA6*DDrTH<,P21a*8Z]*](Q6L2jh-g-yu6E4d#8Ep6!I#a+jU/~c' );
define( 'NONCE_KEY',        '`H,S=a(5(`N+/d7fT)d9dyJzm:JP-#pH*!WDcuAIItKUvfDcWmPMnhBj1{C>DFjk' );
define( 'AUTH_SALT',        'y^&YQ;vqih9P-C=G@6.0103P)Cr#=s[/il]II cVW+zyXt/+~Cd24}&Ip&?sOa`n' );
define( 'SECURE_AUTH_SALT', 'Mp:0ZuQ/;-!Xl@2p::FGwssmIX-%D5`V!RE:B!K9q;m8a8*hORbH|/#Oc!fkr(W[' );
define( 'LOGGED_IN_SALT',   '~ARyj3?4*BzG_h<Tlway|mrZ/|XGv.C;gD/C-<MtWx1+5X5fIY<{sWKODj-}`9(I' );
define( 'NONCE_SALT',       'HjUlx5w$T.*7]]4}T5DY1lC=z2g]irIp4o2_wd;Ma=-mqC8)nj[(EK~.E_z-y9z$' );

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
