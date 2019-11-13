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
define('DB_NAME', 'savvi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'P@ssw0rd1');

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
define('AUTH_KEY',         '7 %N_MhT/;wk<`zY)uTbcrEr<WVCvv+?7*mm4On8d^>={p+1z+@qZf_H`,qu7oZ4');
define('SECURE_AUTH_KEY',  '`-].~!+ggaFA(6on}aC?6V6-)F@C^aug,i^NTG?,?KnRdE$C!kABnE_Xm^1f(2iC');
define('LOGGED_IN_KEY',    'lntn0BefP]3G(:dqh]ceFCAL)]*I<Y~|1KD{>T!|Fk+/<E5-qYJuhnl>P8p%Q?2r');
define('NONCE_KEY',        'TK=dEwlJAA%Q;K[OFbb^cc|#@~rLq!F`8M$2m7 E.pHD>_)i.y.T_o*]U9S.a)&?');
define('AUTH_SALT',        '$fgre1U9X#4!(bYLTD$qqpZtkGd}*1~?dcHZ/m9rt]DmRa[M`QgAsVxA4vlbp[U;');
define('SECURE_AUTH_SALT', 'FEe;JMQ*H0V4+2>e[b}4Poh75`OJ2R!5`rq) {h?Bkv3M9$;$%:NC)X28pU062)#');
define('LOGGED_IN_SALT',   'I[21X)fmy382CX5C1J8cR;3x,8Y)2>jZ>u9p/axNbZQnoy|13`&]yiIv2<8sRAaS');
define('NONCE_SALT',       'KvQkPj~%2uQ_~yXzV%MIwFj6pC/2gh+o uMs?`mJI9Aqk?rXDHF(SCz}5|NPcJBl');

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