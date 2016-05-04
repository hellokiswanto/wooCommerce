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
define('DB_NAME', 'wo_hello');

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
define('AUTH_KEY',         'dN$.H!+pPIec0Ptzp|f|Xg?2Tt;Gq6&VWP![d~v.HA<,2k%]McuNHF] ,/}3z>9I');
define('SECURE_AUTH_KEY',  'P^;CNZM5E|l%~QCm6xlDPv#lwS]{ijY#]{=_Dq=851#$k~mqed1x/R%2jjN9}^t>');
define('LOGGED_IN_KEY',    '`]p5Y~{}s58._`B]m~Q0FPc%y2*Ft~Y6[ohNy]P9XJ&=j;m-~gdCR?jPvWM!u`xT');
define('NONCE_KEY',        'wmfla4JK3<Uo38gSMJ#z5Cd:Eh;m=Ju$k|h,;$gr9(K%r4=&Cw,m>>ZLNdvo^Bf3');
define('AUTH_SALT',        'h$A,P+WRmSra0z^E+27,Ak-/5pqr*XL~F{mVr=~qi@B rpADyR&-7m.sqyd4*R!E');
define('SECURE_AUTH_SALT', '4<: b#,F:C;+GoW1S*Fh<r%@0U ~lB+9UO?;?{TKHBwho[&xC)(81]fg}#O_ug{^');
define('LOGGED_IN_SALT',   'N,_YKK?C!1&V^74#lR_r$T]bH73+sT|.FW6=3U|Kwp@]ULkKdOh<Aw:U).-%D@Vf');
define('NONCE_SALT',       ':G_%7M$)q5%;zo)CQ9LTIbX+EyjI,gzaSwp$En359GT5M_*(|GVO+G*fn[ePfBq1');

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
