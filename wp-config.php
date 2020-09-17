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
define('AUTH_KEY',         'Ljgd3lVPd+Nn8aMeQu2ORWIU2tbgZJiYGtQTMp/Qp+44YO0133b3ViL0sA0KU6wyigx6wLJ0nRBuPYT+ljGgZA==');
define('SECURE_AUTH_KEY',  '9czwS/vt91qAVF+UHBhA15ov+W8GN9vJkhjcUibGAuWuhhbOTHOTu0jEJdzcxOPu/EdZswoOjpc1F4VVyq1rnA==');
define('LOGGED_IN_KEY',    'h1LSJMoJe2IJEfkgYLAGXeUL61yDSzS9v/V1t2qQyzCljV5r6wrvAQOWB1HaGymDQ9XBo0azie0YDJXFgd54bw==');
define('NONCE_KEY',        'mPRGOlAcxTLBokhX0r2B/yzO4Ya853CUCrwSA0wKsczX8ZlWO+WV362hAvAPU6TPHQSFBiY0uQOIvArACDXt0A==');
define('AUTH_SALT',        'esIft8pkFoe4LkXANoXx6UpHiDI08F0ke17eZSK9jYlhKJQQeqJWA3X3ggknBnXP+5RgG2oo0HEvR9Xns7Irtw==');
define('SECURE_AUTH_SALT', 'GfYQ/2vRraw8zTuuWlHO7PoL9+5ZX4ZK8+aoZiXS40wAeQWHN5qrd/p1Yg5RZ+W7uZzcBWOMDRCzxjTdeU81qQ==');
define('LOGGED_IN_SALT',   'jStEcb555C+fn8Y1L30W1/W4N1XBqHdfVVzj8wHMR4TDLLa1C/P37aP4ZjzgDfRl2gC5FHGvdTsDt9yJVT6eEw==');
define('NONCE_SALT',       'sCzgV3JYJ98ggCcPDPuwKnebPtXR0K7pQ4GDSYRcU1UWjpO3eaa2Oq+LgD0DviIdI5IG/ee8dVWuVRy8vI0txg==');

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
