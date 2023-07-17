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
define( 'DB_NAME', 'zilan' );

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
define( 'AUTH_KEY',         ';KamXGlVJh|~tXTF#2ClP-TSOscSRW[WoUth*Mq!y3 /G5:UblO;ESl!t.(}Z(!u' );
define( 'SECURE_AUTH_KEY',  'RmQhdw:LU04Adg@:n7oeXanM@i(|G ]epMFL`npl/~oWpbc~{(5TOP8pbN`9`/2(' );
define( 'LOGGED_IN_KEY',    'Lc ^QFLjvty<zgD[NeKCDoD^=rVbB]wKOfG8DJB,|b3,ry_,+XTPi9U]wZ7DAkvH' );
define( 'NONCE_KEY',        'ZAPs3p!8Ri/6.!SM#oXqd,&)Nm8[&?2%fi6S)-77@>JFEO]5`O~o!^Ra fdv~(=G' );
define( 'AUTH_SALT',        '#2p,c>r=vKB{Yr>qB.F0E7W ^9#q7B<[} %7~H7AgjrMOo&=lxH+I-kwFtS3q65]' );
define( 'SECURE_AUTH_SALT', 'P4L&:v.EyEb$PJmhTQ.pXu,em;/SACmx$R.&U].`vCr.gx1)1cV]rn%6%`ir8Th)' );
define( 'LOGGED_IN_SALT',   'x$;z2-t@;z#>- ql6rqHl#3Bl s)j,i2VCl+>q@11}rz@?rog+I?BehiM`@S`i#,' );
define( 'NONCE_SALT',       '[92tCS`%Ezv3nqnu:wrW1Gy>.21PFDv+5HcJEU_gQM.3t9l(7[h ^m@E~wSA<W1s' );

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
