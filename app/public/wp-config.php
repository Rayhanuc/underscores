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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZKS2iiiANT9K3C/HlmFJpp2hJdIvq5baGZII62gnAincUr/AyGIdZ439FjgfSoUYBjj0rn5UC0XqiWjce07tWQ==');
define('SECURE_AUTH_KEY',  '6vRA39bwOb+xL8Sz/DBWdM5X22KRbu9HrDvEEng6SedDl0BXgtm5UyyGZ+ehmO+QCLXx6fxBhCagG0BaoPNIDw==');
define('LOGGED_IN_KEY',    'NRv46tDDQVVkEin1Vm+9RmdxTKEnVQuZ1+4KSfCMOAo9lKSfoX7Lij9UcvMSzoU69/+izu67LpBBXVff3AJ7gg==');
define('NONCE_KEY',        'KmZ9CsSf/KgkycPG6Vi85/SKmvyNvnp5sIRPEgPNR/eGeekGMUZuTxum0lQe7iriUNGiiYPinF1hkjlTAw6/mQ==');
define('AUTH_SALT',        'j4gv0KLbWq+NfExOn8ZjAaKJYUTBb8agjAsrXgy32pvjTw3PeOYpD09spakrb1bq1XFXfPIJ0Bt1pXPnoRkOAQ==');
define('SECURE_AUTH_SALT', 'sV16abUU6BrI82G9VLdLWQ/+rvRJtJDcmv/kawg8unoT1yAUB4ZbzFLb8gnx2bFxfz5SOCHsWC2zfhNCJ4xABw==');
define('LOGGED_IN_SALT',   'b5ipQzV/NfeWWdl6R91aFzcuBiZNf6dng4esVnQ+UHaVdBGjT5hsuPfrPXDLNc0TPCRpv2uz3gFgbDzfJh/+OQ==');
define('NONCE_SALT',       'jyEnEzuHJi3CvThZWHO/6CgImc0uMGmHdoasUifcEz/L5ZYBXDcgOO1yJfBvorKhL2gKzwu97wdcJGJ7ZDZujQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
