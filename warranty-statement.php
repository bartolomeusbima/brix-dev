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
                            LIMITED<br>
                            WARRANTY STATEMENT
                        </h2>
                        
                        <div class="date">
                            <p>Updated on May 25, 2025</p>
                        </div>

                        <div class="info-body-wrapper">

                            <div class="column lg-12 text">
                                <p>
                                    <b>BRIX Performance</b> warrants that all its automotive spare parts are <b>free from defects in materials and workmanship</b> under normal use and service, for a period of <b>12 months</b> or <b>12,000 kilometers</b> (whichever comes first) from the <b>original date of purchase</b>.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                A. WHO IS COVERED
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    This warranty applies only to the original purchaser of the product and is non-transferable.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                B. WHAT IS COVERED
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    This warranty covers BRIX Performance products that:
                                </p>
                                <ul>
                                    <li>
                                        Are properly installed by qualified personnel.
                                    </li>
                                    <li>
                                        Are used under normal driving conditions.
                                    </li>
                                    <li>
                                        Have not been modified, misused, or subjected to abuse (e.g. competitive racing, off-road use unless specified).
                                    </li>
                                </ul>
                            </div>

                            <h5 class="info-subtitle">
                                C. WHAT IS NOT COVERED
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    This warranty does NOT cover:
                                </p>
                                <ul>
                                    <li>
                                        Normal wear and tear (e.g. brake pads, rotor surface discoloration).
                                    </li>
                                    <li>
                                        Improper installation or use with incorrect vehicle specs.
                                    </li>
                                    <li>
                                        Damage from accidents, abuse, or negligence.
                                    </li>
                                    <li>
                                        Use with incompatible or low-quality brake pads.
                                    </li>
                                    <li>
                                        Products used in competitive motorsport or off-road conditions (unless specified).
                                    </li>
                                    <li>
                                        Surface rust, noise, or cosmetic issues that do not affect safety or performance.
                                    </li>
                                </ul>
                            </div>

                            <h5 class="info-subtitle">
                                D. WARRANTY CLAIM PROCESS
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    To file a warranty claim:
                                </p>
                                <ol>
                                    <li>
                                        Contact BRIX Performance at brixperformance@gmail.com or +62 812 8474 6544 within the warranty period.
                                    </li>
                                    <li>
                                        Provide proof of purchase and a clear explanation of the issue (photos, mechanic report, etc.).
                                    </li>
                                    <li>
                                        If requested, return the defective part for inspection.
                                    </li>
                                </ol>
                                <p>
                                    For more information regarding this warranty statement, please email us at brixperformance@gmail.com.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                E. OUR COMMITMENT
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    If the defect is confirmed under warranty, BRIX Performance will:
                                </p>
                                <ul>
                                    <li>
                                        Replace the defective part free of charge, OR
                                    </li>
                                    <li>
                                        Refund the original purchase price, at BRIX's sole discretion.
                                    </li>
                                </ul>
                                <p>
                                    <br>Note: Any shipping or labor costs are the responsibility of the customer unless otherwise agreed.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                F. LIMITATION OF LIABILITY
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    BRIX Performance is not liable for:
                                </p>
                                <ul>
                                    <li>
                                        Any incidental or consequential damages, including vehicle downtime, labor fees, towing, or loss of use.
                                    </li>
                                    <li>
                                        Any other indirect costs or damages beyond the defective part itself.
                                    </li>
                                </ul>
                            </div>

                            <h5 class="info-subtitle">
                                G. LEGAL RIGHTS
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    This warranty gives you specific legal rights. You may also have additional rights under local consumer protection laws, which may vary by region.
                                </p>
                            </div>

                            <h5 class="info-subtitle">
                                Need Help or Have Questions?
                            </h5>

                            <div class="column lg-12 text">
                                <p>
                                    If you have any questions about this warranty or need assistance with a claim, our team is ready to help.
                                </p>
                                <p>
                                    Please reach out to us via:
                                </p>
                                <p>
                                    WhatsApp Business: +62 812 8474 6544
                                </p>
                                <p>
                                    Email: brixperformance@gmail.com
                                </p>
                                <p>
                                    <br>We’re committed to ensuring your experience with BRIX Performance is reliable, safe, and fully supported.
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