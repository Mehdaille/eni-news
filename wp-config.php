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
define( 'DB_NAME', 'eni-news' );

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
define( 'AUTH_KEY',         'i3i}e-O??pl3J,+$S{1/hk5PlT`_`NH8+?d4AnVi$H=B<,y>UKB3gz32OvBQXv%f' );
define( 'SECURE_AUTH_KEY',  'gT]-J5?uZ(jQF6))=PcSm?coTQ&?//P]}R9V1>NO!XiK[6og,[H-gA)_%J{A5;>l' );
define( 'LOGGED_IN_KEY',    'lRz!T$C<1hRj~oyhO(]OS7wyl_#g2~<7{XGi9%l-Vs:(.4=40USMFi?qC,b$t(YL' );
define( 'NONCE_KEY',        '@Nu)4e-FU5)`,e/l/WfehfD.f 49p0c&n8JyM6{#WGmGHAuL<AGYTdM+s^gT5IXf' );
define( 'AUTH_SALT',        ' ;>MrSqXUpKb3-C23lw:v$d7g!;z2h3CxntdS9 Xs9awezFw^1h%I=22qaZ2,g)c' );
define( 'SECURE_AUTH_SALT', 'g%>=9=8<,w}=87lk4_@Miv~Ir@gCO*e>sIK,~de^`Qvrnf?=T9TDL7;je6kV`W-5' );
define( 'LOGGED_IN_SALT',   '/P1wKe15GtgPcYn1!{Hji&!J:+g)]wm?s{%!E&Oh{L&XCoF>Mvo!PG_2v<rdJ72Y' );
define( 'NONCE_SALT',       'HlDz20k0:&`~ZO}Xb+L)Wc-2ldd86Q$n(QN*`w1gNE}b5|6w+@}7<`U6UeohNjqy' );

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
