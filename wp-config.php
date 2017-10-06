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
define('DB_NAME', 'stephenodipo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'steve18286');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'suF1XMe}%euP_c5uyD+a-hxU_WG5HzXeU}5}JL<0 }kXrv)>*cDLX2-?:$CTW2TU');
define('SECURE_AUTH_KEY',  'ceK0=rj4E;z)X((7z0Q5Cw&mQ9cW_LyghFv#|Pc&_GwrM6y&F=^^dbu7=H,<)o<o');
define('LOGGED_IN_KEY',    '+MT[g{V|-T{8I_vITH//gmi0ZJH/$l|^W2+$D5-0w`Bl %lBwo-ec]TXoHxnr>12');
define('NONCE_KEY',        'HCK6}a;C/%caH}gT_-N#By?s1Yl{n8Ve{4{wUv!ey}[c8cU=?&:p?lI!gGrQC@a,');
define('AUTH_SALT',        ' &I2toRD)x7AQg@Y@jlScE&tQ|2&`*Y%{OK>%8w0:>7tz_yQjQ{sr<ee<S|v:w{G');
define('SECURE_AUTH_SALT', '~9jqzu+Zs4-`FN{ x/hvkAF|DDXc|O,$9tLD=}He;h+[,R(f;*q^{jBt&~9uCU%|');
define('LOGGED_IN_SALT',   'BcD[z@<8zfiFSC6S+WsUAE .6wlkX^n*)BByAR/5Rb@5GI7v9##0ty@aJX2|4BPf');
define('NONCE_SALT',       ' YZ%F=vOVyDZO_,03|qEr@4>]ZO@oDfy+G[/s|6clmCW!&5@txr-s?wCm9)w*yD8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'so_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
