<?php
if (php_sapi_name() === 'cli-server') {
    $requestUri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $filePath = __DIR__ . $requestUri;

    // Jika file atau folder yang diminta ada, biarkan PHP menangani sendiri
    if (file_exists($filePath) && !is_dir($filePath)) {
        return false;
    }

    // Jika URL root "/" atau halaman utama, arahkan ke index.php
    if ($requestUri === '/' || $requestUri === '/index.php') {
        require 'index.php';
        exit;
    }

    // Jika halaman tidak ditemukan, arahkan ke 404.php
    http_response_code(404);
    require '404.php';
    exit;
}
