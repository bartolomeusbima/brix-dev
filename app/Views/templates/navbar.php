<header class="menu__wrapper">
    <div class="menu__bar">
        <div class="menu__block">
            <div class="menu__bar__logo">
                <a class="logo" href="<?= site_url() ?>">
                    <img src="<?= base_url('assets/images/logos/logo-brix.svg') ?>" alt="BRIX Performance Logo">
                </a>
            </div>
            <a class="menu__bar__toggle" href="#0"><span>Menu</span></a>
        </div>

        <nav class="menu__navigation">
            <ul class="menu__navigation__page">
                <li class="list"><a href="<?= site_url() ?>">Home</a></li>
                <li class="list products">
                    <a href="#">Products <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" alt=""></a>
                    <ul class="dropdown">
                        <li><a href="<?= site_url('street-series') ?>">Street Series</a></li>
                        <li><a href="<?= site_url('competition-series') ?>">Competition Series</a></li>
                    </ul>
                </li>
                <li class="list information">
                    <a href="#">Informations <img src="<?= base_url('assets/images/icons/icon-arrow.svg') ?>" alt=""></a>
                    <ul class="dropdown">
                        <li><a href="<?= site_url('testimony') ?>">Testimony</a></li>
                        <li><a href="<?= site_url('warranty-statement') ?>">Warranty Statement</a></li>
                        <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                    </ul>
                </li>
                <li class="list"><a href="<?= site_url('distributors') ?>">Distributors</a></li>
                <li class="list"><a href="<?= site_url('article') ?>">Article</a></li>
            </ul>
            <ul class="menu__navigation__social">
                <li><a href="https://api.whatsapp.com/send?phone=6281284746544" target="_blank"><span class="icon icon-whatsapp"></span></a></li>
                <li><a href="https://www.instagram.com/brixperformanceid" target="_blank"><span class="icon icon-instagram"></span></a></li>
                <li><a href="https://www.tiktok.com/@brixperformance" target="_blank"><span class="icon icon-tiktok"></span></a></li>
                <li><a href="https://www.tokopedia.com/brix" target="_blank"><span class="icon icon-tokopedia"></span></a></li>
            </ul>
        </nav>
    </div>
</header>