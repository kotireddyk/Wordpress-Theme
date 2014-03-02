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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Effort123');

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
define('AUTH_KEY',         'vkeuDO)]t.z^[A@iENHS/jOx0Lj}8lw`8>:@QU]}.Idm(AmRP(GVm!2:-. 3v;O,');
define('SECURE_AUTH_KEY',  '1=)&Mi]OfpkEI3HI-wVmfD)}vD<kf~>wBe??<.4~=LOCmJ:t?W+!?@#22oH@Nk*u');
define('LOGGED_IN_KEY',    '+dH.HXa-{re8x-1K}`h[$TLG#3Hef/,/VlHTyhbh@8x+`o[7kxTGlV)$.LPjWOIe');
define('NONCE_KEY',        '/B5*5*W3Aew+0$8LJW-T>b@dJ|ta_DV@Q>$RL5_e(ST=^Z^x:*.XD.OL?6C;7!$-');
define('AUTH_SALT',        '^5[N|jG$%|+ I&ocr!DO`32Fr)TQ4vM2|yDqXy5WYDu-3i@Z0:UB-9s_ `{|;P<7');
define('SECURE_AUTH_SALT', '%dkv{LA09z}U<|}h>.S?k:IEZ{QY.J+D0@|6k_*t7>W)G4xJ-^Ao=03d1hG#Ce1S');
define('LOGGED_IN_SALT',   '~^[`(|BE6?<QPQ*5XwuyH^,g}}`(r:?0wia8}a<7&ig|NAvDTH3Blh/!@=tjX|qf');
define('NONCE_SALT',       'V,/11ci(]I|[_lJtzGO!Zuk(E=;bQS4IT4MOU{H+b)X^2_/I6ig-Za F{HYD*_XI');

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

