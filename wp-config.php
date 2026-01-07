<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '130305' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'W!}}c2H>UCBocq{aNB#5{~[,mObglhj|>z=yGcWMx_UjlWG<!-Z69+xH@`d%]z=X' );
define( 'SECURE_AUTH_KEY',  ' -(JqY=9@]9b5rGMijzpJA?dr/tQ|zbm8bI<?Qfb/n[f9n/lXc 0rohGraeC_g n' );
define( 'LOGGED_IN_KEY',    ',HthT=-A/O<6D:(AEbzaOQJpdiT!BpH-:tA7o2=4s7lyoSS10`bXbA`k7o|d@KCe' );
define( 'NONCE_KEY',        'Va)WyC7RL?,J3!Bc.$2&WSYk0@7UF6G+Bk3<pu`l8sQh13>}517go`*T#N:+(>`]' );
define( 'AUTH_SALT',        'Z!!^c@t*C+Wf`^n;r&T|EQF<!?a@8L@~>$SZn-eJ%4sGKZOw3`J+yjXno]/&7uxc' );
define( 'SECURE_AUTH_SALT', '+Fqc1CmkB`n5=kZ(d*vyXV+|VL$Jg54Dj8=B2V5&_,DVS<ted?I0A}%r&[M/Q!7)' );
define( 'LOGGED_IN_SALT',   '|=zf0Y}FYc8g1:w&$<Z(PzPN#.t>r[>9`Q4~d;vFtS&/p6NOnF;?RU>n8(1:?0i>' );
define( 'NONCE_SALT',       'Q2,W:zxPVF_B31,zaU|!r8Xe1.*9dMh#2~<erX5Z=LBX/5n^qPzNfmT=>.Q}F!9s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

if (
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'
) {
    $_SERVER['HTTPS'] = 'on';
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// --- Fix untuk Cloudflare Tunnel SSL ---
if (isset($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false) {
    $_SERVER['HTTPS'] = 'on';
}

define('WP_HOME', 'https://haydar.web.id');
define('WP_SITEURL', 'https://haydar.web.id');
// ---------------------------------------
