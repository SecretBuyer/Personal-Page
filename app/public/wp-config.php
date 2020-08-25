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
define('AUTH_KEY',         'egwrAFxU0LOpez/jdmLqEDgzzE+s0k4WsOKrRXOu2+u928O9ICrpPmYYEeCCNNQCZhUEzhrPjgDbsNAaTkwJew==');
define('SECURE_AUTH_KEY',  'it8VciBxOS6YAZUHtCRbLywp2UiDn3+SqWE7rdVCVDtnrVnjxDXVC+KmLGSj4WFVDfSpTTVIUT13jMndwmuOyQ==');
define('LOGGED_IN_KEY',    '5mWViaYE1VRJmdJENmG7fVYkyDbkWblQmEt3LahWWAcqafkl2p6Ud1WKBmqYR6X/Mj+rr/T4BRQYWZog5lKuqQ==');
define('NONCE_KEY',        'W/H0O5KESrB1jdrOdfMrG6KATOj2tvOJgfHSnbxqT+hY7xcZlqWqLnGXCYbJsPXpb/b8dAaminxpywDmdO0OSw==');
define('AUTH_SALT',        'uTZUTJwKMf7sfueZQskXrNjTF7C5uAA3yOYWXbOHrFdCIWzn4dKzL3z2ztjn3luWvYRvAqM94t55ZngceV8yJw==');
define('SECURE_AUTH_SALT', 'xXagDBP8HJPFzMz+FPgFYlrfmsVFAl7sKXHI7LSG5W68WztH2UFEXBUxWwiElJ7tgZOKAalsCq3vJjIKd6iePg==');
define('LOGGED_IN_SALT',   'QfeKy/AXxQnKEcXIFn3vFb15g6evJyx5F5ccnjor01BlDO7pSYOCDnjubf0/DnUAFYE98m0G75PcgyEf3z94ig==');
define('NONCE_SALT',       'l0nfo/P3InV4rc2BQvqdgZlkRCGsEJX6hkU98tu6/+zzSJIN3EHWwhYDzj46aaENb6uQqVgFdRyJFOu4640sTg==');

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
