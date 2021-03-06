<?php

define( 'WP_CACHE', true ); // Added by WP Rocket


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
define('DB_NAME', "removed for privacy");

/** MySQL database username */
define('DB_USER', "removed for privacy');

/** MySQL database password */
define('DB_PASSWORD', 'removed for privacy!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'igtzocu5q1z6hdukk0f5vtcty5iju5x0obzp4bcejt1cin9xx0jki22yvdj9wyjj');
define('SECURE_AUTH_KEY',  'gtm7mcvti0qgu6cumhtz4qvld8yfnizk3bxu7idhrrkskmq6rrqwhxmgt8p4rc8b');
define('LOGGED_IN_KEY',    'iuwzwxzms8wrsaf11nrtigzgdqjqxvyia4wkcayqcquolzi9nomvkrik1vvoyp9w');
define('NONCE_KEY',        'sx8wrmicg0ghpqrajlctzcaaayn0qprp7yukwwwvr2z11vhkcn8tubebphlggubj');
define('AUTH_SALT',        'wa9wnkkzuova5fu9vnvnxhqkyiurvgmrmp6wjbxechtpb4w8dxrse85rhalpejta');
define('SECURE_AUTH_SALT', 'we7xeakglh7waiuyexphttdbaujqyp6fpfsmuf1c7ipfx0oqxqper6amjg8l11wy');
define('LOGGED_IN_SALT',   'qyw2fbmujyqvlwv5htsonjegor2rwsnb5hf3m1yth9v5prtm94swdematfm1uiyr');
define('NONCE_SALT',       '3bzrmtvn2fnrxfepct99tqoubovjwrchsspejpyzdqddh3gkydfxjxvibic9lctt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpbd_';

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

define( 'WP_AUTO_UPDATE_CORE', '' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
