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
define('AUTH_KEY',         'hVIbgblcXeQzFu3KOFaxMIoLr87xI7NO9qrraLxP4N1OQRfBO51T+4skUB7zMVi6WF/HSk/EhP+606UAMfyYHg==');
define('SECURE_AUTH_KEY',  '5Do9lIACzpPOM/yPxsnrnJ+tSQiDz1VgQ+lRP7EYdruaxgpWc+imesxwe7IKqwjZBelmB0ejsSOgTnvGumpmjA==');
define('LOGGED_IN_KEY',    '4ijgXbwP+rhD7qk+z0dZVBeO4KfCRI6sO7eMg+bNV7+Cp5mL1hmKSdd+RK9jszorcQUBv3+Vhuqw75IftxGiUw==');
define('NONCE_KEY',        'M6DYxoRL6m/yUaMPdhhQCogS7UGNMe7XpyFJhmdjHufHljh4VouhsJ+Z9FZr9WYZVz9K7tXwDcEBdKvL85zaeg==');
define('AUTH_SALT',        'zp03s3SlwoQGaSsjCszqzbZgAp9BSbZdBZRgsQoe/GUacJB3l7xC2VGRzJPb+tTmmm+3a5U5wszPLuovYGfDSQ==');
define('SECURE_AUTH_SALT', 'j0paQvmcJrbpLB+b7RZt+wqrOAFmElB+Cyd9xzDCxHrihXglu9LtrlON/zqcSdWe5GbYEYoPoncExRndd4DzcA==');
define('LOGGED_IN_SALT',   'og170ixrDnYkJtFJiIE1LGHg3y9iQdCg0KElMiSOLyPzD3EKRzCyHImZ3edSAzR3lQXSxo7zBlp7Gxdnw1gXLw==');
define('NONCE_SALT',       'jfhDU14HU0TuzknPK4i2ysPFifyXtJ0I+yT8poXiFr8uVpNwIg4U74KOlt6BknH8NMg2NXNbcOw4VrYVfwMR+A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
