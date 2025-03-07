<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $_SERVER['HTTP_HOST'] = '127.0.0.1';
}

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This is the front controller for all HTTP requests to your application
// It doesn't matter what URI the user requests, we always send it to `index.php`
// within the public folder.

if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
