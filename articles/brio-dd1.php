<?php
    $basePath = '/';
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

        <link rel="stylesheet"href="<?= $basePath ?>assets/css/root.css">
        <link rel="stylesheet"href="<?= $basePath ?>assets/css/style.css">
        <link rel="stylesheet"href="<?= $basePath ?>assets/css/navbar.css">
        <link rel="stylesheet"href="<?= $basePath ?>assets/css/article-page.css">
        <link rel="stylesheet"href="<?= $basePath ?>assets/css/footer.css">
        <link rel="stylesheet"href="<?= $basePath ?>assets/vendor/css/vendor.css">
    </head>
    <body>
        <div id="preloader">
            <img src="/assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="s-pagewrap">

            <?php
                $basePath = '/';
                include '/templates/navbar.php';
            ?>

            <section class="article">
                <div class="article-head">
                    <div class="column">
                        <div class="article-category">
                            <p>STREET SERIES</p>
                        </div>
                        <h2 class="article-title">
                            Street Series on Brio DD1.
                        </h2>
                        <h5 class="article-subtitle">
                            City-Ready Braking Performance for Honda Brio Enthusiasts.
                        </h5>
                        <div class="date">
                            <p>November 28, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="article-body">
                    <div class="column">
                        <div class="article-body-wrapper">
                            <div class="column lg-12 photo">
                                <img src="/assets/images/photos/articles/07/header.jpg">
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    Honda Brio DD1 owned by one of our customers is a prime example of how a compact city car can be transformed into a high-performance machine. Known for its sleek design, fuel efficiency, and suitability for urban daily commutes, the Brio is a popular choice among drivers. However, this particular owner had a passion for track days, and the stock braking system just wasn’t cutting it for the demands of high-speed cornering and aggressive braking on the circuit.
                                </p>
                            </div>

                            <div class="column lg-12 photo">
                                <img src="/assets/images/photos/articles/07/01.jpg">
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    Seeking a solution, they turned to BRIX Performance and opted for the Street Series Disc Brakes. After upgrading, the difference was night and day. The owner noticed significantly improved braking power, with a sharper response and greater confidence to push the car to its limits. Late braking into corners became a thrilling challenge rather than a nerve-wracking gamble. Whether it’s for tight turns or quick deceleration on straightaways, the brakes now deliver a level of reliability and control that elevates the entire driving experience.
                                </p>
                            </div>

                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/07/02.jpg">
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/07/03.jpg">
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    The owner’s feedback was nothing short of glowing: the BRIX Performance Street Series transformed their Brio into a vehicle capable of handling both daily city traffic and the adrenaline-pumping demands of the track.
                                </p>
                                <p>
                                    At BRIX Performance, we specialize in providing top-tier braking solutions for every driver. Whether you’re navigating busy streets or dominating the race circuit, our products are designed to meet your needs. The Street Series offers the perfect balance of everyday drivability and performance, while the Competition Series caters to dedicated race cars.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

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
                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../articles/unleashing-the-evo-6-with-brix-performance-competition-series.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="/assets/images/photos/articles/20/header.jpg" alt="">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../articles/precision-meets-practicality-street-series-on-honda-city-hatchback.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="/assets/images/photos/articles/19/header.jpg" alt="">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../articles/brix-performance-at-campus-auto-contest-2025.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENT</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="/assets/images/photos/articles/18/header.jpg" alt="">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../articles/subaru-crosstrek-by-garasi-drift.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="/assets/images/photos/articles/17/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
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
                        </div>
                    </div>
                </div>
            </section>

            <?php
                $basePath = '/';
                include '/templates/footer.php';
            ?>
        
        </div>

        <script src="/assets/vendor/js/plugins.js"></script>
        <script src="/assets/js/script.js"></script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.getElementById("newsletter-form");
                const emailInput = document.getElementById("newsletter-email");
                const formFields = document.getElementById("form-fields");
                const thankYouMsg = document.getElementById("thank-you-msg");

                if (!form || !emailInput) return;

                form.addEventListener("submit", function (e) {
                    e.preventDefault();

                    const email = emailInput.value;
                    const formData = new URLSearchParams({ email });

                    fetch("../subscribe.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: formData
                    })
                    .then(response => response.text())
                    .then(result => {
                        if (result === "success") {
                            formFields.style.display = "none";
                            thankYouMsg.style.display = "block";
                        } else {
                            alert(result);
                        }
                    })
                    .catch(() => {
                        alert("Connection failed. Please try again.");
                    });
                });
            });
        </script>
    </body>
</html>