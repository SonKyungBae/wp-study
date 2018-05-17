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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1111');

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
define('AUTH_KEY',         ')Q@-qx2+&h`8CL#7.Mq%a6o>A.H4z9GfcVZ,d2 GM-#<dJ;6%v)_k,r|^kSvj4$I');
define('SECURE_AUTH_KEY',  '>49M)qvmInQR`Z,}uKx.8UPj?B_Sx.?^;<YOK-bO])wXKHNo7V/P~/O)a4xO7i}r');
define('LOGGED_IN_KEY',    'yhC/g4rkk`$w0]=&gih4mgL1VCd$V:4k0:WCan+7s^jhm~[>4Y6.F2B?oRf6p_Nl');
define('NONCE_KEY',        ' rf;@};%5+/owP&RvurAjYhj_^|F/2aRg<vAY9ggREu{~2JNorvzxoHwJO9{,[C7');
define('AUTH_SALT',        ':qTEuL6h Zp0rle2,p$^&UJ,F|P~7#$Aj;!`&na;jjB4cuQpvx>v)qrgO`{ :#vy');
define('SECURE_AUTH_SALT', ']UHkPv^c:;;)<#1{Ke+Si5=eVC6~_%rM;JNv@S2A%HQcaUGv ]X$90)m5wNYetY_');
define('LOGGED_IN_SALT',   'e{xodzC(D,Ni=(~7z+a]RM-Rhd~U87Bd2^uX{9MCUJbJM!]1.O;m{?3x(_GmTm#C');
define('NONCE_SALT',       '8yfuQ-207epA;_BmNVvvQCILgWt}+4D)5^k0VTi8QFKhG*dr+UI)QvM&s7Y?m[J(');

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
