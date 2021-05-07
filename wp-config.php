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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vt*|q({!PM&oZ/~^8=XqBG/#P<U-)=ALqg0:)^JCn}V=x{.6H*PN&hBNNOnVJ>Ca' );
define( 'SECURE_AUTH_KEY',  'c@s;U2kn4Nm6,ygnUG@F<U9N: &KZ(FOxMp^lw*xnMp|v:te_bW7kOJHex3Nl^v&' );
define( 'LOGGED_IN_KEY',    ';eS>RuD?QfSBT%m4Nvkc$},tDnP2p)KZxD5*=[HJB>-meExmoi^pOUbmAk/HwX)o' );
define( 'NONCE_KEY',        't>*C{Y$HflU=gc*BSKv,md52111U}K>&[ymwQ+Ukujm BS+n2vNLJ3.pV%?j,%Y.' );
define( 'AUTH_SALT',        'a914 $S:J:i[-IPFibJI(AhRrnF^|wTSe<f5({l*@xaj<7T]O*dv+L?]dJPrw~1U' );
define( 'SECURE_AUTH_SALT', '5,J63T&uKkjIO>:it V91[%Pr*Qb;t9xUP$gkyT>parLD2.o,BCm!^#:;rl+np$h' );
define( 'LOGGED_IN_SALT',   'K:jsycr|>*a*XQ2qeTI9frGv;0.aXUPzIb3DO]OGLN^ArXw9,{knO)HDw>l3)A!c' );
define( 'NONCE_SALT',       'TG3buKCnp7H2_C#XL1&$7]onNKeYYu}w8P[OH*V xN#c=_{*_l?~h4F+h;Y&0sxg' );

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
