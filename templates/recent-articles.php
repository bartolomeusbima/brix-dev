<?php
// Reliable base path detection based on physical directory
$basePath = (basename(dirname(__FILE__)) === 'templates') ? '../' : '';

// Load articles AFTER basePath is resolved
require_once $basePath . 'data/articles.php';

// Filter logic
$filterCategory = $filterCategory ?? null;
$recentArticles = [];

foreach ($articles as $article) {
    if ($filterCategory === null || strtolower($article['category']) === strtolower($filterCategory)) {
        $recentArticles[] = $article;
    }
    if (count($recentArticles) === 4) break;
}
?>

<section class="recent-articles">
    <div class="recent-articles-head">
        <div class="column">
            <h1 class="recent-articles-title">
                RECENT ARTICLES
            </h1>
        </div>
    </div>
    <div class="recent-articles-body">
        <div class="column">
            <div class="recent-articles-body-wrapper">
                <?php foreach ($recentArticles as $article): ?>
                    <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='<?= $basePath . $article['path'] ?>'">
                        <div class="recent-articles-card">
                            <div class="recent-articles-category">
                                <p><?= strtoupper($article['category']) ?></p>
                            </div>
                            <div class="recent-articles-img">
                                <img src="<?= $basePath . $article['thumbnail'] ?>" alt="<?= htmlspecialchars($article['title']) ?>">
                            </div>
                            <div class="recent-articles-caption">
                                <div class="date">
                                    <p><?= date('M j, Y', strtotime($article['date'])) ?></p>
                                </div>
                                <div class="title">
                                    <a><?= $article['title'] ?></a>
                                </div>
                                <div class="subtitle">
                                    <p><?= $article['subtitle'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
