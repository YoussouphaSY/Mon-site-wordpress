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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '[+]z{<+9#0U!HxwT|f]}o38:TP2b9F5Q<(5|4]}-EXosOllYpyKRxJfz9QOUd=&5' );
define( 'SECURE_AUTH_KEY',   'zWoKd>@|i0OlU$*|mGb=N(DN4Dw9qU9Hf8^5H{sI8^<1^fP)d),r9#6LAnf520uy' );
define( 'LOGGED_IN_KEY',     'aaFb`u A<g2pt-dv%FiQHT|:H;DM5%}Szk}15*V2Lgbg9`?tFtnS.NgV?+Jw9_A<' );
define( 'NONCE_KEY',         'Zw9^3%P*; S2m0$rm};;GeZ*S<ED/k[lY5Ql.PX8)cha0OLPO >w|aQ)svn.>Nfc' );
define( 'AUTH_SALT',         'E6Ey_q5C^S/E@n=aU^tLk:#Y4CjzW0=|{EUny)P}8=j(=N jJzOUskRowt7(}LLH' );
define( 'SECURE_AUTH_SALT',  'W%6ule,Wai0xHd,$]R%=TtqA3*AU3?O)(~Hm,+%#L-VDcxNHd0hb/ZWSXSO2kjH`' );
define( 'LOGGED_IN_SALT',    'KuRbGhfEr_MW`2/AH;Cg[7)`:}M7z)?)?4ts9oM@hC|bvCA880i}aCNl}X]8K+5.' );
define( 'NONCE_SALT',        'Ks?8?VpEloR0Lq:Z.Of+ta6.3Vm*aB{x@GUp&O8^p!6xo|7/U/~3 [E$eR}H@1TG' );
define( 'WP_CACHE_KEY_SALT', '02;5/[EaYsOp?[Vc/`oX|**V!J(;~7?^FsTykno)%H2+Qlaldp>n7>el,<4b=rlQ' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
