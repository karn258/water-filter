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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs8987450' );

/** Database username */
define( 'DB_USER', 'dbu2613167' );

/** Database password */
define( 'DB_PASSWORD', 'Water_Filter@2022' );

/** Database hostname */
define( 'DB_HOST', 'db5010620843.hosting-data.io' );

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
define( 'AUTH_KEY',         'xmuBYL7krJ3@Tp_I;FA[`B;vtq>!j~qQN1)>*4?Rh.#DZFd:9He@Qw.Giu,)Df4+' );
define( 'SECURE_AUTH_KEY',  'MICG81Zl;PZ|Ux.>,AhzH|q>UyxU<AYvWM,=$:rSY%l!9^7(h9,(pD`j/>]RSFl5' );
define( 'LOGGED_IN_KEY',    'E+31r}Sw.Xb ]J54pP:L<|,2iW~`#|Sw-8X#]?bDEI$:y_~xQD48AX:fU[is/`A,' );
define( 'NONCE_KEY',        'HBPeXzH<i-z~P CKuE{_Ms,8ZZT;mqQ$|nS_gDK<^)M7[ rO^2@Noo BLXc9:^ph' );
define( 'AUTH_SALT',        'Eb)}k!kU4GhKl<),u*@##hr.>K~yue+u:skoH4*|6Kt=<o0huw<VS*+?g-N>Z8Rj' );
define( 'SECURE_AUTH_SALT', '&`}1.X6TfFiCE+HZ#nv*n>+XQ@U}e87FGT&8#hd~:@BHKr {~@vNu-0Ccm^m]h1=' );
define( 'LOGGED_IN_SALT',   '=9<s]  WuVv^IE.wmCz@YJCQ3GSMI?i:{z /.H~9kd}vf&6+|%JPb((dC}jois}f' );
define( 'NONCE_SALT',       'M7KehvW+DURB~]9;_p3,7SkL{oUvZrVfQ{@S>r1l~$of:d I_;/tJcJ1 5k*WA E' );

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

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
