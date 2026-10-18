<?php
/**
 * Craft web bootstrap file.
 */

define('CRAFT_BASE_PATH', dirname(__DIR__));
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH . '/vendor');

require_once CRAFT_VENDOR_PATH . '/autoload.php';

if (class_exists('Dotenv\\Dotenv') && file_exists(CRAFT_BASE_PATH . '/.env')) {
    $factory = new Dotenv\Environment\DotenvFactory([
        new Dotenv\Environment\Adapter\PutenvAdapter(),
    ]);
    Dotenv\Dotenv::create(CRAFT_BASE_PATH, null, $factory)->load();
}

define('CRAFT_ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/web.php';
$app->run();
