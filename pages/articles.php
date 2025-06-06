<?php
    require 'data/articles.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BRIX Performance</title>

        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JYYS6CNFN8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-JYYS6CNFN8');
        </script>

        <link rel="stylesheet" href="assets/css/root.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/article.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/vendor/css/vendor.css">
    </head>
    <body>
        <div id="preloader">
            <img src="assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="s-pagewrap">

            <?php
                $basePath = '';
                include 'templates/navbar.php';
            ?>

            <section class="recent-articles">
                <div class="recent-articles-head">
                    <div class="column">
                        <h1 class="recent-articles-title">
                            ARTICLES
                        </h1>
                    </div>
                </div>

                <div class="filters">
                    <button class="filter-btn active" data-filter="filter-all">ALL</button>
                    <button class="filter-btn" data-filter="filter-competition-series">COMPETITION-SERIES</button>
                    <button class="filter-btn" data-filter="filter-street-series">STREET-SERIES</button>
                    <button class="filter-btn" data-filter="filter-event">EVENTS</button>
                </div>

                <div class="recent-articles-body">
                    <div class="column">
                        <div class="recent-articles-body-wrapper">

                            <?php foreach ($articles as $article): ?>
                                <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-<?= strtolower($article['category']) ?>" onclick="location.href='article/<?= $article['slug'] ?>'">
                                    <div class="recent-articles-card">
                                        <div class="recent-articles-category">
                                            <p><?= strtoupper($article['category']) ?></p>
                                        </div>
                                        <div class="recent-articles-img">
                                            <img src="<?= $article['thumbnail'] ?>" alt="<?= htmlspecialchars($article['title']) ?>">
                                        </div>
                                        <div class="recent-articles-caption">
                                            <div class="date">
                                                <p><?= $article['date'] ?></p>
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

            <?php
                $basePath = '';
                include 'templates/footer.php';
            ?>
        
        </div>

        <script src="assets/vendor/js/plugins.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/newsletter.js"></script>

        <script>
            const buttons = document.querySelectorAll(".filter-btn");
            const cards = document.querySelectorAll(".article-card-wrapper");
        
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    document.querySelector(".filter-btn.active")?.classList.remove("active");
                    button.classList.add("active");

                    const filter = button.getAttribute("data-filter"); // e.g., "filter-dki-jakarta" or "all"

                    cards.forEach(card => {
                    if (filter === "filter-all") {
                        card.classList.remove("hidden");
                    } else {
                        if (card.classList.contains(filter)) {
                        card.classList.remove("hidden");
                        } else {
                        card.classList.add("hidden");
                        }
                    }
                    });
                });
            });
        </script>
    </body>
</html>