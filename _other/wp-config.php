<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecvet_step');

/** MySQL database username */
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', 'd3v');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G.+G@&kWh <OM[y(j[Fz|&<1v`3haYNm9d*Qy0;,c,M]sslS|CJAh;B+?jeV,/_3');
define('SECURE_AUTH_KEY',  '-RiZV_,BkV(8;z|z>g?eZt]tP- QM[5|B&^<v{EXA=&GSzh>5DnavX|P-=Of8q@V');
define('LOGGED_IN_KEY',    'XdKwWb++jQnd8y|Y?.NC2W;,$&~D{zV/mpD6ChDyP;PJ8|=+n$zoyTsFBbZ9R3j:');
define('NONCE_KEY',        'XOcL3/njCy41Y/hQBlF~Eh&Q*D?~b1$+#--|r8E$mC& 9Y(++[Uu+@ [M5a$5Z~/');
define('AUTH_SALT',        'pM+-z<5:@m(Gpy#yXNai-ywORnHl,8,(M,uN*Iqn(q3,RbnX6m<-)0`qP^wNN:9r');
define('SECURE_AUTH_SALT', '?q]>,{U*+Gl_ER[vrRI|&E2ps@S;w8`DHQ(K pkaGEQ9d[EQrOhl!API:x#%V^BP');
define('LOGGED_IN_SALT',   '0_.&k0x]WU#,ar$j(RM-KTJvX|^j.}%Q]-0*xSBF?~ =W![.bHZC+%L}uE8iW$g*');
define('NONCE_SALT',       'RjD?{P4<o|>o@LGZ~X/S;(XJAS<yda(owdR9oOY6:,X{935b*Yj8+z&vA<8Y[wa?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
