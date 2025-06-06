<?php
    $basePath = '../';
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
                $basePath = '../';
                include '../templates/navbar.php';
            ?>

            <section class="article">
                <div class="article-head">
                    <div class="column">
                        <div class="article-category">
                            <p>EVENT</p>
                        </div>
                        <h2 class="article-title">
                            BRIX Performance at Campus Auto Contest 2025.
                        </h2>
                        <h5 class="article-subtitle">
                            Connecting with the Next Generation of Automotive Enthusiasts.
                        </h5>
                        <div class="date">
                            <p>April 28, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="article-body">
                    <div class="column">
                        <div class="article-body-wrapper">
                            <div class="column lg-12 photo">
                                <img src="/assets/images/photos/articles/18/header.jpg">
                            </div>
                            <div class="column lg-12 text">
                                <p>
                                    BRIX Performance took center stage at Campus Auto Contest 2025, an event hosted by BLEU Prasmul that united the automotive community’s brightest students, builders, and enthusiasts. With a striking booth display, BRIX delivered a clear message that real braking performance isn’t limited to the racetrack.
                                </p>
                                <p>
                                    Throughout the day, the booth drew attention from car enthusiasts, students, and fellow exhibitors. Many were eager to learn more about BRIX’s Street Series and Competition Series, leading to in-depth discussions on braking reliability, heat resistance, and our proprietary SOLIDCAST® technology. The hands-on display gave visitors the chance to feel the weight, inspect the precision drilling, and appreciate the functional beauty of our rotors.
                                </p>
                            </div>
                            
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/18/01.jpg">
                                <div class="caption">
                                    <p>
                                        BMW M4 parked at QBIG BSD as one of the participant of Campus Auto Contest 2025.
                                    </p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/18/02.jpg">
                                <div class="caption">
                                    <p>
                                        BRIX Performance booth display featuring Street and Competition Series rotors with spin-the-wheel giveaway.
                                    </p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/18/03.jpg">
                                <div class="caption">
                                    <p>
                                        Close-up of BRIX Performance merchandise, stickers, and product catalogues at our booth.
                                    </p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/18/04.jpg">
                                <div class="caption">
                                    <p>
                                        Rear view of modified cars at Campus Auto Contest 2025 hosted at QBIG BSD.
                                    </p>
                                </div>
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    What truly set the BRIX booth apart was the level of interaction. Our team connected directly with visitors, answering questions, sharing installation insights, and explaining the importance of proper brake upgrades. These conversations helped fuel curiosity and build genuine trust in BRIX as a brand founded by real car enthusiasts.
                                </p>
                                <p>
                                    One of the highlights of the day was our giveaway campaign. Attendees who followed BRIX on social media and connected via WhatsApp Business received exclusive merchandise, reinforcing our commitment to engaging with the community both online and offline.
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
                $basePath = '../';
                include '../templates/footer.php';
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