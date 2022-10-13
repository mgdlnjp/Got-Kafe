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
define( 'DB_NAME', 'efryyppq_xsGsDCQlz' );

/** MySQL database username */
define( 'DB_USER', 'efryyppq_sxj9C8nQC' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hcBwRTNuCo4ye4lsweAymcwYeApTxuiq' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'isi|Dt|!2tty8_DpQ8QjuagIkJTKzZom+q.pIRtjhZg(ZF-$,JOu]dNvXur4w!6@' );
define( 'SECURE_AUTH_KEY',   'K;<8[GFzY+&;$ko838S/Y/8=Sj3Q0e<yI&`ZHWjx/g]_8QBdzjE`ZxFi)X]wA}uq' );
define( 'LOGGED_IN_KEY',     'msX,7G8ZS2qWdDCyeX;O7p7]X8Y|PDN4qbH1[paC=9-T),N7e5{-j%i=joiW[^?u' );
define( 'NONCE_KEY',         '0S?bSVbJr]a[eo)NfV5Mi42Pl3v V1Amn3,GL^> 4A<+&+$-vC}|:2h-%*dTpA-6' );
define( 'AUTH_SALT',         ')F(80G{dG4t{2(}dmtU6Qwf$Pm(bk^9#6R?_{u[cEq#UOyd:0m*y,8ZS[I-Q`;<u' );
define( 'SECURE_AUTH_SALT',  '}!@dih/dPsQ.A}PCWffDH>YS ogRiwNSTcFoY-QiiN@3/PXUV+U<H@bqc+^kTF.-' );
define( 'LOGGED_IN_SALT',    'W)L7% ]DBmpM101m0Jq!GYsD-^ir`hWD[R_DL/#v}J1X &X2xPl:{.4j=Qo)@utT' );
define( 'NONCE_SALT',        'kbILd]ZU8GNrLfA<wFW`Ais2%96^j[ MbW^B[qw7mdhz*;K&N@)-RzfrlehS_UvH' );
define( 'WP_CACHE_KEY_SALT', '2gzU]vt$1A/wrAEz4GV3]TpYh2SWXyzv|oJD)LL  $`:lK[HFLQim%^Z/!M`3E)>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
