<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ERm%ae[%l*mqYUv|t2J:`L!eb(l<RpY0VUsY4:d2OQ,hOC*9A(P+NvP*J*0g1Fl[' );
define( 'SECURE_AUTH_KEY',  '!s5Aw~MGs$</jA4I*zc[=i;TC6VLJ/<aqfkwl6qg5@7W?`=B:(16xS9v=XMe<k{g' );
define( 'LOGGED_IN_KEY',    'bdi_NRLqo5@#~uT}[(0EROuoGV!cjEfQC@$]FuB4{xJ;;9Ifowhg3hat_NsY<)@h' );
define( 'NONCE_KEY',        '1Y=v.brNmY-l|Z5pyZq/_1#l_7=1yY<fqe.aiUa.e@=nJH4W+CL.9J8NbO9%+ow%' );
define( 'AUTH_SALT',        'DE-?cpjHg`r)mrEQ!qRpG|N^x2_b;7-i`.jnvXXT]}.Rc;%L>yss0`2-%GrZEfGl' );
define( 'SECURE_AUTH_SALT', ' CbpL>SP1/)DV:H9CTb!U,-K}OZ8OMF$CG^f52t1yWF2RW4d:J?is,+.;q@D]hCu' );
define( 'LOGGED_IN_SALT',   '7~TdRv1xe:$}!KY].!5,`uwq5RPmm}+T$({+n1EpzM:~u(yG)i/N(JwA|cffB|>8' );
define( 'NONCE_SALT',       '^Wp4! G?<k%L33F)DT}:<jBvo5MV@T?vtUT$KTbG&*U;m=g*ajyBX7?s}|3- x}v' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
