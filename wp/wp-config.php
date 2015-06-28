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
define('DB_NAME', 'xina');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'g||`kF_nVNsxID$4A?-/-l70H!qJaqU 0vsokAM-_y9(^(+|%{}{+Br>)#y2(d&q');
define('SECURE_AUTH_KEY',  'U#5~159)Mn+4|7&sg`c=QW`zx=ufQLSU+,L |!4`w=T:T]MjC4_Q:vv/.E9j(zT?');
define('LOGGED_IN_KEY',    'SZW:zBi<zflbs1[*5BzNGg9@-k,@lv6HIt9$X;;Up`Qj-G4bCd0|.)YhFS26t0Rz');
define('NONCE_KEY',        '?;io@n^ip&R#Fdr&Oc/7[P:CpNB6Kg+?6uRbizS1*`znF[+$r8|h|?RZ{AV:b8 Z');
define('AUTH_SALT',        'jkmUdS8b=-x-?v_8$VstTrSuz;[WcD7[68PgWH#>m8G|o8x-R;M?&~%=/{#]W !Y');
define('SECURE_AUTH_SALT', '2Gk4$eIiv?Z/e}q=s{!IJsD;3F/[o} 1, B<[l1Buzia ,K^qban`ckUlrY3%}dY');
define('LOGGED_IN_SALT',   'w&KPG!I_b?@F49dlVAs2c5RX?z*)(G`bRxSr9e[N=CnnDS~{zWp@pgZ}WD`tNi3/');
define('NONCE_SALT',       'q|M+jJMWHUv7`pR*l3eM/ePaV+>|Q$GqGd:s ;V|&JH]]:[RLx#eBqkAQ-NO4T5^');

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
