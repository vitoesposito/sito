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
define( 'DB_NAME', 'db_vitoesposito' );

/** Database username */
define( 'DB_USER', 'vitoesposito' );

/** Database password */
define( 'DB_PASSWORD', 'XICy8Z%r*(dxMXQ0dR' );

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
define( 'AUTH_KEY',         'K8BR}kHZeNJ=Qqc}#92dB#u)b@(vK)q1HG.$}*iIF/GH3t0ek-K$2A8D7K?c;=y2' );
define( 'SECURE_AUTH_KEY',  'zBD[@=Lqn5y~EeyzCe|. ]Hz[iCv`v~q`||tR3s*kHAXbEo4g*[As|_z3L_u7<Xi' );
define( 'LOGGED_IN_KEY',    ':-|=o<ywrrzY{)! Y$m{]]z<SlD+.A]eS3i=|$#im,nM,~tz~JNv-:}m,}D!0ZfC' );
define( 'NONCE_KEY',        '0,otRI>HE(mR:]O)]t]_]6xYEyU/qH/()tv+xLq^||hbkGAgAF@-oq!^JmrJBZG?' );
define( 'AUTH_SALT',        '$?E2g]jj?l4@279xV;FfACbCL2@gEJ4yIL4x&?kf.Nep`t<nY2QPV3f9u3X[^%8H' );
define( 'SECURE_AUTH_SALT', '[c^w9w#N`XJ`/Jg sF<@6X[0$&fbl@Eh}k>XkGyBVz?<LQN}i7l0BMI/-F472iMb' );
define( 'LOGGED_IN_SALT',   'N>?_6&h9u6Bh#fa!UK6I}4;k^BK;H[U$bmd4#/!Qo<l_jC^mw}XqO5?IjqOdcmD$' );
define( 'NONCE_SALT',       '=PDc8@/E*S^zvL3sVUcYVoOgrYE`J[(?vI)3[WSD:5HVt;]q*RD9O.n;>G(&x_km' );

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
