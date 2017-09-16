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
define('DB_NAME', 'myblog-wp');

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
define('AUTH_KEY',         'BxYN%):,X!ro3@R3BBZi`XP7EY_&NpJ,Sb7]$=wl=#Yd]X0t}yFz0|5Hc-feB.ba');
define('SECURE_AUTH_KEY',  'J5_:&aK1d8W@t!nFP|iiL&}V@?QWFCC#jj!.Kfh_QzkA-ou&:.3rR!z/[S!41%a6');
define('LOGGED_IN_KEY',    '+[5$LH;E=JZF,+6[Jo6ej%dJTQEA7:U9AwXl2iaO%U]+`jS-L.Dp]T&+-X^Y9@fP');
define('NONCE_KEY',        'UZ[8 teU>h:qN}8$rxKme(/D@yd[~shfR_5E=?#@M:Gt09AMKL[KN4}M_.H^-~P$');
define('AUTH_SALT',        'Yd!y&Hx^!b9U|WdX&9?Ma,2kJy:Hq<uUO|nslCI^B9{_99NbVFZRlHASbY*psNDa');
define('SECURE_AUTH_SALT', '8P|wa,cF+M6KpuGF!A9CnU-IU}[ LX56%1]4u._ li1+Hi]m1}t+%3X)TXz_kWHi');
define('LOGGED_IN_SALT',   '9r|j$(J<53UxZ9%0[K6K%g@NUL==r78g74E}+Vv:ZtX^AZ_V#-;}s |[QI*Q^Q*u');
define('NONCE_SALT',       't^B:l:tMq5j?~1I#Dw%6nr4?B.-Atl7-Goy)b>|_R8w$|P7ix<3T^=RZ}rQF5Zx*');

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
