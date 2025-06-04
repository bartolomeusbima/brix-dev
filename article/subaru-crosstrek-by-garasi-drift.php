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

        <link rel="stylesheet" href="../assets/css/root.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/navbar.css">
        <link rel="stylesheet" href="../assets/css/article-page.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/vendor/css/vendor.css">
    </head>
    <body>
        <div id="preloader">
            <img src="../assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="s-pagewrap">

            <header class="menu__wrapper">
                <div class="menu__bar">
                    <div class="menu__block">
                        <div class="menu__bar__logo">
                            <a class="logo" href="../index.php">
                                <img src="../assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                            </a>
                        </div>

                        <a class="menu__bar__toggle" href="/index.php"><span>Menu</span></a>
                    </div>
                    <nav class="menu__navigation">
                        <ul class="menu__navigation__page">
                            <li class="list" onclick="location.href='../index.php'">
                                <button>
                                    <a href="../index.php" style="text-decoration: none; color: white">Home</a>
                                </button>
                            </li>
                            <li class="list products">
                                <button class="btn-products">
                                    <a>Products</a>
                                    <img src="../assets/images/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="../assets/images/icons/icon-arrow.svg" class="mobile-arrow-products">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="../street-series.php">
                                                <li>
                                                    <img src="../assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Better Cooling. Daily Confidence.</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="../competition-series.php">
                                                <li>
                                                    <img src="../assets/images/icons/icon-disc-competition.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Competition Series</div>
                                                        <p>Track-Proven. Maximum Durability.</p>
                                                    </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- START MOBILE VIEW DROPDOWN PRODUCTS -->
                            <a href="../street-series.php" style="text-decoration: none; color: white">
                                <li class="list products list-mobile-products" onclick="location.href='street-series.php'">
                                    <button>
                                        <img src="../assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="../competition-series.php">
                                <li class="list products list-mobile-products" onclick="location.href='competition-series.php'">
                                    <button>
                                        <img src="../assets/images/icons/icon-disc-competition.svg" alt="Homepage">
                                        <a>Competition Series</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN PRODUCTS -->
                            <li class="list information">
                                <button class="btn-information">
                                    <a>Informations</a>
                                    <img src="../assets/images/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="../assets/images/icons/icon-arrow.svg" class="mobile-arrow-information">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="../testimony.php">
                                                <li>
                                                    <img src="../assets/images/icons/icon-testimony.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="../warranty-statement.php">
                                                <li>
                                                    <img src="../assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="../privacy-policy.php">
                                                <li>
                                                    <img src="../assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Privacy Policy</div>
                                                        <p>Read our privacy policy</p>
                                                    </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- START MOBILE VIEW DROPDOWN INFORMATIONS -->
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='testimony.php'">
                                    <button>
                                        <img src="../assets/images/icons/icon-testimony.svg" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='warranty-statement.php'">
                                    <button>
                                        <img src="../assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='index.php'">
                                    <button>
                                        <img src="../assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
                                        <a>Privacy Policy</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN INFORMATIONS -->
                            <li class="list" onclick="location.href='distributors.php'">
                                <button>
                                    <a href="../distributors.php" style="text-decoration: none; color: white">Distributors</a>
                                </button>
                            </li>
                            <li class="list article" onclick="location.href='../article.php'" style="margin-top: 0;">
                                <button>
                                    <a href="../article.php" style="text-decoration: none; color: white">Article</a>
                                </button>
                            </li>
                        </ul>
                        <ul class="menu__navigation__social">
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=6281284746544" target="_blank" rel="noopener noreferrer">
                                    <span class="icon icon-whatsapp"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/brixperformanceid" target="_blank" rel="noopener noreferrer">
                                    <span class="icon icon-instagram"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@brixperformance?_t=ZS-8uJPDgflzdJ&_r=1" target="_blank" rel="noopener noreferrer">
                                    <span class="icon icon-tiktok"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tokopedia.com/brix" target="_blank" rel="noopener noreferrer">
                                    <span class="icon icon-tokopedia"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section class="article">
                <div class="article-head">
                    <div class="column">
                        <div class="article-category">
                            <p>STREET SERIES</p>
                        </div>
                        <h2 class="article-title">
                            Subaru Crosstrek by Garasi Drift.
                        </h2>
                        <h5 class="article-subtitle">
                            Built to Slide. Engineered to Stop.
                        </h5>
                        <div class="date">
                            <p>April 15, 2025</p>
                        </div>
                    </div>
                </div>
                <div class="article-body">
                    <div class="column">
                        <div class="article-body-wrapper">
                            <div class="column lg-12 photo">
                                <img src="../assets/images/photos/articles/17/header.jpg">
                            </div>
                            <div class="column lg-12 text">
                                <p>
                                    Garasi Drift has taken the unconventional path with their latest build, turning a Subaru Crosstrek into a fully capable drift machine for the Southeast Asia Drift Series. Known for bold ideas and proven execution, Garasi Drift chose the BRIX Performance Street Series to handle one of the most critical aspects of drifting: braking.
                                </p>
                                <p>
                                    While the Crosstrek is typically seen as a mild crossover, this version has been completely transformed. With a stripped interior, reinforced chassis, and drift-tuned suspension, every component is built for purpose. But without consistent, reliable stopping power, none of it matters. That’s why the Street Series rotors are a key part of this setup.
                                </p>
                            </div>
                            <div class="column lg-12 photo">
                                <img src="../assets/images/photos/articles/17/01.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-12 text">
                                <p>
                                    Engineered with a drilled and slotted face, the BRIX Street Series delivers improved heat dissipation and pedal feel, essential during high-speed transitions and clutch kicks. Treated with our proprietary SOLIDCAST® heat-treatment process, these rotors resist warping and surface stress, making them ideal for repeated hard braking under extreme conditions.
                                </p>
                                <p>
                                    Whether the car is entering a corner sideways or scrubbing speed mid-drift, the BRIX Performance Street Series ensures control stays in the driver's hands. It’s the perfect blend of daily driveability and track-focused reliability.
                                </p>
                            </div>

                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/02.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/03.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/04.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/05.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    Looking to upgrade your own build with BRIX Performance? Our full range, including the Street Series installed on this Crosstrek, is available through our <a href="https://www.tokopedia.com/brix" target="_blank" rel="noopener noreferrer">Official Tokopedia Store</a> for fast and reliable access. Prefer to talk to a specialist? Chat with us directly via <a href="https://api.whatsapp.com/send?phone=6281284746544" target="_blank" rel="noopener noreferrer">WhatsApp Business</a> for consultation, installation support, or custom setup advice. You can also check with our <a href="../distributors.php" target="_blank" rel="noopener noreferrer">official distributors</a> in your city for product availability and support.
                                </p>
                            </div>

                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/06.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/07.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/08.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>
                            <div class="column lg-6 mob-12 photo">
                                <img src="../assets/images/photos/articles/17/09.jpg">
                                <div class="caption">
                                    <p></p>
                                </div>
                            </div>

                            <div class="column lg-12 text">
                                <p>
                                    Catch the full behind-the-scenes build and track footage on <a href="https://youtu.be/p28K8Op_Gek?si=YXI1iXvtzSPq4R6b" target="_blank" rel="noopener noreferrer">Garasi Drift’s YouTube channel</a> and see why the right brakes make all the difference.
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
                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../article/brix-performance-at-campus-auto-contest-2025.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENT</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="../assets/images/photos/articles/18/header.jpg" alt="">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../article/subaru-crosstrek-by-garasi-drift.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="../assets/images/photos/articles/17/header.jpg" alt="">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../article/bmw-e36-enhanced.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="../assets/images/photos/articles/16/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='../article/subaru-wrx-vb-equipped-with-competition-series.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="../assets/images/photos/articles/15/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
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
                        </div>
                    </div>
                </div>
            </section>

            <footer class="s-footer">
                <div class="s-footer__bottom_mid row-footer">
                    <div class="column lg-3 md-4 stack-on-1000 s-footer__bottom-left">
                        <h4 class="footer-title">Contact</h4>
                        <div class="footer__contact">
                            <a href="https://api.whatsapp.com/send?phone=6281284746544" target="_blank">
                                <p class="whatsapp">0812-8474-6544</p>
                            </a>
                            <p class="phone">0812-8474-6544</p>
                            <a href="mailto:brixperformance@gmail.com">
                                <p class="mail">brixperformance@gmail.com</p>
                            </a>
                        </div>
                        <div class="footer__social_media">
                            <ul class="footer__social_media__list">
                                <li><a href="https://www.instagram.com/brixperformanceid" target="_blank"><span class="icon icon-instagram"></span></a></li>
                                <li><a href="https://www.tiktok.com/@brixperformance" target="_blank"><span class="icon icon-tiktok"></span></a></li>
                                <li><a href="https://www.tokopedia.com/brix" target="_blank"><span class="icon icon-tokopedia"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/brix-performance" target="_blank"><span class="icon icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="column lg-4 md-6 stack-on-1000 s-footer__bottom-left">
                        <h4 class="footer-title">Stay Connected!</h4>
                        <p class="footer-contact">Get the latest updates through our newsletter.</p>

                        <div class="column footersletter">
                            <div class="subscribe-form s-footer__subscribe">
                                <form id="newsletter-form">
                                    <div id="form-fields" style="display: flex; width: 100%">
                                        <input type="email" name="email" id="newsletter-email" class="u-fullwidth text-center" style="width: 75%;" placeholder="Your Email" required>
                                        <button type="submit" class="btn btn--primary u-fullwidth subscribe-button" style="width: 25%;">
                                            <img src="../assets/images/icons/icon-arrow.svg" alt="Subscribe" style="transform: rotate(-90deg); height: 25px;">
                                        </button>
                                    </div>
                                    <p id="thank-you-msg" class="footer-subtitle" style="display: none; margin-top: 1rem;">Thanks for subscribing!</p>
                                </form>

                            </div>
                        </div>

                        <p class="footer-subtitle">Your personal information is protected. View our Privacy Policy.</p>
                    </div>
                </div>
            </footer>
        
        </div>

        <script src="../assets/vendor/js/plugins.js"></script>
        <script src="../assets/js/script.js"></script>
        
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