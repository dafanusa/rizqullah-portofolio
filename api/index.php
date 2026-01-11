<?php

// Vercel PHP runtime entrypoint. Route all requests into Laravel.
// Use /tmp for runtime caches since the deployment filesystem is read-only.
$cacheRoot = '/tmp/laravel-cache';
if (!is_dir($cacheRoot)) {
    mkdir($cacheRoot, 0777, true);
}

$viewPath = $cacheRoot . '/views';
if (!is_dir($viewPath)) {
    mkdir($viewPath, 0777, true);
}
if (getenv('VIEW_COMPILED_PATH') === false) {
    putenv('VIEW_COMPILED_PATH=' . $viewPath);
}
if (getenv('APP_SERVICES_CACHE') === false) {
    putenv('APP_SERVICES_CACHE=' . $cacheRoot . '/services.php');
}
if (getenv('APP_PACKAGES_CACHE') === false) {
    putenv('APP_PACKAGES_CACHE=' . $cacheRoot . '/packages.php');
}
if (getenv('APP_CONFIG_CACHE') === false) {
    putenv('APP_CONFIG_CACHE=' . $cacheRoot . '/config.php');
}
if (getenv('APP_ROUTES_CACHE') === false) {
    putenv('APP_ROUTES_CACHE=' . $cacheRoot . '/routes.php');
}

require __DIR__ . '/../public/index.php';
