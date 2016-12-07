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
define('DB_NAME', 'wp_paraiso');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AHT}o#LeT!Q!VS>{a(~GD/s2zzqA9ED[V-#c$T9p ,:)I{7E/nVk H=04UUt$~+.');
define('SECURE_AUTH_KEY',  '3)I/zT[;`YKiK|M3p23Me%{xtyvdv#6}HY0bZO#2(:A=0qJAdd(l[O4abvLn%KES');
define('LOGGED_IN_KEY',    '^@)vg.F%>nF,ng},q#r.hU0&3wG).#*|YM-VaM{#ppui&^F)j_DV.{,m9*PZq><x');
define('NONCE_KEY',        'u!H<[edZC%@+&OQ_ig#^+Oyk_EKWbQ>e7u>sWl>cl~J[k|;MJoj!K$!NTVc8}JWy');
define('AUTH_SALT',        ',AiD60Wp]/fsSEjKq{QPlQ$cjyFY@W>cEq~/*M8XFIYY$^qKQ:2yq%;&k,h*P^oD');
define('SECURE_AUTH_SALT', '-qF=8VdoF3!(uO[vX*S_I3.{&DhPjDTt^p5_dc/qy-:x+4Rgvi38fePF7}6Ie_j9');
define('LOGGED_IN_SALT',   'a{o<;{7/oF+;NiE6KvJ f.6By9J*r:sB)s%ihu/aOKca;Y_;oFCYi  =,_GY0bwm');
define('NONCE_SALT',       'm?4Cyasq({#S<;xPAa8n>|lf2CPIMMN 0ugB75`Gm~r6j^#oD=T-:9qa~e&gphNj');

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
