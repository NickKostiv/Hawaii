<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'sU+udkqY0nhae6/nFcXNkQh6Bn3iMORII+FQf9DWlGA69iU/F3nwl96W4WgJcmwsEp6AI1jcqLo2dK+upKTqPw==');
define('SECURE_AUTH_KEY',  'dA0rFsjwn9I9x511geI+47VIkj72j8uRJWcEfHbyPL+lPboujfweJRLTzq/aTEjuXm5gF67vfiZ+hFw/4Wzv7A==');
define('LOGGED_IN_KEY',    'v+PuhYhObJeAUu2LhJNMLHYmevv4Jb7DUOyo1rjh8La7bHLUhATOfZAPI15+9I2y3v1P6bPpBd4Ht26fxLrgqw==');
define('NONCE_KEY',        'q5nEYp2AhzzTh63FlM12LTbX0VxWC3ZKaXTRU6fCDkXk06JfAsns25uFO6Izbs7Rl7N8ZAO2ALhwZ2yWykIpEg==');
define('AUTH_SALT',        '17+jV7XK3TmxO62iN/RUrKUUTHnRYPI0RdpYDDJ+L5vWnOqpBqGopSj0APxx6VFwO/+upFnenrVChYgO+x7cGw==');
define('SECURE_AUTH_SALT', 'mMLZJeI1AsiKzgxc88uN3AfLrMpAlY3ipCSSQ2gzdAebRNjkn+QmdT2Ho8p1zQ5K/3MfqXiTll5fZacKKx+tIA==');
define('LOGGED_IN_SALT',   'etbs4AHJN/Mm8OXVDQqkzfhMdQl6cYqvlHmKjDD4a2b8VRv40cv/AEJlg7n55J9dEO7Zi/pnzH0KxscmmT0jGA==');
define('NONCE_SALT',       '2TmPQ8IAcyCzO+HxLq50aqbJ+cVhW6hAafjRInKKPJHDsI6/aHdTaXk30wq4SOtKbvpiybJs7WAlb1ol29pxUg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
