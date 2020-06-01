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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '32512552_hotel' );

/** MySQL database username */
define( 'DB_USER', '32512552_hotel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GwYUE7_E' );

/** MySQL hostname */
define( 'DB_HOST', 'serwer2087613.home.pl' );

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
define( 'AUTH_KEY',         ')Nt2Rh}|/?aJsxP]QDqy0*~=P5[ZNEOlW8@~x n<JN,$IbCO|uPD,}P}5q=XoQm)' );
define( 'SECURE_AUTH_KEY',  '1Su=7B`G4tW_.1il;o ;DlK%yKNE6PYOOR_(49K~QK`2`*ksDu__euq`UTJ([IlS' );
define( 'LOGGED_IN_KEY',    '-B`+*W{T&h-_m)e:Vk|]$ZEF/1+3t<VO*8ekoPl4{/@cxx1,nP}>7#,Bh#`8W*(y' );
define( 'NONCE_KEY',        'I6FE,tV#i-9N|J-#3!uyfju/lcD(*&M6/a/fl>Ju~j@W_73my6{#wnsV=[n )E`r' );
define( 'AUTH_SALT',        'y2k*nQ|)M_CTymo*gd^e8ZB}hR+yCXVd>9f@=5=6*B=xamCT;Gu!~KBCA9**OM`T' );
define( 'SECURE_AUTH_SALT', 'Ow{c^.MYF7,??nt$XEI0hp&YC43Bat<53*Xwex/VBM e F:hj3!I2Rxc,,xi3g?V' );
define( 'LOGGED_IN_SALT',   'C2B+B*F,E=!}Sytqx9)p>JJpg%Uexv$SB`<61T?^*D^cvG?Z$Y&`48Cl;mP-^uEq' );
define( 'NONCE_SALT',       'xB[7.u@JH+*v0#Lq+-<G]hm8p]+p&Cx=Q2xE09pw)GDNM-Hl{F2TWpkG1SOp],U4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
