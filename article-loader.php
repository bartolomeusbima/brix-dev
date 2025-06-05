<?php
require_once 'data/articles.php';

$slug = $_GET['slug'] ?? '';
$articleFile = '';
$articleMeta = null;

// Find article with matching slug
foreach ($articles as $article) {
    if ($article['slug'] === $slug) {
        $articleFile = $article['path'];
        $articleMeta = $article;
        break;
    }
}

if ($articleFile && file_exists($articleFile)) {
    include $articleFile;
} else {
    // Fallback to 404
    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>The article you're looking for doesn't exist.</p>";
}
