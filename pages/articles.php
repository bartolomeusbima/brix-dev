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

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/unleashing-the-evo-6-with-brix-performance-competition-series.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/20/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>June 5, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Unleashing the EVO 6 with BRIX Performance Competition Series.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Proven on the Street. Engineered for the Track.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/precision-meets-practicality-street-series-on-honda-city-hatchback.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/19/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>May 25, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Precision Meets Practicality: Street Series on Honda City Hatchback.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>The Daily Brake Upgrade That Makes a Difference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='articles/brix-performance-at-campus-auto-contest-2025.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENT</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/18/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 28, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BRIX Performance at Campus Auto Contest 2025.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Connecting with the Next Generation of Automotive Enthusiasts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/subaru-crosstrek-by-garasi-drift.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/17/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 15, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Subaru Crosstrek by Garasi Drift.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Built to Slide. Engineered to Stop.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/bmw-e36-enhanced.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/16/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 19, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BMW E36 Enhanced.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Dominating the Track with BRIX Performance Competition Series.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/subaru-wrx-vb-equipped-with-competition-series.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/15/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 1, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Subaru WRX VB equipped with Competition Series.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Maximizing Track Precision with BRIX Performance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/upgrade-your-ford-fiestas-stopping-power-with-street-series.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/14/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>March 27, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Upgrade Your Ford Fiesta’s stopping power with Street Series.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>The Perfect Braking Upgrade for Your Daily Drive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/pushing-braking-limits-street-series-rotors-tested-at-sentul-circuit.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/13/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>March 27, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Pushing Braking Limits: Street Series Rotors Tested at Sentul Circuit.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Precision and Power for the Honda Civic Type R FK8.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/honda-city-hatchback-at-sentul-international-circuit.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/12/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>March 19, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Competition Series on Honda City Hatchback at Sentul Circuit.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Unlock Maximum Braking Performance for Speed Control on the Track.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/brix-performance-competition-series-for-honda-city-hatchback.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/11/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>March 6, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BRIX Performance Competition Series for Honda City Hatchback.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Elevate Your Honda City Hatchback with Track-Ready Braking Power.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/brix-performance-street-series-for-mazda-6.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/10/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>March 03, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BRIX Performance Street Series for Mazda 6.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Enhancing braking power with precision engineering.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='articles/the-elite-showcase-2025.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENTS</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/09/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>February 20, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>The Elite Showcase 2025</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>A Weekend of Style, Speed, and Innovation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='articles/brix-in-community.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENTS</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/08/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>February 12, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BRIX in Community: Rides Collective by Brill Hepa Filter.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Building Stronger Automotive Bonds Through Passion, Collaborations, and Local Car Culture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/brio-dd1.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/07/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>November 28, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>Street Series on Brio DD1</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>City-Ready Braking Performance for Honda Brio Enthusiasts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/mitsubishi-pajero-sport-4n15.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/06/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>November 21, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>Mitsubishi Pajero Sport 4N15</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Confidence Drive for Sonny Willim's Mitsubishi Pajero Sport 4N15.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/p2-wdc-pro-am-final-round.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/05/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>November 7, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>P2 Women's Drift Challenge 2024 PRO AM Final Round.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>BRIX on Tracks: Street Series at P2 WDC PRO-AM Finals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/jazz-gd3-garage-one.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/04/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>October 31, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>Jazz GD3 Garage One</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Garage One's Honda Jazz GD3 Enhanced with BRIX Competition Series.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='articles/imx-2024.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENTS</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/03/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>October 23, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>Indonesia Modification Expo 2024</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Showcasing the Future of Automotive Performance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='articles/vios-siantarman-racing-team-with-brix.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/02/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>October 3, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>Vios SiantarMan Racing Team With BRIX</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>The Toyota Vios SiantarMan Racing Team has made a notable mark in.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='articles/bmw-e36-with-brix.php'"> -->
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/<?= $article['slug'] ?>">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/01/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>October 1, 2024</p>
                                        </div>
                                        <div class="title">
                                            <a>BMW E36 With BRIX</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Street-Ready Braking Upgrade for BMW Enthusiasts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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