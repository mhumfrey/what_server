<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'omni_db' );

/** MySQL database username */
define( 'DB_USER', 'tech-priest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'omni999' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iEU.:5?UN.d<UA?.$OGJs^Q-3>]o-|U1X_]>,4I,1h<HNxx-hhThe)kYZwjzndv+');
define('SECURE_AUTH_KEY',  'Zvb9 NKC0$Yxd-LJsV@gX>*}Pc%PwzFxnUL7o9^H<<-9 Dr}So!sCd64aBQ(2/5.');
define('LOGGED_IN_KEY',    'HsKT-v0QX/Et&_!u]+96GtqY19QZG^Yt+,]*Fk6Yu6fXPOLh{lsn~Wu}GMm$oR-J');
define('NONCE_KEY',        '@n`]NNNpiKtF@0`yX>cIRX@:](<i$M}4dm.Cxw;Ig}.Tj+^BYH=zT)ixH/K#`gPx');
define('AUTH_SALT',        'S`?ifc.!KEx?QR~`@hTiX&r34iOAV3*+zpVrz!]x@lz@wISE]wg<rJN>xZ7t+M-X');
define('SECURE_AUTH_SALT', 'DkgZ8u7|CY#X&|o|ox$V1%EsXva,vJY)Ac.T/H+tf<ZbmQtHFLkC$$8hmY i1f.f');
define('LOGGED_IN_SALT',   'sYeX3KR_km3s1BiG;|uvPB8vHtP+bprC*!9IlSUBl3-b@>OZiXQ0Uu)7uy]o/C{L');
define('NONCE_SALT',       'E[)G2-njLN6%.+!LV#mkUeN--O.WbrtJfnIG4)P*Gb-b|/M2D.c*CMD7`|u/GIAE');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
