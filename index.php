<?php
$page = $_GET['page'] ?? 'home';
$file = __DIR__ . "/pages/{$page}.php";

if (file_exists($file)) {
    include $file;
} else {
    http_response_code(404);
    echo "Page not found.";
}
