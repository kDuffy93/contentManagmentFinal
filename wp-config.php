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
define( 'DB_NAME', 'Kyle200229494' );

/** Database username */
define( 'DB_USER', 'Kyle200229494' );

/** Database password */
define( 'DB_PASSWORD', 'bZv4STXOXb' );

/** Database hostname */
define( 'DB_HOST', '172.31.22.43' );

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
define( 'AUTH_KEY',         'AnMjg`2l]qt6GhXC=q#G nU!AnwSn}li4^HOb$,D$|8>0uo7+<kOX*-BIN<CNfyU' );
define( 'SECURE_AUTH_KEY',  '%@$LVu`H.]H)]Q9}0C_9N4:eQ06PS?rgTO>?,?;gqx`#z(*{5x`W9:#y0$jH$Vg2' );
define( 'LOGGED_IN_KEY',    '+WOTrw.w#NK8_wGOmD#QU,A0aL-=ejo~nDqk-^hze;U_z-fS,wNibnoTpq1rA*SA' );
define( 'NONCE_KEY',        '2Iun .GDc06r7$~db`&~Ywj1q]iCs7uYdzL>1b-e<e(b-b6UxAqRBH>&Y1]ap.0*' );
define( 'AUTH_SALT',        '0D(m 77`;wniK2=G)r?$2:Szn!-:PDzBJOYJIC!+L{sG8pFss/K>3zBRyI2g4 t/' );
define( 'SECURE_AUTH_SALT', 'T175)r)6RLR@`xiKS*8Z=`mnh5i2{;_i(K7|3HX@1?`OD0$t!g9DRwd{b6ee0leZ' );
define( 'LOGGED_IN_SALT',   ',B()B)>i&*8AL|?gQCFLcdlZt:jT!(ya.|i*A^ujz[&~N&ASc3}X}L.-V,z^#+M@' );
define( 'NONCE_SALT',       'H*;>_e(b^k}l]pM!|a]y8!@X5R_1z~RR@Q;UQOoFza.F-~twn(K;8Zj^Kf;B8tQM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_finalProject';

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
