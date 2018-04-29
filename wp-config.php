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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'BK8$twN5GYXnTm~bHdQ{O!,Z$IpCv?-NNCbu;L%!#Bj3iAGp0O,8+=F!fJBUKJ~+');
define('SECURE_AUTH_KEY',  '^}z#hzjdg[Un&^kYoMY*4NxRcD8&SE[xYJ0HvBc%M}9DR!x>R<IjK9+DDXr6@I^D');
define('LOGGED_IN_KEY',    'Pj*2Xgsu/^D|sg.f&:dYBq(^]KfYb4].xj-N~L#]s%KvFX4!t&w.hU}h2F[Q5@Z_');
define('NONCE_KEY',        'aY/)oD* ^f3.d)4(w!K](.yXxaG:p<f7{P8aF>b7b5En+`nlvBY(H@DJp]#KS+i7');
define('AUTH_SALT',        'mrEngNHl3>H?P+I:uhF2udS;/>8coqWzNo.a:MGy@g2K*:,Q;DOxN{Z/18[xqz``');
define('SECURE_AUTH_SALT', '57MNO0@*[64^d05].[4}HQ:enIdiMuZZ4gz!Yuk5E4$$gsi$WD__eA`Y]G:gz.Z0');
define('LOGGED_IN_SALT',   '{:~|BxHeI}bbl6.z?n7sau/m($}q9Tu5h^ZozEzZUZ.rBl:0lYfC,&bGszSkbU>8');
define('NONCE_SALT',       'mkHul.x+&C*(I([ZbR]{JXF!.7.z)t1*N=ry.3z)#kU]:v,6mt#{^oq|&daOsdr]');

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
