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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         '&4:c+0$rCYTt~U~Z%8W.5{Q,3$4.=Y^^6O<$n=%Wiw=0~U&B=P|bWc/1 !is}Ozj' );
define( 'SECURE_AUTH_KEY',  '@yn=S*aE`KYC-c7UDijC;$>SG(tjcAx>xJaO,WP/y0}Wa}?[c#V:0IM0_/K{HzTs' );
define( 'LOGGED_IN_KEY',    '-JHQ-Zn=dO6JQgxCxzc&?NO?qaZb/U19xRs8RL+7,-(3u1GA(5nU$-d8m`!-L=`0' );
define( 'NONCE_KEY',        '96u@K&>/<-oc5|7,]_,yl{*~g!hm~x*.0hz@kAwYW:07}U%dlX! dpMHA/0fq1f6' );
define( 'AUTH_SALT',        'I7).pZf-`)LEB{w{qu)^3Kt{CXUo=T>;u@AnVVlK)Y$Nbd:zbcl+dB2gw9MY(iWt' );
define( 'SECURE_AUTH_SALT', 'Yzeu#T=k9YH(Qu^u^|4Ul8lcH8m-49,7Udm!1o=F?8-o^{GfO-#vpI)3%i3MH#2;' );
define( 'LOGGED_IN_SALT',   '~0F%K hC7rVonqWP1u,tU]Mamaq2e*}0Hd#F[~CIF=:NpbClO0zr| KS0gc_YoDX' );
define( 'NONCE_SALT',       'iYt(jCrq6EuX)HagM.0~11OO*_&F`W]eoUS3]7]e9?pXBGYRH/&jYR3`lEt-WQ7Q' );

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
