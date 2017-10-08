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
define('DB_NAME', 'wolfpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aN3p?~;-hRIOLpU?gL$1<ZoY<)-8_PE[_ ()UTP7<%&6jgQI(.uW6O.(02}CCIoE');
define('SECURE_AUTH_KEY',  '_W%oC1DAz*dk(vYu^}S+:3p9Z#dq/u>&SZZd<5(scVEX86][j)BblF*]]WE4UmR7');
define('LOGGED_IN_KEY',    '-Q`8-r5|.o8P:5<GAwZ06x$GOl<eyo}*C0jB>#2T`tbLMM(qYdUmUNi`?CO;7?5X');
define('NONCE_KEY',        'Jv99lkaN_XmIJ!.648rY6>fF@`U51Ft{3{a~YQw H.ujpuR1r[8P`*cx(KVph`Bi');
define('AUTH_SALT',        'B2so9$T<+GFYf<40w[{M$n:E{SA2/2?*^`KW9h&Jj)pDjUy#o -X.^A!6c_q.N[=');
define('SECURE_AUTH_SALT', '<Z&&6]3ibqzUb?&N|Pj R<I#k_(gYY,M!O9>cGZ]6E5beeD J]lP+{|6X|UI%q^9');
define('LOGGED_IN_SALT',   'SB+5(>nOc?8[e|iJ&*JTE/D<9M*0l6xR!?KM-P`Ab{UG%,&x{FnrL&43cB/CRfU^');
define('NONCE_SALT',       'LzX,0 b~q5*9t=X ;dx:gvJ%r!rH<1hyGy/%b.,9BnC|$T,ug4J*;2~z-{r_O7-2');

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
