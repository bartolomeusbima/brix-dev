<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brix Performance</title>

        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <link rel="stylesheet" href="<?= base_url('assets/css/root.css') ?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/vendor.css') ?>"> 
        <link rel="stylesheet" href="<?= base_url('assets/css/testimony.css') ?>"> 
    </head>
    <body>
        <div id="preloader">
            <img src="<?= base_url('assets/img/gifs/brix_logo.gif') ?>" alt="Loading..." id="loader"> 
        </div>

        <div id="page" class="s-pagewrap">

            <header class="menu__wrapper">
                <div class="row menu__bar">
                    <div class="menu__block">
                        <div class="menu__bar__logo">
                            <a class="logo" href="index.html">
                                <img src="assets/img-new/icons/brix.svg" alt="Homepage">
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
                                    <img src="assets/img-new/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="assets/img-new/icons/icon-arrow.svg" class="mobile-arrow-products">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="street-series.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-disc-street.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Even cooling, stable</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="competition-series.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-disc-competition.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Competition Series</div>
                                                        <p>Heat-resistant, durable</p>
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
                                        <img src="assets/img-new/icons/icon-disc-street.svg" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="competition-series.html">
                                <li class="list products list-mobile-products" onclick="location.href='competition-series.html'">
                                    <button>
                                        <img src="assets/img-new/icons/icon-disc-competition.svg" alt="Homepage">
                                        <a>Competition Series</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN PRODUCTS -->
                            <li class="list information">
                                <button class="btn-information">
                                    <a>Informations</a>
                                    <img src="assets/img-new/icons/icon-arrow.svg" alt="Homepage">
                                </button>
                                <img src="assets/img-new/icons/icon-arrow.svg" class="mobile-arrow-information">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="article.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-article.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Article</div>
                                                        <p>The latest articles and updates</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="testimony.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-testimony.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="warranty-statement.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-warranty-statement.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="privacy-policy.html">
                                                <li>
                                                    <img src="assets/img-new/icons/icon-privacy-policy.svg" alt="Homepage">
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
                                <li class="list information list-mobile-information" onclick="location.href='article.html'">
                                    <button>
                                        <img src="assets/img-new/icons/icon-article.svg" alt="Homepage">
                                        <a>Article</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='testimony.html'">
                                    <button>
                                        <img src="assets/img-new/icons/icon-testimony.svg" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='warranty-statement.html'">
                                    <button>
                                        <img src="assets/img-new/icons/icon-warranty-statement.svg" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='index.html'">
                                    <button>
                                        <img src="assets/img-new/icons/icon-privacy-policy.svg" alt="Homepage">
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
                                <a href="https://www.tokopedia.com/brix" target="_blank" rel="noopener noreferrer">
                                    <span class="icon icon-tokopedia"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
    
            <?= $this->renderSection('content') ?>

            <footer id="footer" class="s-footer target-section">

                <div class="row s-footer__bottom_mid">
                    <div class="column lg-4 tab-12 s-footer__bottom-left">
                        <h4 class="footer-title">Contact</h4>
                        <p class="footer-contact phone">0812-8474-6544</p>
                        <p class="footer-contact mail">brixperformance@gmail.com</p>

                        <div class="footer-contact-more">
                            <ul class="menu__navigation__social__footer">
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
                                    <a href="https://www.tokopedia.com/brix" target="_blank" rel="noopener noreferrer">
                                        <span class="icon icon-tokopedia"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column lg-5 tab-12 s-footer__bottom-left">
                        <h4 class="footer-title">Stay Connected!</h4>
                        <p class="footer-contact">Get the latest updates through our newsletter.</p>
                        <div class="column footer-newsletter">
                            <div class="subscribe-form s-footer__subscribe">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Your Email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                                    <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary u-fullwidth">
                                </form>
                            </div>
                        </div>
                        <p class="footer-subtitle">Your personal information is protected. View our Privacy Policy.</p>
                    </div>
                </div>
                <div class="row s-footer__bottom">

                    <div class="column lg-6 tab-12">
                        <div class="ss-copyright">
                            <span>© Copyright Brix 2024</span> 
                        </div>
                    </div>

                </div>

            </footer>

        </div>

        <script src="<?= base_url('assets/js/plugins.js') ?>"></script> 
        <script src="<?= base_url('assets/js/script.js') ?>"></script> 
    </body>
</html>