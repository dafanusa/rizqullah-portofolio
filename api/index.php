<?php

// Vercel PHP runtime entrypoint. Route all requests into Laravel.
// Use /tmp for compiled Blade views since the deployment filesystem is read-only.
$viewPath = '/tmp/views';
if (!is_dir($viewPath)) {
    mkdir($viewPath, 0777, true);
}
if (getenv('VIEW_COMPILED_PATH') === false) {
    putenv('VIEW_COMPILED_PATH=' . $viewPath);
}

require __DIR__ . '/../public/index.php';
