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
define( 'DB_NAME','succulents' );

/** MySQL database username */
define( 'DB_USER', 'succulents_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://hoangphucsucculents.com.au' );
define( 'WP_SITEURL', 'http://hoangphucsucculents.com.au' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UuRW8^ULH4i+j/Haz^[Ko+*:]E^To-tY^8.=!i0h$&9_JXmEM~bQ3S?qJn4P+^U8');
define('SECURE_AUTH_KEY',  ',d/PeU~7=fJ/m_?`.jow,=hv:xR]2/m-&XwPegGW uTW},3).qz~Gh)zdOtk{&<v');
define('LOGGED_IN_KEY',    '(zC==.MYh WNs=2%[x|+1k4(q!FA4[peM2suEEPjD([ZBNZ8H0t!|[-@s)g*cP6Y');
define('NONCE_KEY',        '9ecoYhRCp=8Vn$)qS&k3tNq_sZHOXg6|q&azwu5RMM{1F]7*FICwu;&JzbyD-*rZ');
define('AUTH_SALT',        '1Cz!%$|x)w_`kSjx4S]m(Mew+`EScf/8 }-%NM/CWIcZa#(nUpKb$~sn(eWa&<Ls');
define('SECURE_AUTH_SALT', '<`I9n>{;gHXS1>N`NYc1S<idzIOX%^2M<y;YH%0(VS?|No,By^ )_z_0|7t`3A?}');
define('LOGGED_IN_SALT',   '}4G{+I<+{Q-+6eoxq|}]Z`I@zXKJUz2YW1D}QSR@N/FxBZZ+{taDvP@mmi*F6LuY');
define('NONCE_SALT',       'ZVX(dXMO|V+#&;Z^]j/+XT@+..h}N;.@P)A)&a~L=$Em5`Ibu7bg-10Ct3Ij$?ne');

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

define('FS_METHOD', 'direct');


