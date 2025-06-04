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

            <header class="menu__wrapper">
                <div class="menu__bar">
                    <div class="menu__block">
                        <div class="menu__bar__logo">
                            <a class="logo" href="index.php">
                                <img src="assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                            </a>
                        </div>

                        <a class="menu__bar__toggle" href="#0"><span>Menu</span></a>
                    </div>
                    <nav class="menu__navigation">
                        <ul class="menu__navigation__page">
                            <li class="list" onclick="location.href='index.php'">
                                <button>
                                    <a href="index.php" style="text-decoration: none; color: white">Home</a>
                                </button>
                            </li>
                            <li class="list products">
                                <button class="btn-products">
                                    <a>Products</a>
                                    <img src="assets/images/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="assets/images/icons/icon-arrow.svg" class="mobile-arrow-products">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="street-series.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Better Cooling. Daily Confidence.</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="competition-series.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-competition.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Competition Series</div>
                                                        <p>Track-Proven. Maximum Grip.</p>
                                                    </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- START MOBILE VIEW DROPDOWN PRODUCTS -->
                            <a href="street-series.php" style="text-decoration: none; color: white">
                                <li class="list products list-mobile-products" onclick="location.href='street-series.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="competition-series.php">
                                <li class="list products list-mobile-products" onclick="location.href='competition-series.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-disc-competition.svg" alt="Homepage">
                                        <a>Competition Series</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN PRODUCTS -->
                            <li class="list information">
                                <button class="btn-information">
                                    <a>Informations</a>
                                    <img src="assets/images/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="assets/images/icons/icon-arrow.svg" class="mobile-arrow-information">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="testimony.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="warranty-statement.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="privacy-policy.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
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
                                        <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='warranty-statement.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='index.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
                                        <a>Privacy Policy</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN INFORMATIONS -->
                            <li class="list" onclick="location.href='distributors.php'">
                                <button>
                                    <a href="distributors.php" style="text-decoration: none; color: white">Distributors</a>
                                </button>
                            </li>
                            <li class="list article" onclick="location.href='article.php'">
                                <button>
                                    <a href="article.php" style="text-decoration: none; color: white">Article</a>
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

            <section class="recent-articles">
                <div class="recent-articles-head">
                    <div class="column">
                        <h1 class="recent-articles-title">
                            ARTICLES
                        </h1>
                    </div>
                </div>

                <div class="filters">
                    <button style="font-family: 'Monument Extended Regular' !important;" class="filter-btn active" data-filter="filter-all">ALL</button>
                    <button style="font-family: 'Monument Extended Regular' !important;" class="filter-btn" data-filter="filter-competition-series">COMPETITION-SERIES</button>
                    <button style="font-family: 'Monument Extended Regular' !important;" class="filter-btn" data-filter="filter-street-series">STREET-SERIES</button>
                    <button style="font-family: 'Monument Extended Regular' !important;" class="filter-btn" data-filter="filter-event">EVENTS</button>
                </div>

                <div class="recent-articles-body">
                    <div class="column">
                        <div class="recent-articles-body-wrapper">

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='article/brix-performance-at-campus-auto-contest-2025.php'">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/subaru-crosstrek-by-garasi-drift.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/17/header.jpg" alt="">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/bmw-e36-enhanced.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/16/header.jpg" alt="">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/subaru-wrx-vb-equipped-with-competition-series.php'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/15/header.jpg" alt="">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/upgrade-your-ford-fiestas-stopping-power-with-street-series.php'">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/pushing-braking-limits-street-series-rotors-tested-at-sentul-circuit.php'">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/honda-city-hatchback-at-sentul-international-circuit.php'">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/brix-performance-competition-series-for-honda-city-hatchback.php'">
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

                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/brix-performance-street-series-for-mazda-6.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='article/the-elite-showcase-2025.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='article/brix-in-community.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/brio-dd1.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/mitsubishi-pajero-sport-4n15.php'">
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
                                            <a href="article/mitsubishi-pajero-sport-4n15.php">Mitsubishi Pajero Sport 4N15</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Confidence Drive for Sonny Willim's Mitsubishi Pajero Sport 4N15.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/p2-wdc-pro-am-final-round.php'">
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
                                            <a href="article/p2-wdc-pro-am-final-round.php">P2 Women's Drift Challenge 2024 PRO AM Final Round.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>BRIX on Tracks: Street Series at P2 WDC PRO-AM Finals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/jazz-gd3-garage-one.php'">
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
                                            <a href="article/jazz-gd3-garage-one.php">Jazz GD3 Garage One</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Garage One's Honda Jazz GD3 Enhanced with BRIX Competition Series.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-event" onclick="location.href='article/imx-2024.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-competition-series" onclick="location.href='article/vios-siantarman-racing-team-with-brix.php'">
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
                            
                            <div class="column collapse lg-4 md-6 mob-12 article-card-wrapper filter-street-series" onclick="location.href='article/bmw-e36-with-brix.php'">
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
                                            <img src="assets/images/icons/icon-arrow.svg" alt="Subscribe" style="transform: rotate(-90deg); height: 25px;">
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