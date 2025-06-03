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
        <link rel="stylesheet" href="assets/css/footer.css">
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

                    <div class="column lg-7 md-6 stack-on-1000 s-footer__bottom-left">
                        <h4 class="footer-title">Stay Connected!</h4>
                        <p class="footer-contact">Get the latest updates through our newsletter.</p>

                        <div class="column footersletter">
                            <div class="subscribe-form s-footer__subscribe">
                                <form action="subscribe.php" method="POST" style="max-width: 500px;">
                                    <input type="email" name="email" class="u-fullwidth text-center" placeholder="Your Email" required>
                                    <input type="submit" value="Subscribe" class="btn btn--primary u-fullwidth">
                                </form>
                            </div>
                        </div>

                        <p class="footer-subtitle">Your personal information is protected. View our Privacy Policy.</p>
                    </div>
                </div>
            </footer>
        
        </div>

        <script src="assets/js/script.js"></script>
    </body>
</html>