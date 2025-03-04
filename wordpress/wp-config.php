<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' F.!4}rhL-CJU(Y.4)y/rTzPK65LogZ)O1gr>dG*Q{00OA:_+H0FRr*VL2cZaSfQ' );
define( 'SECURE_AUTH_KEY',  'RSD-c#SOpO5EPGPN$SQMm:f*OjiR);g+ GWGCWj3#MxJV3~xX(:~&z .pQ+#[0n+' );
define( 'LOGGED_IN_KEY',    '}*n:]_%>>>*P[<?]f>Wu}4B/m@P(R$AezG=2Gth#X3&|x+to%[5~RB9#0oNrBS,:' );
define( 'NONCE_KEY',        '-wa(@>>ycPdeKliI*N1A@+eNJTF=,bz^,^$,jCN.yK)^&n<?OAsz#&9&NTm[S8NO' );
define( 'AUTH_SALT',        'Ea`7,9])mWr7/H(NI~S`q(t~lg(CnEHjp(&JpnbV_@.FbmJ5Dl]/I5t:$dVX*mpL' );
define( 'SECURE_AUTH_SALT', '[=nu#);~t/EAChNbEj8m ]>)po:a,Zrq.#9%sQR0;h+mx*,bhN:pVVmI=.N-B=iH' );
define( 'LOGGED_IN_SALT',   '!N-la5QAr 3`m[[_(fUU4rAV-p/K+OcA_a^w8B6Q5<bj7D$6ctL.i> .y#>--oqh' );
define( 'NONCE_SALT',       'hpb2@tYIXbKPK5p#=7Eb)RIO4LeD9bQF3RD(C!XaAf6|-UKD1/[WtDd=}b.VNgiQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
