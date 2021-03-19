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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordPressEvertec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'otQN3MqdFpoMqL7wFg8jYOFmbcdeRrTqyxfUTJi6en9pu5leyI4LVlsnYg3hOFPH' );
define( 'SECURE_AUTH_KEY',  'M74LWevNg21Qa1vdjCD09UMzDQH12KEalu7OW8eZAjHTmNKCZhkX3eWFVOf36bTL' );
define( 'LOGGED_IN_KEY',    'MMaT4VtReLTKED7py5uyxwQv6PNQJDocaBvwgfRrUY1vdkDzbEPqdL0HWa3k92ki' );
define( 'NONCE_KEY',        'UMDiLdOLp8l3e9C8BazrwCfSbn2ZgkN9DFJi08fnf4pqKV318qVO3K9aWfiMVLjl' );
define( 'AUTH_SALT',        'CIgYE9jsyiS4GAm3KACY0rfEjniyXGe8ysDlaU7uDAaBLhcAWuGKhgvZl7Ir5veG' );
define( 'SECURE_AUTH_SALT', '7oqovfUp2SeYnuWzaauLr8YPAM6BY6keMoBj4bNC53Y5dLgacNFyjP6GTMCSnkPK' );
define( 'LOGGED_IN_SALT',   '8IkhT4OF8CO5O9XFEFtETCxW4T91dr0Sf8zzkuWEDZhx5JgCoIqD2apJsES1kzmA' );
define( 'NONCE_SALT',       'wzpWKCO8tChfVdkntNahtpgC5rB2vUa9YsVBaACWQlFxcUd5WplyakBoyXy9xQ4b' );

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
