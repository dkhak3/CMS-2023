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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms-2023' );

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
define( 'AUTH_KEY',         'KMqxNo0}J,@3S$?MRFo :wDcdRw7l<[r1]2G#h-~s8@4R22LpL$ 66XHUnc4KOi]' );
define( 'SECURE_AUTH_KEY',  '-r*Bn8`|gHbNk+DMO{ZTBY OX5#&L!/6SCjP%P*9)JnxfZ}#:NJU1QwG{NDG7046' );
define( 'LOGGED_IN_KEY',    'mTm:;7[BC[^T//JCW`E{Q2f53%oBD`X-Ct?<L{+lV5m?eUe1%x_p=Ni1)Eg,ZL$K' );
define( 'NONCE_KEY',        'hD_nN7YY#b2tb/MGJe<9w60AV,~wh+HYYVW2>`IA|=#^}8_m8zSm/OS}a!5=0cc|' );
define( 'AUTH_SALT',        '7t3>Ov9#0fe|od tu<iu$m6VzuW}HL.T=>o*%gY5ryv*X=3c1?/L<jYD ]6~5s0m' );
define( 'SECURE_AUTH_SALT', 'Bj13Rln0^}>vW?ASNKe@zWIL4:6{3S8(3e2AH8)W<82D27ZsUpA.{L%}TWK]|!VF' );
define( 'LOGGED_IN_SALT',   'fOzL>rASosedxL6{l5~HXw1*CAq+8sB)k8^SUX:S/eYJxNyU-s0;:&WI?K[yAJ>0' );
define( 'NONCE_SALT',       ']2B!-/9fEt-6qmwJQ[xQXA:2Qq,r63[HXd%z]3Sh;iiU-ju1wNMv=M,{Wd(}Sv{M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
