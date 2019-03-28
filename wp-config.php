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
define( 'DB_NAME', 'onlabtest' );

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
define( 'AUTH_KEY',         'R`W_h/K;8L IeG2wB;3WuR*!~ulYpgsUx1#U{rOUc|5o,u&9+ww{oIQ>n?U1$exi' );
define( 'SECURE_AUTH_KEY',  'y$DoEtA$r]99!VvH-4-R~Y^ch*|qh=bJ9jI_fG3hdF6%9r;7LSq(Nb5f]!3-nLaG' );
define( 'LOGGED_IN_KEY',    '>[zD0fG`y|Dt8)Hqf}SyY,Y&DL.BMxMP#xt<qI.g}`8:tli-qw.j/0;=1VJNf(N{' );
define( 'NONCE_KEY',        'K,^Gd4&y-!@]&Jt{*.YxMr@Af{F.+ j|&VD-QLVB}Y|ewFA5UM5v{F>~1Sc{oGv`' );
define( 'AUTH_SALT',        '!8:3$P1=&UlS2U?[Lz^Hn-(*ADRE&wGb.i42SSRsOt+PPNXADuZiBn7IaLS7s%>V' );
define( 'SECURE_AUTH_SALT', '{lfzE3LO0Je[m6)/u.*7rwc438Jq@CA8;RH(KB5+HxHge$Yc 2^h42DX&Yr-(nO*' );
define( 'LOGGED_IN_SALT',   '$>Cg2oXpQ?8p@9c;B;t?0wZU/#T-RjAs[:_Om~5RW{`fB-X*#Mp Y|L>RDnCn|(;' );
define( 'NONCE_SALT',       '0LF?8SxgWuEmnC:^u1I+KKvz~8o*63>QPcxYeNu1Qx/.HVnj(!(L)P~V>Z9V9!#9' );

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
