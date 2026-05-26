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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cli' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}[*vxc5lxN&?}eK%<Q5hck/pVJWu9Mttm*~h9=3;jVOk5EK6+6,cs #G.m QTI4{' );
define( 'SECURE_AUTH_KEY',   'BA{`lYw`Br_-mUsR[,iwQ7AT;KUh|9y+?7,60LOG2dMQZzH~^MGlpK;hCz9my+&f' );
define( 'LOGGED_IN_KEY',     'I-pr{C]tm<~6mlS,%RqT}|&{OB$%$Lh2URhSwP8 ,kMhza]7UgHnB:d6,CPX<yRV' );
define( 'NONCE_KEY',         '_9rGVq>f.07|!Qk3jdh t103r7rr&3]*O&sc{yelQE(o81l ZQKL u58&58/4&yN' );
define( 'AUTH_SALT',         '0QrX~H:v:cd&HF!`sK%X2p)R4dzKQG9a@&+Pv`_9Vo`kJ^f7(O*T8Dv!d#b2}q;8' );
define( 'SECURE_AUTH_SALT',  'F[(J;c_r6F{ojmn.J|#FBxjB9pN/`@ZaNOl$o,i[3UPKfwIxa-/d0<PQ81x#9vd`' );
define( 'LOGGED_IN_SALT',    'W_82zIh~OQV&8>_<[HO)|SeaaQW2L?CImSOW7#`nVQ<;6W h^J%M471Nv>?vT7!#' );
define( 'NONCE_SALT',        'aor.9@j@4wNXMTMF2s+O(<lvt Dlt7{$gWy!.)/Xx:q?yYaAkyaP?+D?Ve4)y@bO' );
define( 'WP_CACHE_KEY_SALT', 'cA<bmq;]RHfG-0hO_FNTl; v9Y1-/tDqcoa:3TTY/kv=a`3XrHmTI*Lww5*y;jE6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
