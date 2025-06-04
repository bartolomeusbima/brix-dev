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
        <link rel="stylesheet" href="assets/css/index.css">
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
                            <a class="logo" href="index.html">
                                <img src="assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                            </a>
                        </div>

                        <a class="menu__bar__toggle" href="#0"><span>Menu</span></a>
                    </div>
                    <nav class="menu__navigation">
                        <ul class="menu__navigation__page">
                            <li class="list" onclick="location.href='index.html'">
                                <button>
                                    <a href="index.html" style="text-decoration: none; color: white">Home</a>
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
                                            <a href="street-series.html">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Better Cooling. Daily Confidence.</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="competition-series.html">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-competition.svg" alt="Homepage">
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
                            <a href="street-series.html" style="text-decoration: none; color: white">
                                <li class="list products list-mobile-products" onclick="location.href='street-series.html'">
                                    <button>
                                        <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="competition-series.html">
                                <li class="list products list-mobile-products" onclick="location.href='competition-series.html'">
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
                                            <a href="testimony.html">
                                                <li>
                                                    <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="warranty-statement.html">
                                                <li>
                                                    <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="privacy-policy.html">
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
                                <li class="list information list-mobile-information" onclick="location.href='testimony.html'">
                                    <button>
                                        <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='warranty-statement.html'">
                                    <button>
                                        <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='index.html'">
                                    <button>
                                        <img src="assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
                                        <a>Privacy Policy</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN INFORMATIONS -->
                            <li class="list" onclick="location.href='distributors.html'">
                                <button>
                                    <a href="distributors.html" style="text-decoration: none; color: white">Distributors</a>
                                </button>
                            </li>
                            <li class="list article" onclick="location.href='article.html'">
                                <button>
                                    <a href="article.html" style="text-decoration: none; color: white">Article</a>
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

            <section class="hero">
                <div class="hero-bg"></div>

                <div class="hero-content">
                    <div class="column lg-6 tab-4 mob-2">
                        <h1 id="hero-title">
                            BRIX&reg;&nbsp;PERFORMANCE
                        </h1>
                        <h2 id="hero-subtitle">
                            is&nbsp;all&nbsp;about&nbsp;motorsports
                        </h2>
                        <div id="hero-trailer">
                            <a href="assets/videos/trailer-competition-series.mp4" id="hero-trailer-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M7 6v12l10-6z"></path></svg>
                                COMPETITION SERIES TRAILER
                            </a>
                        </div>
                    </div>
                    <div class="column lg-6 tab-8 mob-10">
                        <img id="hero-photo" src="assets/images/photos/index/intro-bg.jpg" alt="">
                    </div>
                </div>

            </section>

            <video loop muted autoplay="autoplay" class="responsive-video">
                <source src="assets/videos/brix-motorsport.mp4" type="video/mp4">
            </video>

            <section class="solidcast">
                <div id="solidcast-head">
                    <div class="column">
                        <h1 id="solidcast-title">
                            SOLIDCAST&reg;
                        </h1>
                        <h3 id="solidcast-subtitle">
                            <i>STYLE MEET SENSE</i>
                        </h3>
                    </div>
                </div>
                <div id="solidcast-body">
                    <div class="column">
                        <p class="solidcast-text">
                            <monument><b>SOLIDCAST</b>&reg;</monument> is BRIX Performance's cutting-edge heat-treatment technique for brake rotors, designed to enhance durability and reliability. By relieving internal stresses created during casting and CNC machining, this process ensures that the rotors are better equipped to handle high temperatures and aggressive driving conditions. With <monument><b>SOLIDCAST</b>&reg;</monument>, you can count on your brake rotors to maintain optimal performance, even under extreme heat and heavy use.
                        </p>
                        <div class="solidcast-body-wrapper">
                            <div class="column collapse lg-12">
                                <h3 id="sth-1" class="solidcast-text-head">
                                    Key Points of <b>SOLIDCAST</b>&reg;:
                                </h3>
                            </div>
                            <div id="kp-1" class="column collapse lg-6 mob-12 key-points">
                                <h5 id="sth-2" class="solidcast-text-head left">
                                    01.
                                </h5>
                                <p id="sth-3" class="solidcast-text-head left">
                                    Enhanced Durability
                                </p>
                                <p id="stt-1" class="solidcast-text left">
                                    Reduces internal stresses from casting and CNC machining, improving resistance to warping and wear.
                                </p>
                            </div>
                            <div id="kp-2" class="column collapse lg-6 mob-12 key-points">
                                <h5 id="sth-2" class="solidcast-text-head">
                                    02.
                                </h5>
                                <p id="sth-3" class="solidcast-text-head">
                                    High-Temperature Performance
                                </p>
                                <p id="stt-1" class="solidcast-text left">
                                    Capable of withstanding extreme heat and thermal cycling, ensuring consistent braking.
                                </p>
                            </div>
                            <div id="kp-3" class="column collapse lg-6 mob-12 key-points">
                                <h5 id="sth-2" class="solidcast-text-head">
                                    03.
                                </h5>
                                <p id="sth-3" class="solidcast-text-head">
                                    Aggressive Pad Compatibility
                                </p>
                                <p id="stt-1" class="solidcast-text left">
                                    Minimizes disc wear, even when paired with high-friction brake pads.
                                </p>
                            </div>
                            <div id="kp-4" class="column collapse lg-6 mob-12 key-points">
                                <h5 id="sth-2" class="solidcast-text-head">
                                    04.
                                </h5>
                                <p id="sth-3" class="solidcast-text-head">
                                    Reliable Braking
                                </p>
                                <p id="stt-1" class="solidcast-text left">
                                    Delivers dependable, long-lasting braking performance, even under demanding conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="solidcast-foot">
                    <img id="solidcast-foot-photo" src="assets/images/backgrounds/index/solidcast-bg-2.jpg" alt="">
                </div>
            </section>

            <section class="product">
                <div id="brake-disc" class="product-head">
                    <div class="column">
                        <h1 class="product-title">
                            OUR PRODUCTS
                        </h1>
                        <h5 class="product-subtitle">
                            <i>HIGH PERFORMANCE MEETS INNOVATION</i>
                        </h5>
                    </div>
                </div>
                <div class="product-body">
                    <div class="column">
                        <div class="product-body-wrapper">
                            <div class="column collapse lg-6 tab-12">
                                <h2 id="sth-1" class="product-text-head">
                                    Here are some of our disc brake products. Feel free to check them out.
                                </h2>
                            </div>
                            <div class="column collapse lg-6 tab-12">
                                <h5 id="sth-2" class="product-text-head">
                                    Both series offer advanced features and reliability, so whether you're upgrading your daily driver or pushing your vehicle to its limits on the track, BRIX Performance has the perfect brake disc for you.
                                </h5>
                            </div>
                            <div class="column collapse lg-6 tab-12 showcase">
                                <a href="#showcase-modal-street" class="showcase-modal-link">
                                    <div id="sc-1" class="showcase-card">
                                        <video loop muted autoplay="autoplay">
                                            <source src="assets/videos/product-street.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </a>
                            </div>
                            <div class="column collapse lg-6 tab-12 showcase">
                                <a href="#showcase-modal-competition" class="showcase-modal-link">
                                    <div id="sc-2" class="showcase-card">
                                        <video loop muted autoplay="autoplay">
                                            <source src="assets/videos/product-competition.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product">
                <div id="coming-soon" class="product-head">
                    <div class="column">
                        <h1 class="product-title">
                            COMING SOON
                        </h1>
                        <h5 class="product-subtitle">
                            <i>BETTER BRAKING IS JUST AROUND THE CORNER</i>
                        </h5>
                    </div>
                </div>
                <div id="coming-soon" class="product-body">
                    <div class="column">
                        <div class="product-body-wrapper">
                            <div class="row collapse">
                                <div class="column collapse">
                                    <h2 id="sth-3" class="product-text-head">
                                        An Exclusive Preview of What’s to Come.
                                    </h2>
                                </div>
                            </div>
                            <div class="row row-x-center row-y-center">
                                <img id="preview" src="assets/images/photos/index/product-brake-pad.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brix-on-tracks">
                <div id="brix-on-tracks-wrapper">
                    <img id="brix-on-tracks-photo" src="assets/images/backgrounds/index/brix-on-tracks.png" alt="">
                </div>
            </section>

            <section class="distributor">
                <div class="distributor-head">
                    <div class="column">
                        <h1 class="distributor-title">
                            Our Trusted Distributors
                        </h1>
                    </div>
                </div>
                <div class="distributor-body">
                    <div class="column">
    
                        <div class="row clients-list block-lg-one-sixth block-md-one-fourth block-tab-one-half block-stack">
    
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/1.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/2.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/3.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/4.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/5.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/6.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/7.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/8.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/9.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/10.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/11.svg" alt="">
                                </a>
                            </div>
                            <div class="column clients-list__item">
                                <a href="distributors.html">
                                    <img src="assets/images/icons/distributors/12.svg" alt="">
                                </a>
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
                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/brix-performance-at-campus-auto-contest-2025.html'">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/subaru-crosstrek-by-garasi-drift.html'">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/bmw-e36-enhanced.html'">
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

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/subaru-wrx-vb-equipped-with-competition-series.html'">
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

            <div id="showcase-modal-street" hidden>
                <div class="modal-popup">
                    <div class="row block-tab-one-half block-tab-whole">
                        <div class="column collapse modal-video">
                            <iframe src="assets/videos/product-street.mp4" frameborder='0' style="aspect-ratio: 1 !important;"></iframe>
                        </div>
                        <div class="column">
                            <div class="modal-popup__desc">
                                <h5>STREET SERIES BRAKE DISC</h5>
                                <p>BRIX Performance Street Series is our high-performance street disc. Equipped with experience, knowledge, and data from our racing division for a performance rotor that suites day to day driving. Manufactured using BRIX SOLIDCAST® heat treatment and casting technique which enables the disc to cool evenly, achieving increased dimensional stability and reduced disc internal stress. Our products comply to TUV/ISO/TS16949 standards. BRIX Performance Street Series is a direct replacement to the factory equipped brake rotor with plug and play installation.</p>
                                <div class="modal-popup__learn-more">
                                    <a href="street-series.html" class="btn btn--stroke modal-popup__learn-more-btn smoothscroll">                                                 
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="showcase-modal-competition" hidden>
                <div class="modal-popup">
                    <div class="row block-tab-one-half block-tab-whole">
                        <div class="column collapse modal-video">
                            <iframe src="assets/videos/product-competition.mp4" frameborder='0' style="aspect-ratio: 1 !important;"></iframe>
                        </div>
                        <div class="column">
                            <div class="modal-popup__desc">
                                <h5>COMPETITION SERIES BRAKE DISC</h5>
                                <p>Different from the Street Series, in Competition series BRIX Performance’s disc is designed with a slotted pattern. It’s useful for braking optimalization as it can be more linear and predictable with a higher friction coefficient. With the use of FC250, SOLIDCAST heat-treatment process, and a unique slotted pattern, it can optimize your braking sensation during higher temperature and significantly reduce the possibility of heat-checking or micro-cracking on your discs during track and competitions.</p>
                                <div class="modal-popup__learn-more">
                                    <a href="competition-series.html" class="btn btn--stroke modal-popup__learn-more-btn smoothscroll">                                               
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

        <script src="assets/vendor/js/plugins.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/newsletter.js"></script>
    </body>
</html>