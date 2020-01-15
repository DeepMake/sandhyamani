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
define( 'DB_NAME', 'sandhyamani_db' );

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
define( 'AUTH_KEY',         '!$PA,mXl$jk3>,Y$#k!}j,%l@&wnn[DeeW8{VgEo:iD-v(ffm8t]`f{v,x3pOz~4' );
define( 'SECURE_AUTH_KEY',  'Qo.+2YJ$bWeWj^YVf!E)0?/J?fjx51J1oX+rK/S%} hHeRuZYq.Y#pk.`Wi~)gA&' );
define( 'LOGGED_IN_KEY',    'LpD^tiI7).7chN|!4_]nB&[XC/ rYg[)Qrj0;doKs/[T>&/]f;3HVH5mAR~|:[4~' );
define( 'NONCE_KEY',        'uHDq<DiMB]inY*|-]$ b:wK;_ZG8RNij&:5]hLkvP4%_OFBI.)9Us(~E&N]_)6lw' );
define( 'AUTH_SALT',        '|v}%J>>->B2wVl}X-wb;TFwxo ]P}U..fn4b;zXcEfSq6: mG1b2@djM5@ll~+#m' );
define( 'SECURE_AUTH_SALT', '.z4ZL}nA*<o!4R2R|QPB,oBT8Pn!H1Kw`c1bY7$Mb!0c(CQcXrSD#~91)uR&F7X/' );
define( 'LOGGED_IN_SALT',   'Zr$A+RLCXcdHGQm e7hYD`DQAF/4Jg:/>$m L8+b J(GB]4P59SsLCa-%efTgUWQ' );
define( 'NONCE_SALT',       'q!09xV@ n&DAp?@;hV^n0Kz[588{~sAir0D7E&Z$wP%@n;h{de*GB[3s:/Xgy_w>' );

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
