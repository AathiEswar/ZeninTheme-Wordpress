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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3pLQM<&y]=2ZM?cE?Ha9s#ImHMaVzNtE}&S]SeLgR#@P@xx|QbbMgD]FvMXrki[=' );
define( 'SECURE_AUTH_KEY',  'wAQQej[p`f>&Ox,[+.vOb{^R5kn$e$C:`KJzhs5ckODA-C#E{y-AVq8=otzP@YdV' );
define( 'LOGGED_IN_KEY',    '`po>&jiWrD:1o.TS8HdSW+iu0RwDd)3QCe,GbG9WaH@(=F~K>6_c4`?`<UOoma2u' );
define( 'NONCE_KEY',        '_(?^@ixb+c]v5&1-i8XMc=%Wq|?~7yvHVZJS<1qp*0:11*c+p1CI;v9`7UYH:zmg' );
define( 'AUTH_SALT',        'N?D(6yW +p@35K!yJ]in-ui(>MF0/er7PnNJGO^eSO{.I`eE5ou6h098Lm| `2dD' );
define( 'SECURE_AUTH_SALT', 'cr71ke/wQ=Kg(~EuEd;~*0}r8w6`&/?=i A$k$U8r>Q-u)i; ;-6H_@zgC*7pa>t' );
define( 'LOGGED_IN_SALT',   '}j{?f Ur#^_=O,P}vv~*R @U>%8PjI Ac H!xjWNglm4Fgu,}go=Xw;bs 5vPd~}' );
define( 'NONCE_SALT',       '?,$YxQ= mWGfw={l{Z=avYs/2rX(7vcqLu[&|J!03FNDq&W?v{ZE@{y%VH4J*~ry' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
