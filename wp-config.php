<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'linkgroupme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'r+#MrMU&F1@Mwb^AJdY)X<tHfR;oz:O&oT.&7}O/wtTx-3uxb&m9vT|uq(?.4D8-' );
define( 'SECURE_AUTH_KEY',  'Q43kFQ{2:.v{uMP[MC:lJMMs+hai4uK+>rJ&h27M2+J2O^F 4Vl`9X~)bt1ESVG#' );
define( 'LOGGED_IN_KEY',    'vxi&vmm]7F)5-SO*&]H$.Hf)!c9&2k/@]e^&Mm_,v#DnF..f8{@%o%XGn Exmt+X' );
define( 'NONCE_KEY',        '`:=/N_Nrsb*R~~h*R87CoPHsX>0$7YZJ/K:hBfXM`?o_g$O_W-O#7!]Tat~kT!h|' );
define( 'AUTH_SALT',        '*R:=0~Un],-^:$@:>63I:[*VlI_%!/C1Z+VK*1iATVePl@7*jlbd:B[EjMH<w0mU' );
define( 'SECURE_AUTH_SALT', 'os!BL%gfBU(Bf;g=>XZ,=uBF{~zdBmqtFfJnl>6>cf>+I(7p4c37&sd{wGdknlLi' );
define( 'LOGGED_IN_SALT',   'n~>oZBI}RFo,rx_ttAqC0$HOWg:`Zxq.[i%=7Vh~K9-NZ|G0S<Y}3kus3Y&FTC(j' );
define( 'NONCE_SALT',       'ST~kOaWw!ZLe1E$/d4VGw4ey<skwVn=;X3*6~~uw%_l,J%|_cNUJNM,|LK#5c7l{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
