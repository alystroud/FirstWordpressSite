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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '#]s&61[+!KQzlitOK /4!TN-Zu.bGOD%aj6K-d{a%|z_s`sj[sO^X(SR<u!|kObW');
 define('SECURE_AUTH_KEY',  'JF7?!f;aA/ojQsjGJ^E7 ~&6~41>ptYCe&;1oLh[Z-Il2rOHX$O((D(S;z#d%&-Y');
 define('LOGGED_IN_KEY',    'Z-6pxA/5lv|I3sV|b}$L@m=eH34}Z|@qYll|WzL_Cs8K8{`2wsBaXZ?1*C2AE||i');
 define('NONCE_KEY',        '/%&?+N%{Y?1;+Po@x?&:k+,(t%cL8aEc[D[MlD@U0^}R?`0 MAz&K>?|%9cIb[nR');
 define('AUTH_SALT',        'd+*tTk;%/$fA?Vz.cSYX-%KGb%yRx@#`|s]Yo_0rL~4U7#q6g2,<o|Ke+(PAdHDs');
 define('SECURE_AUTH_SALT', 'j1$Y^lQnX/6@+:0Y-~Z*]x`6ySFv88I-3W>;1_1~=;.b7O?^L(ml]X):!4~)DZb{');
 define('LOGGED_IN_SALT',   'R$:m73J:Hh nlo^ |bSIpG`vi-UN:(q3aRbS|9|y iCjK)Xf<rIS[r8;v@3vBB2z');
 define('NONCE_SALT',       '=s_x8!Kj?nEZ()hy~^sYnc?Yl8dbd*:!dVYCjkv,PF)kn^f,.`g4iG?+[rPhgoS[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz1093_';

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
