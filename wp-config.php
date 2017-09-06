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
define('DB_NAME', 'pf-finans');

/** MySQL database username */
define('DB_USER', 'pf-finans');

/** MySQL database password */
define('DB_PASSWORD', 'mlMxpbkRGGKC7UmC');

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
define('AUTH_KEY',         'ghw9ag3rzyyxchhpiuq3bot6uqbsdckiln1isurcsb90nzemudeaahmzo6oatvyh');
define('SECURE_AUTH_KEY',  'okppfltbiutwya8fwydaoukz25uswfekhfenebndydlntjzcbbpc2l2vjgaopyr8');
define('LOGGED_IN_KEY',    'siy2efhdhheliah1x089fq9kokrcectheeudnuedbqjv1gn6frycmakqik0ek1bt');
define('NONCE_KEY',        'yxanfnwot5iyobf8bvawritm6kjrv7kgu0zmgmqsfl88ttz7pr3qervxgfxc0uod');
define('AUTH_SALT',        'n91to56fjjebafp9v7zeh7awmstg0pifwicldkg4uxnz2i0vzzesqz2xdezj3mj2');
define('SECURE_AUTH_SALT', 'xgey0st6fvhainfpr8bdmk7eubbugedbqnrakkojsasyq6hfij9swblk998rbwux');
define('LOGGED_IN_SALT',   'yrvbvu0g6szteoo2njzjaortrrnou6fft7qdcmtdri7ri52sjwxeg7tymqc5afkj');
define('NONCE_SALT',       'c77uwr4kk0pej7hlensjqzmtorfbmfjfdal1kqqjtmsj97yfazkffoqrwwwyadfk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppf_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
