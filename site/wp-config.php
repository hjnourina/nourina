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
define( 'DB_NAME', 'first_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Efj7H49zqaRdQ2$syC}7xDfN9~ktWPb8.336;qN)3WNb~-x=Y]r`RAalwU4@RMb|' );
define( 'SECURE_AUTH_KEY',  'RrSq(F e+/iA&TK7CdQU,>:jGoE]:4uf45HSjbyk*{rbQF0B6}[G>dkBg{4SJCsi' );
define( 'LOGGED_IN_KEY',    '#@w`DcRG#8-4*c7w(U)<%miJAb|Cax}l$~GG49^:EH+D*qRN:F!dw>HI(Zz]7tiH' );
define( 'NONCE_KEY',        '^g~-)!S(&ejVe)G0=<Tv,UD!<62v441f@bW<^SlW%+]NLdiCe@Q~1x~e4dW$l+ej' );
define( 'AUTH_SALT',        'NsERgxCyM8tghnyb1IPO`@UVRCe(Y*`9j592`UTfw2LCnom<`eGWF_38.kv,^Mr>' );
define( 'SECURE_AUTH_SALT', '|ltTKQ]M]<2y40^4U#7@m)kl^$.6[uLts5p~hlEvgTu2H>4~pgjHwlIyYX`V0k;:' );
define( 'LOGGED_IN_SALT',   'Ng+S^b1abp?;fsN|<DgoBc6WWOd7,k#F$WTCI ~0K`Z!R`,0z(Wm}E6SjK`kx~Nh' );
define( 'NONCE_SALT',       'wU#Q<k.}oih2YJH:0#vJuKn%l;)Y~g^T=k9KUb&/>w UA!2_$<(rO6:|*Z@^9|A{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
