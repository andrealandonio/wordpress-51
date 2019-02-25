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

// Database settings
define('DB_NAME', 'wordpress_51');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd1$y_^(wJXO&-o$C0|-]iNJ5r,pbj-`Js0M&.v0mH./{UaW:,twd+7#ktGh@`Cq!' );
define( 'SECURE_AUTH_KEY',  '^N(_HTirm0 Xb ,w/GU (7n1X*GJA[F)7x1xq&Mf).yuI8b_Rvdd;M(Ufc7}J8L3' );
define( 'LOGGED_IN_KEY',    ' <?H|6.+d;H6Bavb*:&m<iGk2a;`O&Sdr|? RXe[A~>wNm=}?3yGf!e[p3JTQ|?-' );
define( 'NONCE_KEY',        'Y%iD{u^D4nKSkm-VfcSlv<o[}755~b$G,q/tnHej tZFFc)5lA{TGPE>&gCFO}A<' );
define( 'AUTH_SALT',        'PqHjQpMf|3Y#pgeraU<+t>ERnA^T_tb%?q3}djOxV_[S8JtU5/Wq[U#TD>BJjM>0' );
define( 'SECURE_AUTH_SALT', '|A;x** O%i1WmHKneu;[9Zzf%6@S!?WgV3|3Pw&_,3myxY cusmE+[In yxVX^S~' );
define( 'LOGGED_IN_SALT',   '}Z)3dd`(9F?S,yCZr%g}BF,3%xK!.U7K@dslP)T+e]0&fJYw`*P+M9UJX>7a:B%<' );
define( 'NONCE_SALT',       'o)#&9Jv5IFs1*uKS/564-#aQ.?,ngOsp>+515)>iW[gi{Z>Lsl^.0A[6ZjO!iu+ ' );

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
define('WP_DEBUG', false);

// Custom settings
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_POST_REVISIONS', 0);
define('AUTOSAVE_INTERVAL', 1800);
define('WP_AUTO_UPDATE_CORE', false);

// Network settings
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wordpress51.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');