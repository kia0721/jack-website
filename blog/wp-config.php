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
define('DB_NAME', 'allan_jack-blog');

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
define('AUTH_KEY',         'PWp`*W^N7J2{=%!>-;&]zkA~2yD}_ZHVm)sWoph6o/q`u?1uQ@!eZ3]s$)U<!daj');
define('SECURE_AUTH_KEY',  'B`+RHfrxb*3^V-hv^h<QiL$Cbm-qLApP}IvfOM+}zbJALL:8|kN]c3=w5V85P[)f');
define('LOGGED_IN_KEY',    'fOQC+{%Q_@5c^|6Dgey9S&}}Rm#M7Fs/)/BV#|akvs!`WO)O^fJ#d!(C*ov_w$4^');
define('NONCE_KEY',        'bEP) ;O5X[grX48E~.=ZPAK4i_3:&i$3oocTld~:=wz+K]sPqR(p4u`qw}?Z74dF');
define('AUTH_SALT',        'f`M^]x0J,vN1xUD7IqZbc6&{mo;X1(b>C{3)>_409F6YkC_mt4#S|rZX.,a2cFSf');
define('SECURE_AUTH_SALT', 'f9,]Ymc0a>;.|v7C:SIAlKy?&GggA0#.cD-e<f>~pwkH0n12,7_NR%a{],ZVqQe#');
define('LOGGED_IN_SALT',   '$~Eyn&-a7crzrwe|%c~@ghXL3$<N C<4do(&=P%@!C7YibYVa6vO[0{=Gr<WfVn]');
define('NONCE_SALT',       '0Bh!6c4EG,@8B9;+KM6sWOKH=x&{4_+HTOP>d}gfn7bD#mL!2]kM)X^Co*cKB`z=');

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
