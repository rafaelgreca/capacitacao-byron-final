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

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'capacitacao_wp');

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
define('AUTH_KEY',         'zgB:0#7`f+~I:Z5+Y9XMv0znae,O%Btmm)8@SDqz4 aS+o.jcEZ_f|X<nb,%St8?');
define('SECURE_AUTH_KEY',  '2hkgA4[8a%!q1UjR)MTN~y^eMZJo]w|/siz_!3e+i !*HZlc@VT0y(>:I<pF+nrY');
define('LOGGED_IN_KEY',    ';I7mHW[26= |X*87hM,l(23X73dRG#qYOrir!%tlZ~I,.c?6,%ySda9>;]V<V?r*');
define('NONCE_KEY',        'wS/VN=7Q8Pv{S:Un3xGIoiCSoc!g($H)E,zqy5CNl@vQSg.Yf1K~dfV}v3)!s #T');
define('AUTH_SALT',        '-c}<MWOiWVCvuo*oRz;:mnT$|?s;?&(v4F4NEaKbPN*1jjUibfCgQUsMRaxlzUe%');
define('SECURE_AUTH_SALT', 'B06fdiMY?Md*i@A$wW^DRI(LS)8x:I~ae?8#[umh!B:FBdDN4sZ_IMUQ/l,?xi/m');
define('LOGGED_IN_SALT',   'EN%s{M<hg5{gAVJH&V~:J%W+9v/u`n1$f1X+5E,[s]>`xIc.=(U<2b+ iBrw3Z83');
define('NONCE_SALT',       'b8<axe9J[_oQ;)$oZ/)>T?o=TS@2]6@-s{MWVXZJUVhZbOC*;oXQV7 Q8-C:TafA');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

