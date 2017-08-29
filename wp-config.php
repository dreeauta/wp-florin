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
define('DB_NAME', 'florin-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's`A`F|~-C7{VwdZP|)u?q Q  d19),>PjkfCHJCS&^H;_+ChMLISm =?qKIB0thY');
define('SECURE_AUTH_KEY',  'n^s)y8en{,DzbmAlU3wr%KjblGD^,V6O.-IRD;^a8F[&-2T;~hQ:fq5a2_$$UF-x');
define('LOGGED_IN_KEY',    'YBgMKXd1Uk;9MMqtX%~EhyLIGv,dOhrne drm&F27h+|<j?:a8`Z/Hv7[;e55u1W');
define('NONCE_KEY',        'KpEqi<N&S $@g!1Hz`!_BpOI+Q1hzf2G)8@oA+(S~eV1p(#)OH3B6YnM_Trddq[i');
define('AUTH_SALT',        'x0^wv<AT^3>(^=X-x|h{RBemv#>$=E8zRU(z}:K0i?92@B7DM/z[.H;T$1ny~5<~');
define('SECURE_AUTH_SALT', 'L{e]KAASY@cFM];)#<:7ika!q*oqZa&Tji*T2E+&1#Wok$Gl<aZbTljOz?#XHL]O');
define('LOGGED_IN_SALT',   'A6C+pN]H&NN;*$V;i={ Ri}6,${GI,!UxL19qvWNVpR2/jN5.3FC]X4u0(e]eA5j');
define('NONCE_SALT',       'x<-0H7XU(xhzURuDe-dPeIBO|1$WZ~~u!V^iE(eIh@cKRk?Oqq=B,O5k}KO2IN|?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
