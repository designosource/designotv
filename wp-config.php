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
define('DB_NAME', 'ID220762_desshow');

/** MySQL database username */
define('DB_USER', 'ID220762_desshow');

/** MySQL database password */
define('DB_PASSWORD', 'designosource007');

/** MySQL hostname */
define('DB_HOST', 'mysql131.hosting.combell.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME','http://designoshow.dev');
define('WP_SITEURL','http://designoshow.dev');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xf-%B#f^UubMs1FVEoB}h!%?G_I/+r.m|yHGtm~>DObCK|mlMB,fa!@hk21%KZQb');
define('SECURE_AUTH_KEY',  'E4P8|&>B_N,M8V2BL4MJ|Q0T-Gv+EC#,a^%V|cJ;L*9mN:~$34Qt+E ~u*;lReE-');
define('LOGGED_IN_KEY',    '60yEJU>$BUY%h]+B@6HwyNTx>RPWs|3on9@TMP[|SXq]+f+yS#kBT#Fs*>A}q!%t');
define('NONCE_KEY',        '{,|~}y~LlYF2h5-CCnn(:Qcm[e5Jfk7u<cRR9J]h~{<U<F`y?%+XiLNMZjKt{K75');
define('AUTH_SALT',        'R% n!vd(7|UVdR4?hovwHVews$@4(yLY5g=L>!&F*~9O$RWat|%0/LEXvOnXO+fe');
define('SECURE_AUTH_SALT', 'Mk4-6*lzB5lAx7P|!-M9f@SVCIdBLAc]uys-o?B3Zn|H-Za!:IM;Qi)8[?-2~bTS');
define('LOGGED_IN_SALT',   ')zAnI}[,ZHpC@_-i`+eX&fe3{b+5Mn,{{45QB;6P!Qe-yV2%p;6s-P&Bh:Dc:~c4');
define('NONCE_SALT',       'Oz?$DqXL~z):+rI|:|a{I]?4H_):uYRKIs3:`5-2ZIJ/PqC9lVzta-H+R?/GhCl:');

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
