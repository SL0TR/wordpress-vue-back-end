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
define('DB_NAME', 'wordpress-vue');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

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
define('AUTH_KEY',         '7XoVWq4*s:x[0x1ddX_3ovlZaG`,XkforUe@@8u.HywfF5ax$LgUl_Zt)`h0XCcH');
define('SECURE_AUTH_KEY',  '~!{jgLZj%qhi$gxYD{E.4W./a!lza1/&(@jm$aEc1BW*Y{t>{V1y[)5bR1>ht@;H');
define('LOGGED_IN_KEY',    'zfyF=J]:%ec1&Qr=8mcie9fs,i<93bMJ;cm4/U]1H3P%ZEt4Egnz%2_yEQ3W<c.{');
define('NONCE_KEY',        'VrKed<Rn&FMp}(D[)c3D%gUL%M3tK{t:2Fdq@sye+S;YMHj3LE)4Eo~R1?I9y-OR');
define('AUTH_SALT',        '_3Li%@i7lFVB{3jJCe0CBod)>I =rGGEs*Q;h^=!zDxAcD&1koMB/(KKO2FPN%>8');
define('SECURE_AUTH_SALT', '8{!s#uPAW*li[lX,Kj!lx#pYsEDw13uA*si0]qdy{,3^2+`X}`NdEF!_YnI+_p*]');
define('LOGGED_IN_SALT',   '_>0rf}eyw}shJdXx(%sZ ]=)n+-yuDt/MKOJeePSB8dYB?zFp,nFS`(wZ;k1G$}s');
define('NONCE_SALT',       'v69P] 2<Cm:,Cg.o8l8Y.`Au!T|kj$LpR,WC]3be~$&IqEMn3S&4 FThl:R&iP*Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpv';

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
