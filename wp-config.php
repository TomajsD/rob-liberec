<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'd213118_rqs992' );

/** MySQL database username */
define( 'DB_USER', 'a213118_rqs992' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UsD9hXVV' );

/** MySQL hostname */
define( 'DB_HOST', 'md38.wedos.net' );

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
define('AUTH_KEY',         'H3CAPSA1sRKiKZNAwA6yi3ip7rbnDG4cxNI8S3HNmAafPtVvnWaW3qihELaZYjnt');
define('SECURE_AUTH_KEY',  '7CdR4maLrFZ3i2uWWTr3xLTjKXlG3RbEg56BnKhHdtlNz7I2gxsyLa8RmM7s9J98');
define('LOGGED_IN_KEY',    'utaNQcgBurLagcUel2vvTdu89vpacG9cRLmJzT7NKYMXPmKJxK7CcWyBXFkA6j5j');
define('NONCE_KEY',        '79sDLj7HBdObkiecbeJGnnIfjQ7CnKFdTKHZpStPAd3c98kzS7E2SJFTrAa60l1g');
define('AUTH_SALT',        '7seTfUE4EcG0np7EJmN5zRwOFRBA7zYFr2EtcjdMzAfJ9VGGdizxXsEFjPm9uLeX');
define('SECURE_AUTH_SALT', 'zn0MxVsb93Kz3WiE1ZfJL2T4dTGvgFVEaDjIrT6BlreenQroOPekWTGkSH9CY8U9');
define('LOGGED_IN_SALT',   'uUJcIKyRXV0gbzYkfOuqprqLxPt6ESkorTcM6qUx4A5RXOT0yFzyxGeXp67BOw5g');
define('NONCE_SALT',       'dxQravJI8lZowhcYurbqEvxGdIxxwwUfXlnOZWnHEUI1pkdIURqQA0W6K4s9Wayl');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ukf7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
