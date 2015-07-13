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
define('DB_NAME', 'quietpoi_xina');

/** MySQL database username */
define('DB_USER', 'quietpoi_xina');

/** MySQL database password */
define('DB_PASSWORD', 'sushi&oysterbar');

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
define('AUTH_KEY',         '-*&|rncs68@yn`zk3v!ITL,2S=|xId|%1(oimhN+~TjVf1>[3U?>rr&1sTw G)@h');
define('SECURE_AUTH_KEY',  '4-nDLlC7?UJ$LI1M0|Li5 ^xdr^4O~2@HmJ$qh+g;Rw?,*[FV{a/(``i*+9uGfgT');
define('LOGGED_IN_KEY',    '?.A{F*?C3(D@JFLC)Zz.vl2@Gv;bGcKnE!@uP? -z`L,xeVMjh5+Eu+_]<c;>a+|');
define('NONCE_KEY',        'x4,)-0J=Kbg|C18;FI@Xk9*E_?rEmYA1a4y}zij&,)YGaF)4,H.BvqsBVYX7u_Rg');
define('AUTH_SALT',        'G38T2]-kqJ-#z<_D|&+%[0KZ$<:T{&]:rxVy-UQ1wBkRAs9|!5[fYs81D(I@B}-n');
define('SECURE_AUTH_SALT', 'E8u/$94,Rk&Swy6D!O}{{Y.gsR}xpSLu_Q6h@T#VqH.G-HX|uqtgj<.S@Yy2(`6s');
define('LOGGED_IN_SALT',   'wxr:If/@Z_xL|%CT{x9#oXu.$P6K=|3CSxiehpm8jU([1530q30z; k-$OIP}Z20');
define('NONCE_SALT',       'xY<-m<qng:*Pbvfod&Xz_dU~EH+_,APBR@Fz.|YAh6PW4|4>-%2z[<k.$Sw~U))K');

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
