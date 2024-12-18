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
define( 'DB_NAME', 'knmvd' );

/** Database username */
define( 'DB_USER', 'knmvd' );

/** Database password */
define( 'DB_PASSWORD', 'knmvd1@#' );

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
define( 'AUTH_KEY',         'htdq~[B87v7,WO#=$+[O^E8kt0 7-zDIYc$Ust2eY:8,(yZP-.EM.<7$4W97esO^' );
define( 'SECURE_AUTH_KEY',  '7TN&@Otwb&p^Z.r@-lxbxjCAfK4!h0:Q[R[+uc0yx]pOXN]0Y0X*@jY7iIY>Q< a' );
define( 'LOGGED_IN_KEY',    'iKZ2j;$CjVbe2:2L0*n2iAmbL3^1V|CiEB.vwy%+2iUL5B-:Y^2><iob?-5>=$E-' );
define( 'NONCE_KEY',        'f{2EcDd8Zr<B*KV<:a<>Y*(duv&0uEqRtI_Zq`L:!tq-=g(LZSZdQCYV6&-.tRA)' );
define( 'AUTH_SALT',        '+0R8jiSX;XvlSq&_=4;_m(GfzW[c1=3^:p0GgjWy}A(?Q6AUi>^HH-;VQQZm5$C4' );
define( 'SECURE_AUTH_SALT', 'HX^%A18G?y&p(~}gdt7%yIcAk|;.L;7po1^g4W!8GR>z64ZrbyfjzwUJ69Havwjh' );
define( 'LOGGED_IN_SALT',   ';U2{R uxYN)@Nj#/r>[r&0qdY9VR6{}lVZDYg?qr3zo1R(F6!;OE<[`hhw&,NjZJ' );
define( 'NONCE_SALT',       'B,XKS!n8`_$$J 2ZhBaqc,q=}Sqa.;w<#[brZPqb0+Mdq7Hyh# 6Q A?;0mzffRd' );

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
