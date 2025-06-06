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
                            <p>COMPETITION SERIES</p>
                        </div>
                        <h2 class="article-title">
                            Jazz GD3 Garage One.
                        </h2>
                        <h5 class="article-subtitle">
                            Garage One's Honda Jazz GD3 Enhanced with BRIX Competition Series.
                        </h5>
                        <div class="date">
                            <p>October 31, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="article-body">
                    <div class="column">
                        <div class="article-body-wrapper">
                            <div class="column lg-12 photo">
                                <img src="/assets/images/photos/articles/04/header.jpg">
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    The Honda Jazz, also known as the Honda FIT, has been an automotive legend in Indonesia since 2002. However, what's truly grabbing attention this time is the yellow, Pikachu-themed Honda Jazz GD3, driven by drifter @sara.choi and influencer @edwartanzil from the Garage One team. This car is always in the spotlight, especially when tearing up the track during track days at Sentul Circuit. Despite being around for a long time, the charm of this legendary Jazz never fades—always looking cool and ready for thrilling action at every opportunity!
                                </p>
                            </div>

                            <div class="column lg-12 photo">
                                <img src="/assets/images/photos/articles/04/01.jpg">
                                <div class="caption">
                                    <p>Close-up of BRIX Performance Competition Series on Garage One's Jazz GD3.</p>
                                </div>
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    During track days, braking performance is crucial to achieving the best times. Quick and accurate braking is essential to control the car in corners without losing speed. That’s where the BRIX Performance Competition Series comes in as the ultimate solution. This braking system is designed to deliver maximum braking feel, ideal for racing and track days. The braking setup used includes BRIX Performance Competition Series rotors with Endless ME20 brake pads.
                                </p>
                                <p>
                                    The @garage.one team has chosen BRIX Performance as their trusted braking partner to deliver the best performance on the track. With BRIX, you can experience safer and more optimal braking every time you hit the track!
                                </p>
                            </div>

                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/04/02.jpg">
                                <div class="caption">
                                    <p>Close-up of BRIX Performance Competition Series and Endless Brake Pad on Garage One's Jazz GD3.</p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="/assets/images/photos/articles/04/03.jpg">
                                <div class="caption">
                                    <p>Close-up of BRIX Performance Competition Series and Endless Brake Pad without wheel installed on Garage One's Jazz GD3.</p>
                                </div>
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    <b>Specification: </b> Brake Pad Endless, BRIX Competition Series Brake Disc.
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