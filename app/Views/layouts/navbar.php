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