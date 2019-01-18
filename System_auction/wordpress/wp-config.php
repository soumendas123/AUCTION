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
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '?}S;PuRD+<[0wM&CjEv{:t>P]z3u`~|f&tR[4YS_{&#f^5k670];0#&Q>vqJ/f~!');
define('SECURE_AUTH_KEY',  '2=2uVI5X?hr5&~)&@IwROp` ?>a{WN%Auu:2CrISSx{]D.O_E*Yu4[<v!3nt{KoU');
define('LOGGED_IN_KEY',    '>y/31/[ob^KxxnEY?$q07d+L4TnSlS,2a>(4Q{E>VmNNxC(!/owP:5y7!9~fqx9>');
define('NONCE_KEY',        'WkAfw-yiKlnf]@rqBbMdb300-fgwWYlj{)iTsZe{G$0 J.M&xW1hBvbC*cM$5>s^');
define('AUTH_SALT',        'W6Q|oHE($*]WAa}y%YWm4TgQ9*W-~5&uErVH= 4>3DYvtpBP5V<wLYUc,i,J!LG]');
define('SECURE_AUTH_SALT', '!7703pC|dyv,AY`r{B#|U0d!_Fqj}ysNm8VR$EXONje,~-v^zH}k%{%Y!Bz)~!sQ');
define('LOGGED_IN_SALT',   '9k[BRh;DcEj**jY BVI?hRG52>s]oWZoB[4_!d3U,t+,WZ7jn[~!kBMtG^OJg+/5');
define('NONCE_SALT',       '8EUzZ]Bq-jU0+1o(a.at,M3U[Nr=V};NoJpog`5.cp] ]uM9SnX6@(j{b ~*iR6E');

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
