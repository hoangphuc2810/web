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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'wordpress1' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '|B{CWa5XvnFe_c*g#2)=mn,[kC#`8`YC1fr?n=r1Mc_xhFak4[)NTnY 8<K@rt=9' );
define( 'SECURE_AUTH_KEY',  'Bf|qYf}aC=fMAJ.1e>x#lB5E{E;K|lBklZl4Ln%M].o{*<suL++pIpM?<)|2[8Xg' );
define( 'LOGGED_IN_KEY',    'Uut~nv%C5a2`O]wftXE8>l>K[v|M%GCthxmt_. pguM^mUu;q7HPr<4ljzvp(XNe' );
define( 'NONCE_KEY',        'V1SCp{`~7B;.kO,NO|kvOaYVk]b,VV#DLj(sfzLY6ZAbQanSRd< B~}I,zDw~,cQ' );
define( 'AUTH_SALT',        '*:F!c/64*u}$c${2,n@lgm1EL- 1+7]SRY9Hg~,OE$HwI9~U#8~h#k4 FX**3l1p' );
define( 'SECURE_AUTH_SALT', '<uomJDuEw.Tv.7+QCJ0![*.}i`_maQZ`D!MYh~m}8E|>3w!1%0D]k f-IC#^Ge^z' );
define( 'LOGGED_IN_SALT',   'rqae<d:t.ify;SIAEMwpjY+XeSPB8Rpit ^TjLIRKDM?`T^h!RPv7R(=Q`U+Nj79' );
define( 'NONCE_SALT',       'v3]+5V5U$n-mXbcL@zC%:Ov|`E}3WIG5f] zg[)XzGrkcC~+b1g:@@y({/n|H)@Z' );

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
