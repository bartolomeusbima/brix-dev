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
        <link rel="stylesheet" href="assets/css/information.css">
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

                        <a class="menu__bar__toggle" href="/index.php"><span>Menu</span></a>
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
                                                        <p>Track-Proven. Maximum Durability.</p>
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
                            <li class="list article" onclick="location.href='article.php'" style="margin-top: 0;">
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

            <section class="info">
                <div class="info-body">
                    <div class="column">
                        <h3 class="info-brix-label">
                            BRIX Performance
                        </h3>

                        <h2 class="info-title">
                            PRIVACY POLICY
                        </h2>
                        
                        <div class="date">
                            <p>Updated on May 25, 2025</p>
                        </div>

                        <div class="info-body-wrapper">

                            <div class="column lg-12 text">
                                <p>
                                    At BRIX Performance, your privacy matters. This Privacy Policy explains what personal information we collect, how we use it, and what rights you have in relation to that information.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                A. INFORMATION WE COLLECT
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    We may collect the following types of personal data:
                                </p>
                                <ul>
                                    <li>
                                        Identification data: name, phone number, email address
                                    </li>
                                    <li>
                                        Order-related data: shipping address, product preferences, order history
                                    </li>
                                    <li>
                                        Technical data: IP address, browser type, device info, geolocation
                                    </li>
                                    <li>
                                        Interaction data: messages via WhatsApp Business and Instagram DM
                                    </li>
                                    <li>
                                        Browsing behavior: pages visited, time spent, referral sources
                                    </li>
                                </ul>
                                <p>
                                    <br>We do not collect sensitive personal data such as biometric, health, or financial records.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                B. HOW WE USE YOUR INFORMATION
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    Your information helps us:
                                </p>
                                <ul>
                                    <li>
                                        Process and fulfill orders
                                    </li>
                                    <li>
                                        Respond to your inquiries or requests
                                    </li>
                                    <li>
                                        Send order confirmations, updates, or promotional offers
                                    </li>
                                    <li>
                                        Improve website performance and content
                                    </li>
                                    <li>
                                        Detect and prevent fraud or misuse
                                    </li>
                                    <li>
                                        Provide after-sales support and consultation via WhatsApp
                                    </li>
                                </ul>
                                <p>
                                    <br>We only process your data where we have a legal basis, such as your consent or a contractual obligation (e.g., order processing).
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                C. COOKIES AND TRACKING TECHNOLOGIES
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    We use cookies to enhance your experience. These include:
                                </p>
                                <ul>
                                    <li>
                                        Functional cookies: remember your preferences and shopping activity
                                    </li>
                                    <li>
                                        Analytics cookies: monitor site traffic (e.g., Google Analytics)
                                    </li>
                                    <li>
                                        Marketing cookies: help us deliver relevant ads (e.g., Meta Pixel)
                                    </li>
                                </ul>
                                <p>
                                    <br>You can manage cookie settings in your browser or opt out through third-party tools.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                D. THIRD-PARTY SERVICES
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    We may share limited data with:
                                </p>
                                <ul>
                                    <li>
                                        Payment providers (e.g., GoPay) for secure transaction processing
                                    </li>
                                    <li>
                                        Logistics providers for order delivery
                                    </li>
                                    <li>
                                        Messaging tools (e.g., WhatsApp Business, Instagram DM) to assist with customer service.
                                    </li>
                                </ul>
                                <p>
                                    <br>These platforms may store or analyze data under their respective privacy policies.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                E. DATA RETENTION AND STORAGE
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    We retain your personal data only as long as necessary:
                                </p>
                                <ul>
                                    <li>
                                        Order and customer records: retained for up to 5 years
                                    </li>
                                    <li>
                                        Chat and inquiry logs: retained for internal support and quality checks
                                    </li>
                                    <li>
                                        Analytics data: retained for 24 months
                                    </li>
                                </ul>
                                <p>
                                    <br>Data is securely stored on cloud servers operated by trusted service providers in Singapore and other regions with adequate protection standards.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                F. YOUR RIGHTS
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    You have the right to:
                                </p>
                                <ul>
                                    <li>
                                        Access the data we hold about you
                                    </li>
                                    <li>
                                        Request correction or updates
                                    </li>
                                    <li>
                                        Request deletion ("right to be forgotten")
                                    </li>
                                    <li>
                                        Withdraw consent for marketing communications
                                    </li>
                                    <li>
                                        Lodge a complaint with a supervisory authority
                                    </li>
                                </ul>
                                <p>
                                    <br>To exercise any of these rights, contact us using the details below.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                CONTACT US
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    For any privacy-related questions, data access requests, or concerns, please contact:
                                </p>
                                <p>
                                    Email: brixperformance@gmail.com
                                </p>
                                <p>
                                    Phone/WhatsApp: +62 812 8474 6544
                                </p>
                                <p>
                                    Instagram DM: @brixperformance
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                POLICY UPDATES
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    We may revise this Privacy Policy from time to time. The latest version will always be available on this page, with the date of last update shown at the top.                                
                                </p>
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
    </body>
</html>