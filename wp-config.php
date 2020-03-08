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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vuthaotrang206' );

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
define( 'AUTH_KEY',         '=FT2iLj>NFr?k$<djeKgGYR+!cDm>7kxI|L4.dI$dpAE-I7g=FC|BvTG!KIvNQ!m' );
define( 'SECURE_AUTH_KEY',  'u[ Jf)OOs5;D1tV}1F^Lnu_;jbBYM}@F f! +3CV6,$!*]}H!&zm]*lL2#En~r?*' );
define( 'LOGGED_IN_KEY',    'GvM2c#e9L>TiKqeu)~7!mxB2Lm?d(jP%m7o. c2<0# pp#h^]Yg8[&W_^&[UGx;O' );
define( 'NONCE_KEY',        '`C:Wb#>abM6xA1,M2+#x5.qNy)w?b-nIb<XyTjn1`|N%2Y74fkIxB@S;zyyP8RYR' );
define( 'AUTH_SALT',        ')6f)3KE$$`+)%N8mcW7gww7c)38,2Z8O91u$/g>7l#JD=OnkCJ?kwJtAxTj^cLF.' );
define( 'SECURE_AUTH_SALT', '(:C;%./61E]b+M;;pO(C,2p,|78M5F?3lD`fuj#LWbVJ{24A: /Ln8l#B~q_{{55' );
define( 'LOGGED_IN_SALT',   'g#W`6b,T6b@LtRFT:~_#8SDp_gacqOII(TP<o=An+XJQ28qFcz%F0u%;L-${?$(e' );
define( 'NONCE_SALT',       'dWmI73UF<Uilm$FoQi`?3VGES8<MY*C @6a?,h(payt )^=rO!(#5`>gRPLfmCbn' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
