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
define('DB_NAME', 'ZAT-Project-Db');

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
define('AUTH_KEY',         'paZMn-4,*vv$9r$0*B[@$b-O`!+5c=-#zodjz^XQ6}/,ts~+X_tZL7Y]zEh4Q*cZ');
define('SECURE_AUTH_KEY',  'PUC{?yvZ;K%0nic#zpPrs0R|1u`K_kGK8.vr],]2^zh.B)lA_/>koc@&IbA[n?$!');
define('LOGGED_IN_KEY',    'CD0;?-^W5x V05&yZ$yx%Jq!k%hcQ!S@$EQuUfk#z$`/6s@MnE(VK4@teZ?7!_Ki');
define('NONCE_KEY',        '<piRWUfqHms+x#2CoG90oCcZ-;,0`p-)t=T4DN!9ye&zn[Yr:fm_()Q?Wyh`#lA2');
define('AUTH_SALT',        '^iE $C<JwA@7lC[B:`KojjM0X+jrQUrRiCx;xS~goVYI0!JsLj8j|2x=y{i:A |N');
define('SECURE_AUTH_SALT', '+QGg{qL+N[x)9-p((JrQl<.OrqJ*J<xrv`TOR__3LH9O]Uw$pfJ2d2Qku_wjsp0l');
define('LOGGED_IN_SALT',   '6,1T}M7:e5&4 l#2l>5d%38<0R-O1_iH~7$_)$0M#WcTxJ!.Qk6@_~!WyzWu}wr2');
define('NONCE_SALT',       'L|+G}8(jr0sp&Db85.l^UP)$%gVJ.JL}?Gr(*T]dnN!x3_Xy8FvP*Zl.RF9v`mg@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zat_';

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
