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
define( 'DB_NAME', 'restaurent' );

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
define( 'AUTH_KEY',         's{K$FJ,[w S(si/hGh#ILVh(o~c(7jA1^}BJQuo/?vG)^cVpukT|f r=Grvd/qYu' );
define( 'SECURE_AUTH_KEY',  '`=Jj_1H*cm+z`yfkPT_Z0wGAIf(s?VbW8~_%OR?z}iV^wOi#BZ1#ObI1UVk7;[5@' );
define( 'LOGGED_IN_KEY',    'lp*t_v#hG5O^x1E<^I6SFlkvHs8]9&O6xtO8O(nRTS}mJ3Ydqla1h8S=mxp6?;`z' );
define( 'NONCE_KEY',        '*z17?jItm:f]mDvkLvUpG]1SD|oQ()c=KD_ G[|Be?L:/pLl!7<Sq/gx*L]pmh]E' );
define( 'AUTH_SALT',        '^v>L~OdISn466,I2/KW+#rxMhJkG#JY{3[,>5|wn2zByM!`{Y_.Fgp*XRw8 .7gs' );
define( 'SECURE_AUTH_SALT', ']aKK^]{8v_&yPWcC~Os.)Fl$(}%#%Bl@vuso68Vij #}t>ko64JseOveymJ>iF@}' );
define( 'LOGGED_IN_SALT',   't(!M!o>LcHWB}iamyCD<2(kdkQC?2w5DZK7$rwvOfsdp|CxGY`W}(wtp]ljf,#Uk' );
define( 'NONCE_SALT',       'Kyrp>dt#Co$:)#I,N7>JQ{{kOF|wd}7Ev3XCd=OX6$&k<lg%M1{@Ju_j*uOyS?44' );

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
