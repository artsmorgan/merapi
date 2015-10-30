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
define('DB_NAME', 'merapi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '=LS>M)m2ftO<Zr3.=_42HF;+0Fj%tej4|FiJ+~39r.,HoQ{.=HAMzu^[~$K=xx`S');
define('SECURE_AUTH_KEY',  '91X(1@ljd*|N1dUh-dF$YF,]A4r#ZWQ:MwrC.-3Y|yN8O9f]UTYyx.h6.}[8zy#|');
define('LOGGED_IN_KEY',    'SVaw }j4Jfl3 -C!?4,c=B]gRB.i_q2ZGU}Q^jOe<r~@2,s}]H[@~7jt)+z@Iqms');
define('NONCE_KEY',        'oFJEfFA^qq7*#Ihb_hwb)DmEw@)|K;vWAwG!U{%^c}_:gx#H|nCr-eHqyX? {x-1');
define('AUTH_SALT',        '*:q2O3.p|L8^lEG;+73t}H<70OOjP+:Lr:nX_tRtZYC^:dT+g}&rrml#}YdvVxAT');
define('SECURE_AUTH_SALT', 'G.q1q+nYSL4Rl-8|$x;*B@yse+L%1K(&>B+}N)Ld3@(GA+!@6j/igi+KMUBGT)pn');
define('LOGGED_IN_SALT',   'mj`+$<n1H~hqgayezSr^Kf(b|@{VtdO[53.:eN,|*J#[a7(DrJ!|HL!J -z_: g-');
define('NONCE_SALT',       '$90/8l*bxvu;v`x-=fb;W=szsl-*9{^@T%(Y{0Ett+92LqU*w~jD-V(.($x_IQl6');

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
