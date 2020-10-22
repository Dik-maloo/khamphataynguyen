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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '?K:*Non/Q4~=Vx~KQz$W13R<rjn(`Z5tsfRn0nq[yL1Z7J01HL]rQP[+S!<QW=;,' );
define( 'SECURE_AUTH_KEY',  'u<;vG*:eA/d$Q1<x}&_**IJP-AenI^:dv#|`Jm.Kkd`levZOOa@qWHODFv2@t^v$' );
define( 'LOGGED_IN_KEY',    '`q=_9<8XgZ*:i{y7&UJ :nOh=#5&kcvg#}yP-WX8_e|D8INv!nS~<_f<%pOb/*4g' );
define( 'NONCE_KEY',        '2C,-.Hcm<^Rp^H!Zj|R*cWJT}Z1U?B@EHeof`0?ab>q4,!g)I8fMwq,Ys^:<m@2&' );
define( 'AUTH_SALT',        '_4CN2FgQ}vYa{o~q;59s5J@ll7yO5_Hh2WtqAQ6c4kKrNx=vjch]-~<Hi5$+Ux`Y' );
define( 'SECURE_AUTH_SALT', '`iE#UTvM&2Fwc}.z*,6l9}{{Hj245#`% 2SCq7kkR?GG zGZ2u4Q dWRXs/(859d' );
define( 'LOGGED_IN_SALT',   '_f)*K^Vt&E)i0CGBI1+OZ%P&@*dUHB7XWZ,%ei30V[v*+|UyE$ZRTEin+W7_SVf-' );
define( 'NONCE_SALT',       'K;p)QT^FA|[c1(}_7hyB1K=Y?ba4xvmEK)o#r2KeF#Y-rx:>=Yl,g{aj@@]:NRQc' );

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
