<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ucsdaim');

/** MySQL database username */
define('DB_USER', 'ucsdaim');

/** MySQL database password */
define('DB_PASSWORD', 'aimHigher1');

/** MySQL hostname */
define('DB_HOST', 'ucsdaim.db.4901422.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'i$HBY_)6vT|4$KIR~>b+Gr=<o/|h^pvO^V5w+*=ixvh#Y_-.5}c)h7.!ZC$,tlil');
define('SECURE_AUTH_KEY',  '`G&0!nk+s[bolwTa&{`#+<+PS4@p7 &+Z}e-.qZ<<9;/t>)A$O,Zg{=R#qL3)rl0');
define('LOGGED_IN_KEY',    '1U}lWOp63J9!wMo3#Ab|4+dgU;+prlcRJNtKqaQ0q*^=<0a&-o[i)ii[R8cJd==Q');
define('NONCE_KEY',        '3!CdA_Ow4~|75U u9{EK<_aq{EV,h+y&^-#=V?(~#rVx IJFDO{F(]=@z;rja-d9');
define('AUTH_SALT',        '*M-_w6$An( AUTQAde{Ck@mXl-::MQf,0pRhJSR+O5I>A|-,Z}x0E%foi+|--b$z');
define('SECURE_AUTH_SALT', 'DMIM&toL+$/mR4~c>pr%*!hO*#G;(QHO{m_/C$|}ErQk7MrjUirHfi6&:/4]>:{I');
define('LOGGED_IN_SALT',   'pB8XW0J2K -ok|j2D]=Rj rEf)EYic8g>4wOCc+ 6:E|[SE-0&)J|Q^E`VqbsAjq');
define('NONCE_SALT',       'Oxsrbw`dHkW?WA4cMaj]W+oa##,a6i 4n]j1+]+T+8n+%dCss9.HV<h#/s(K</Ok');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
