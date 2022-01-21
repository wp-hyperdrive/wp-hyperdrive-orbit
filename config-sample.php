<?php

define('DB_NAME', 'example-com');
define('DB_USER', 'highfive');
define('DB_PASSWORD', 'highfive');
define('DB_HOST', 'example-com-db');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 */
define('AUTH_KEY', 'put your unique phrase here');
define('SECURE_AUTH_KEY', 'put your unique phrase here');
define('LOGGED_IN_KEY', 'put your unique phrase here');
define('NONCE_KEY', 'put your unique phrase here');
define('AUTH_SALT', 'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT', 'put your unique phrase here');
define('NONCE_SALT', 'put your unique phrase here');

$table_prefix = 'hf_';

define('WP_HOME', 'http://example-com.test');
define('WP_SITEURL', WP_HOME . '/cms');
define('WP_CONTENT_URL', WP_HOME . '/app');
define('WP_PLUGIN_URL', WP_HOME . '/app/plugins');
define('WP_CONTENT_DIR', __DIR__ . '/public/app');
define('WP_PLUGIN_DIR', __DIR__ . '/public/app/plugins');
define('PLUGINDIR', WP_PLUGIN_DIR);

define('WP_USE_THEMES', true);
define('WP_ENVIRONMENT_TYPE', 'local'); // local, development, staging, production
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', __DIR__ . sprintf('/logs/%s-debug.log', date('Y-m')));
define('WP_DEBUG_DISPLAY', false);
define('WP_POST_REVISIONS', 3);

define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', false);

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '256M');

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
// require_once('vendor/autoload.php');
require_once ABSPATH . 'wp-settings.php';
