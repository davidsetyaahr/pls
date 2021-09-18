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
define( 'DB_NAME', 'pls' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[Z/lWDDN*v8?YEi{HA9=v{2j%w_ +jieW&g^%_Ei)_v/zC[=6R#Y{B=qd9y1=sO|' );
define( 'SECURE_AUTH_KEY',  '5+ILH/])SFk05vUzV10m;z=W-qsKZH}F}w|=b-%ufK^k| Zt:J0{!9i)WrUVO,pM' );
define( 'LOGGED_IN_KEY',    '-agx0U>u#`nzTUIcsYkHmRX]f:wUF>%2!trDs2[by)ZbYN~42r6e`sp3GI.*Xj[F' );
define( 'NONCE_KEY',        '0I/B<nAqXvE@}:U!}Ef-msAZ;28Z~9!JuccL*56IQj8RJn<K~DfC:J*M_0dckO!M' );
define( 'AUTH_SALT',        'HjjiW0kniQAp}JcYb|%,@YH0|,USvN0=i]HmhT{>NFC|T<~!G[</fQkDGJS1S;h^' );
define( 'SECURE_AUTH_SALT', 'mX4/9]FQXl8-]WP+4qS<TeD%s_-j4qf4tEjhe8-G TAC/Pf5I$+z>rX?fN,EeJ8~' );
define( 'LOGGED_IN_SALT',   ':zm~]QjQ]5xrl<AV+1Ph{l%]c8Y_QG*_;:|vr)ugedgWozqw6R,of7BUL@0rJ,%9' );
define( 'NONCE_SALT',       'wV^3b~%r8REY{NK QgPj;U(i6!1$23h/G^Y>g9b?#E(@WVi(`}k0IF@G[9~~Vjak' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
