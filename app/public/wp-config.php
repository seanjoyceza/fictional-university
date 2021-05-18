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
define('AUTH_KEY',         'w1lxPSX+hK1Dm892SxrA4TJGu7ZPdSOrbk/czM17uqcpBTbovc/bjS0Q5LTRinTotyR2pgZ5/i4v6+RG8dJ9CA==');
define('SECURE_AUTH_KEY',  'IbM245XnWRTCm7i6Fr7j2m4N+/pd44Qyuq0d7w5ka7Zrv3PRcKKNRkKKmD2b0KXIgfWkshm28+7c5/Cpk2DGfg==');
define('LOGGED_IN_KEY',    'QNU5YR26VO2p6xYRS2v2oh13awYor9pABELjREMzcqrLvuB7v1XkxTV+Os8cApvu50lNS1KvEe7lB/qJVaxViw==');
define('NONCE_KEY',        'kuhu/9qn6LE0a8wiVGZyJTTLqWgZyI/AtonmUWQkdpgxXT22gL6sVeMmUBhaZr85shr/ccQHkO71ANAut5ItQQ==');
define('AUTH_SALT',        '8XT032G5aR3z3WFM8JuAAO4rxPGl0R18pGVpjOr6zIrmaZcRzzvX6xHytWRZqy0rsqjj//1QC8OzJQzIHghyPQ==');
define('SECURE_AUTH_SALT', 'fjp3YwRiyUMiLgpCcD6jxw2U/vNzjMdSArLpiwHqnkHoXz8SY9Wv0QgsVJPQNwvl4L4qXp8+eBM5Le/qllAN7g==');
define('LOGGED_IN_SALT',   'TQvZwKQrhymITKty0t5tHp+hciE8/Q1JNMvN0cRqtlwysrL4eynuUaeksM0CO9wWK8HylIQiMNqbAKA63sSOpQ==');
define('NONCE_SALT',       'EcvDmuNy1ujo5XWhLelzHUAIDwiGsmyqKytPKd82RFOSiqF6LSr/TpkhbKZr6rko9kJ4fLrh/5jOI3Hnmo80lA==');

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
