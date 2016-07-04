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
define('AUTH_KEY',         'XvuXhw9mhsiP5y>}WdDqj:a>;rZ0j.c]E4!&fl$cP /nrcxb/6,pq:]&N6E#;)l~');
define('SECURE_AUTH_KEY',  'qr$D)A)tdWweF8&g!~!!6<&$y26|QrI-+{TO4*]<5F@(B3E|<f4*CfFh=:0w=G8|');
define('LOGGED_IN_KEY',    'M1a$oS=h[&K).!^faU%>yhl_)La`H/}s:8J-=E6o9]Iw]P-]d[~<AcuM_iXr fMJ');
define('NONCE_KEY',        'hVD,RW`xuK5irD[:q,wmk~&F-1v(+Kc29:<qy1,#[m;Or;?BOsmr[:p.3+S`l|.p');
define('AUTH_SALT',        'md8Z?7e{b-Mb]Za2ybA]6y35xb6628d4xWK (k`#F{mhX~@}4wlIZEJGR*dR7PPP');
define('SECURE_AUTH_SALT', 'yDJc=>*k<l`QF$.dAk9vrO;XD`,2pILcX,YjKGf76Kl,xnJ U0Pumu2%:l+}MwlN');
define('LOGGED_IN_SALT',   'lWM([&G/dlyPTD2`Ee{$aq$jFWYK(6K:`eY`: tI+UUwuI!X @#pbL]p[D^_uxT{');
define('NONCE_SALT',       '~1e/}(EFBl)!Q3!k -NqUq[@P>~a?ZxcX0V!t5Bj}b1b~5pjzG$^vt*Q*uWE5|HZ');

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
