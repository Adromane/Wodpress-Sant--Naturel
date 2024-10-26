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
define( 'AUTH_KEY',          'K8F*GYv4eAT%<*m>3hzmTb(A@2ON!wbSxJG=n`0S/?Gh)~{8GCVTM1YE-)W4E0>&' );
define( 'SECURE_AUTH_KEY',   '&-jp14zEKQp>4)OM/Qh(/tYAbws&Zj/va,*bCsgj;*mY1] r<_uP?U}}0(Qe@{I_' );
define( 'LOGGED_IN_KEY',     'vf3?U<{HDqlApUVBkiajp.iC(uJ7jI>Ky.1e#).`(dZ1M48^u(BH%?zfltok/UP0' );
define( 'NONCE_KEY',         '+wf2ENaippXWX-y]q@1*98$dKCcZN%!G8wSG^n{AKez=C4i, }+,1Zr3/=(t`zvB' );
define( 'AUTH_SALT',         '+x0d~oN/>r&C2SeOT7ZO1%^=gyb8&>jhYL83_WIBwiOaU i]8u|*0-Dh|OUqo7k{' );
define( 'SECURE_AUTH_SALT',  '$UvxSd6q5SBw;tKBsw3Fm5v5Kb{9nl4t4sF; wrQkM8`GEZH@!&Cr&PzddHJtB|4' );
define( 'LOGGED_IN_SALT',    'aW:+_X.1K4OS!,)sVN]=SI$7lGB3^:TK^jm=_N$>ta_ y0j0P3N4I2uKIsG*nlC3' );
define( 'NONCE_SALT',        'WjzZY%V9ChiKAS-|0ip!FNu[`UK,ooS:ivM(q[Y%0v10S}yZlJ[t%nN$jF8]IAM{' );
define( 'WP_CACHE_KEY_SALT', '%,8n|0<0mSK_)g6i40nfqV2Bt^7$NY$2mv5~b+n8/f,(uK])%}+%`y<oX12rN.@M' );


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
