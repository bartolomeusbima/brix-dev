<?php
$basePath = isset($basePath) ? $basePath : '';
?>

<header class="menu__wrapper">
    <div class="menu__bar">
        <div class="menu__block">
            <div class="menu__bar__logo">
                <a class="logo" href="<?= $basePath ?>index.php">
                    <img src="<?= $basePath ?>assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                </a>
            </div>

            <a class="menu__bar__toggle" href="<?= $basePath ?>index.php"><span>Menu</span></a>
        </div>

        <nav class="menu__navigation">
            <ul class="menu__navigation__page">
                <li class="list" onclick="location.href='<?= $basePath ?>index.php'">
                    <button><a href="<?= $basePath ?>index.php" style="text-decoration: none; color: white">Home</a></button>
                </li>

                <li class="list products">
                    <button class="btn-products">
                        <a>Products</a>
                        <img src="<?= $basePath ?>assets/images/icons/icon-arrow.svg" alt="Arrow">
                    </button>
                    <img src="<?= $basePath ?>assets/images/icons/icon-arrow.svg" class="mobile-arrow-products">
                    <div class="dropdown__wrapper">
                        <div class="dropdown">
                            <ul class="list-items-with-description">
                                <a href="<?= $basePath ?>street-series.php">
                                    <li>
                                        <img src="<?= $basePath ?>assets/images/icons/icon-disc-street.svg" alt="Street">
                                        <div class="item-title">
                                            <div class="item-subtitle">Street Series</div>
                                            <p>Better Cooling. Daily Confidence.</p>
                                        </div>
                                    </li>
                                </a>
                                <a href="<?= $basePath ?>competition-series.php">
                                    <li>
                                        <img src="<?= $basePath ?>assets/images/icons/icon-disc-competition.svg" alt="Competition">
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
                <a href="<?= $basePath ?>street-series.php" style="text-decoration: none; color: white">
                    <li class="list products list-mobile-products" onclick="location.href='<?= $basePath ?>street-series.php'">
                        <button>
                            <img src="<?= $basePath ?>assets/images/icons/icon-disc-street.svg" alt="Street">
                            <a>Street Series</a>
                        </button>
                    </li>
                </a>
                <a href="<?= $basePath ?>competition-series.php" style="text-decoration: none; color: white">
                    <li class="list products list-mobile-products" onclick="location.href='<?= $basePath ?>competition-series.php'">
                        <button>
                            <img src="<?= $basePath ?>assets/images/icons/icon-disc-competition.svg" alt="Competition">
                            <a>Competition Series</a>
                        </button>
                    </li>
                </a>

                <li class="list information">
                    <button class="btn-information">
                        <a>Informations</a>
                        <img src="<?= $basePath ?>assets/images/icons/icon-arrow.svg" alt="Arrow">
                    </button>
                    <img src="<?= $basePath ?>assets/images/icons/icon-arrow.svg" class="mobile-arrow-information">
                    <div class="dropdown__wrapper">
                        <div class="dropdown">
                            <ul class="list-items-with-description">
                                <a href="<?= $basePath ?>testimony.php">
                                    <li>
                                        <img src="<?= $basePath ?>assets/images/icons/icon-testimony.svg" alt="Testimony">
                                        <div class="item-title">
                                            <div class="item-subtitle">Testimony</div>
                                            <p>Customer's testimony</p>
                                        </div>
                                    </li>
                                </a>
                                <a href="<?= $basePath ?>warranty-statement.php">
                                    <li>
                                        <img src="<?= $basePath ?>assets/images/icons/icon-warranty-statement.svg" alt="Warranty">
                                        <div class="item-title">
                                            <div class="item-subtitle">Warranty Statement</div>
                                            <p>Read our warranty statement</p>
                                        </div>
                                    </li>
                                </a>
                                <a href="<?= $basePath ?>privacy-policy.php">
                                    <li>
                                        <img src="<?= $basePath ?>assets/images/icons/icon-privacy-policy.svg" alt="Privacy">
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

                <!-- Mobile Info -->
                <a href="<?= $basePath ?>testimony.php" style="text-decoration: none; color: white">
                    <li class="list information list-mobile-information" onclick="location.href='<?= $basePath ?>testimony.php'">
                        <button>
                            <img src="<?= $basePath ?>assets/images/icons/icon-testimony.svg" alt="Testimony">
                            <a>Testimony</a>
                        </button>
                    </li>
                </a>
                <a href="<?= $basePath ?>warranty-statement.php" style="text-decoration: none; color: white">
                    <li class="list information list-mobile-information" onclick="location.href='<?= $basePath ?>warranty-statement.php'">
                        <button>
                            <img src="<?= $basePath ?>assets/images/icons/icon-warranty-statement.svg" alt="Warranty">
                            <a>Warranty Statement</a>
                        </button>
                    </li>
                </a>
                <a href="<?= $basePath ?>privacy-policy.php" style="text-decoration: none; color: white">
                    <li class="list information list-mobile-information" onclick="location.href='<?= $basePath ?>privacy-policy.php'">
                        <button>
                            <img src="<?= $basePath ?>assets/images/icons/icon-privacy-policy.svg" alt="Privacy">
                            <a>Privacy Policy</a>
                        </button>
                    </li>
                </a>

                <li class="list" onclick="location.href='<?= $basePath ?>distributors.php'">
                    <button>
                        <a href="<?= $basePath ?>distributors.php" style="text-decoration: none; color: white">Distributors</a>
                    </button>
                </li>
                <li class="list article" onclick="location.href='<?= $basePath ?>article.php'" style="margin-top: 0;">
                    <button>
                        <a href="<?= $basePath ?>article.php" style="text-decoration: none; color: white">Article</a>
                    </button>
                </li>
                <li class="list" onclick="location.href='<?= $basePath ?>warranty-statement.php'">
                    <button>
                        <a href="<?= $basePath ?>warranty-statement.php" style="text-decoration: none; color: white">Warranty Statement</a>
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
                    <a href="https://www.tokopedia.com/brix-performance" target="_blank" rel="noopener noreferrer">
                        <span class="icon icon-tokopedia"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>