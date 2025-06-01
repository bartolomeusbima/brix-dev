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

        <link rel="stylesheet" href="<?= base_url('assets/css/root.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/vendor/css/vendor.css') ?>">
    </head>
    <body>
        <div id="preloader">
            <img src="assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="page-wrapper">

            <header class="menu__wrapper">
                <div class="menu__bar">
                    <div class="menu__block">
                        <div class="menu__bar__logo">
                            <a class="logo" href="<?= site_url('/') ?>">
                                <img src="<?= base_url('assets/images/logos/logo-brix.svg') ?>" alt="BRIX Performance Logo">
                            </a>
                        </div>
                        <a class="menu__bar__toggle" href="#0"><span>Menu</span></a>
                    </div>

                    <nav class="menu__navigation">
                        <ul class="menu__navigation__page">
                            <li class="list" onclick="location.href='<?= site_url('/') ?>'">
                                <button>
                                    <a href="<?= site_url('/') ?>" style="text-decoration: none; color: white">Home</a>
                                </button>
                            </li>
                            <li class="list products">
                                <button class="btn-products">
                                    <a>Products</a>
                                    <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" alt="Homepage">
                                </button>
                                <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" class="mobile-arrow-products">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="<?= site_url('street-series') ?>">
                                                <li>
                                                    <img src="<?= base_url('assets/images/icons/icon-disc-street.svg') ?>" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Better Cooling. Daily Confidence.</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="<?= site_url('competition-series') ?>">
                                                <li>
                                                    <img src="<?= base_url('assets/images/icons/icon-disc-competition.svg') ?>" alt="Homepage">
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

                            <!-- Mobile Products -->
                            <a href="<?= site_url('street-series') ?>" style="text-decoration: none; color: white">
                                <li class="list products list-mobile-products">
                                    <button>
                                        <img src="<?= base_url('assets/images/icons/icon-disc-street.svg') ?>" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="<?= site_url('competition-series') ?>">
                                <li class="list products list-mobile-products">
                                    <button>
                                        <img src="<?= base_url('assets/images/icons/icon-disc-competition.svg') ?>" alt="Homepage">
                                        <a>Competition Series</a>
                                    </button>
                                </li>
                            </a>

                            <li class="list information">
                                <button class="btn-information">
                                    <a>Informations</a>
                                    <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" alt="Homepage">
                                </button>
                                <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" class="mobile-arrow-information">
                                <div class="dropdown__wrapper">
                                    <div class="dropdown">
                                        <ul class="list-items-with-description">
                                            <a href="<?= site_url('testimony') ?>">
                                                <li>
                                                    <img src="<?= base_url('assets/images/icons/icon-testimony.svg') ?>" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="<?= site_url('warranty-statement') ?>">
                                                <li>
                                                    <img src="<?= base_url('assets/images/icons/icon-warranty-statement.svg') ?>" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="<?= site_url('privacy-policy') ?>">
                                                <li>
                                                    <img src="<?= base_url('assets/images/icons/icon-privacy-policy.svg') ?>" alt="Homepage">
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

                            <!-- Mobile Informations -->
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='<?= site_url('testimony') ?>'">
                                    <button>
                                        <img src="<?= base_url('assets/images/icons/icon-testimony.svg') ?>" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='<?= site_url('warranty-statement') ?>'">
                                    <button>
                                        <img src="<?= base_url('assets/images/icons/icon-warranty-statement.svg') ?>" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='<?= site_url('privacy-policy') ?>'">
                                    <button>
                                        <img src="<?= base_url('assets/images/icons/icon-privacy-policy.svg') ?>" alt="Homepage">
                                        <a>Privacy Policy</a>
                                    </button>
                                </li>
                            </a>

                            <li class="list" onclick="location.href='<?= site_url('distributors') ?>'">
                                <button>
                                    <a href="<?= site_url('distributors') ?>" style="text-decoration: none; color: white">Distributors</a>
                                </button>
                            </li>
                            <li class="list article" onclick="location.href='<?= site_url('article') ?>'">
                                <button>
                                    <a href="<?= site_url('article') ?>" style="text-decoration: none; color: white">Article</a>
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

            <?= $this->renderSection('content') ?>

            <footer class="s-footer">
                <div class="s-footer__bottom_mid row-footer">
                    <div class="column lg-3 md-4 stack-on-1000 s-footer__bottom-left">

                        <h4 class="footer-title">Contact</h4>

                        <div class="footer__contact">
                            <a href="https://api.whatsapp.com/send?phone=6281284746544" target="_blank" rel="noopener noreferrer">
                                <p class="whatsapp">0812-8474-6544</p>
                            </a>
                            <p class="phone">0812-8474-6544</p>
                            <a href="mailto:brixperformance@gmail.com">
                                <p class="mail">brixperformance@gmail.com</p>
                            </a>
                        </div>

                        <div class="footer__social_media">
                            <ul class="footer__social_media__list">
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
                                <li>
                                    <a href="https://www.linkedin.com/company/brix-performance" target="_blank" rel="noopener noreferrer">
                                        <span class="icon icon-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="column lg-7 md-6 stack-on-1000 s-footer__bottom-left">
                        <h4 class="footer-title">Stay Connected!</h4>
                        <p class="footer-contact">Get the latest updates through our newsletter.</p>

                        <div class="column footersletter">
                            <div class="subscribe-form s-footer__subscribe">
                                <form id="mc-form" class="mc-form" style="max-width: 500px;">
                                    <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center"
                                        placeholder="Your Email"
                                        title="The domain portion of the email address is invalid (the portion after the @)."
                                        pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\\.\w{2,})+$"
                                        required>
                                    <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary u-fullwidth">
                                </form>
                            </div>
                        </div>

                        <p class="footer-subtitle">Your personal information is protected. View our <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>.</p>
                    </div>
                </div>
            </footer>
        
        </div>

        <script src="<?= base_url('assets/vendor/js/plugins.js') ?>"></script>
        <script src="<?= base_url('assets/js/script.js') ?>"></script>
    </body>
</html>