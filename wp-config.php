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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '10,{CAWj?^F/8tK_n:7t%l&xKT!Y%lk#LfQY=DNq1y1;_Q,Tz&w;a7/P1eXq;%.@');
define('SECURE_AUTH_KEY',  ':Owd`:R:(=R2Th~l+8>0|H`iM],Kn%j0u(:_%FGn~22Fu{|-vKm.E@i=HkFaFXZt');
define('LOGGED_IN_KEY',    '[#x-uFr*v.YDctVf6V%IZ`iEt+)I,z|SQY)0J{UB}%@-A7x]_IsX4%OfI>?,p8n5');
define('NONCE_KEY',        'xyT8/]Zz.!#9$ UtHU@$-;;[#L^?l9n:IA-R(fDGw|c(F/</3#[#e(Kb EwJV*B~');
define('AUTH_SALT',        'dYP@68Ws8XCf+aa]@jov;AGh8&*@Q_Gom^]B[L5F-BdWzHF[knwWe[7F_MTWFNTd');
define('SECURE_AUTH_SALT', 'NeZ~9/k#<Xt%8gqqX/BX<pY4=9*`sY_wrzWv#D8Q])S%|mD$ovD$e=Mo~e)&s+.K');
define('LOGGED_IN_SALT',   'o>.@&S[f!qM:rv%e3g5v_)Y]qo4~-E-Oh^/80(#|yFPy3}1dc%kBPTb}o EpWQAs');
define('NONCE_SALT',       'vi+lT9tZOkI[}l>F`e(*oxNO5FaX(6Hcq[gZj6?eU)jqyd/xYa]:-zJqnD[-^UA1');

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
