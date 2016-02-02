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
define('DB_NAME', 'db_chroma');

/** MySQL database username */
define('DB_USER', 'papoirier');

/** MySQL database password */
define('DB_PASSWORD', '(POPPYcoq)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// Enable direct file modification (for updating, adding plugins)
define('FS_METHOD','direct');

//define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9}uS_{uG(brWVi3FJh|,Ce.%br`uH6S)e]mpuq <-}T]V{mvhkYBz?fx7M|-XW4X');
define('SECURE_AUTH_KEY',  '?>a6]pzQmB5Z@9aUcys]M=B#_G;bI8,bITsd%{5z//$]eq8m_Cj9<id*7hsFBRU$');
define('LOGGED_IN_KEY',    '?l}QBCS+nuC)/962A4vBxoArT,Ry&Id/vUT=Xx@9-nI|IkWVJSc}}O+v9}5.F-aW');
define('NONCE_KEY',        '@=3N0+4.bt|NrG#hpRbQb&@l{%g*gs~k7mgYKDxd65Jckh97>8C545@lDBCuN!yB');
define('AUTH_SALT',        'pK*g4=3MK:g+:{4x+Fp{hDmP0.VF`o^7+fs)yLlPAX+P, t$uT7]{8.d`KJg8=zQ');
define('SECURE_AUTH_SALT', 'andNo{!`#i&k(sTjPt-=cl{VH2M&H%tE.@NB8#G-~[7q&Mq}jBd:+U5d?+<d!s/p');
define('LOGGED_IN_SALT',   '{AjnM*Xgx_-w@~o&g/`ku5Z1.ow@.j 3,E]=Qa9r`d-)4d$T4O*}`{sfGO$5;*{H');
define('NONCE_SALT',       '-pD<m1.$X9`Aw#|B+c,YIyNfy;4JunMruk*l[^Y&6-dsjm}.LMk#DF$(Wi~Fd6kd');

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
