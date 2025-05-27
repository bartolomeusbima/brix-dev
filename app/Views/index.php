<?php $this->include('templates/header'); ?>
<?php $this->include('templates/navbar'); ?>

<!-- Preloader -->
<div id="preloader">
    <img src="<?= base_url('assets/images/gifs/preloader.gif') ?>" alt="Loading..." id="loader">
</div>

<div class="s-pagewrap">

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <div class="column lg-6 tab-4 mob-2">
                <h1 id="hero-title">BRIX&reg;&nbsp;PERFORMANCE</h1>
                <h2 id="hero-subtitle">is&nbsp;all&nbsp;about&nbsp;motorsports</h2>
                <div id="hero-trailer">
                    <a href="<?= base_url('assets/videos/trailer-competition-series.mp4') ?>" id="hero-trailer-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;"><path d="M7 6v12l10-6z"></path></svg>
                        COMPETITION SERIES TRAILER
                    </a>
                </div>
            </div>
            <div class="column lg-6 tab-8 mob-10">
                <img id="hero-photo" src="<?= base_url('assets/images/photos/index/intro-bg.jpg') ?>" alt="">
            </div>
        </div>
    </section>

    <video loop muted autoplay="autoplay" class="responsive-video">
        <source src="<?= base_url('assets/videos/brix-motorsport.mp4') ?>" type="video/mp4">
    </video>

    <!-- Include sections -->
    <!-- Solidcast Section -->
    <section class="solidcast">
        <div id="solidcast-head">
            <div class="column">
                <h1 id="solidcast-title">SOLIDCAST&reg;</h1>
                <h3 id="solidcast-subtitle"><i>STYLE MEET SENSE</i></h3>
            </div>
        </div>
        <div id="solidcast-body">
            <div class="column">
                <p class="solidcast-text">
                    <monument><b>SOLIDCAST</b>&reg;</monument> is BRIX Performance's cutting-edge heat-treatment technique for brake rotors, designed to enhance durability and reliability.
                </p>
                <div class="solidcast-body-wrapper">
                    <!-- Key Points -->
                    <div class="column collapse lg-12">
                        <h3 class="solidcast-text-head">Key Points of <b>SOLIDCAST</b>&reg;:</h3>
                    </div>
                    <div class="column collapse lg-6 mob-12 key-points">
                        <h5 class="solidcast-text-head left">01.</h5>
                        <p class="solidcast-text-head left">Enhanced Durability</p>
                        <p class="solidcast-text left">Reduces internal stresses, improving resistance to warping and wear.</p>
                    </div>
                    <div class="column collapse lg-6 mob-12 key-points">
                        <h5 class="solidcast-text-head">02.</h5>
                        <p class="solidcast-text-head">High-Temperature Performance</p>
                        <p class="solidcast-text left">Handles extreme heat for consistent braking.</p>
                    </div>
                    <div class="column collapse lg-6 mob-12 key-points">
                        <h5 class="solidcast-text-head">03.</h5>
                        <p class="solidcast-text-head">Aggressive Pad Compatibility</p>
                        <p class="solidcast-text left">Minimizes disc wear with high-friction pads.</p>
                    </div>
                    <div class="column collapse lg-6 mob-12 key-points">
                        <h5 class="solidcast-text-head">04.</h5>
                        <p class="solidcast-text-head">Reliable Braking</p>
                        <p class="solidcast-text left">Long-lasting, dependable performance under pressure.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="solidcast-foot">
            <img id="solidcast-foot-photo" src="<?= base_url('assets/images/backgrounds/index/solidcast-bg-2.jpg') ?>" alt="">
        </div>
    </section>

    <!-- Product Section -->
    <section class="product">
        <div class="product-head">
            <div class="column">
                <h1 class="product-title">OUR PRODUCTS</h1>
                <h5 class="product-subtitle"><i>HIGH PERFORMANCE MEETS INNOVATION</i></h5>
            </div>
        </div>
        <div class="product-body">
            <div class="column">
                <div class="product-body-wrapper">
                    <div class="column collapse lg-6 tab-12">
                        <h2 class="product-text-head">Here are some of our disc brake products.</h2>
                    </div>
                    <div class="column collapse lg-6 tab-12">
                        <h5 class="product-text-head">Whether for daily driving or track racing, BRIX has the perfect brake disc for you.</h5>
                    </div>
                    <div class="column collapse lg-6 tab-12 showcase">
                        <a href="#showcase-modal-street" class="showcase-modal-link">
                            <div class="showcase-card">
                                <video loop muted autoplay="autoplay">
                                    <source src="<?= base_url('assets/videos/product-street.mp4') ?>" type="video/mp4">
                                </video>
                            </div>
                        </a>
                    </div>
                    <div class="column collapse lg-6 tab-12 showcase">
                        <a href="#showcase-modal-competition" class="showcase-modal-link">
                            <div class="showcase-card">
                                <video loop muted autoplay="autoplay">
                                    <source src="<?= base_url('assets/videos/product-competition.mp4') ?>" type="video/mp4">
                                </video>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Distributors -->
    <section class="distributor">
        <div class="distributor-head">
            <div class="column">
                <h1 class="distributor-title">Our Trusted Distributors</h1>
            </div>
        </div>
        <div class="distributor-body">
            <div class="column">
                <div class="row clients-list block-lg-one-sixth block-md-one-fourth block-tab-one-half block-stack">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <div class="column clients-list__item">
                            <a href="<?= site_url('distributors') ?>">
                                <img src="<?= base_url("assets/images/icons/distributors/{$i}.svg") ?>" alt="Distributor <?= $i ?>">
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Preview -->
    <section class="recent-articles">
        <div class="recent-articles-head">
            <div class="column">
                <h1 class="recent-articles-title">RECENT ARTICLES</h1>
            </div>
        </div>
        <div class="recent-articles-body">
            <div class="column">
                <div class="recent-articles-body-wrapper">
                    <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='<?= site_url('article/brix-performance-at-campus-auto-contest-2025') ?>'">
                        <div class="recent-articles-card">
                            <div class="recent-articles-category"><p>EVENT</p></div>
                            <div class="recent-articles-img">
                                <img src="<?= base_url('assets/images/photos/articles/18/header.jpg') ?>" alt="">
                            </div>
                            <div class="recent-articles-caption">
                                <div class="date"><p>April 28, 2025</p></div>
                                <div class="title"><a>BRIX Performance at Campus Auto Contest 2025.</a></div>
                                <div class="subtitle"><p>Connecting with the Next Generation of Automotive Enthusiasts.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <div id="showcase-modal-street" hidden>
        <div class="modal-popup">
            <div class="row block-tab-one-half block-tab-whole">
                <div class="column collapse modal-video">
                    <iframe src="<?= base_url('assets/videos/product-street.mp4') ?>" frameborder='0' style="aspect-ratio: 1 !important;" allow="loop"></iframe>
                </div>
                <div class="column">
                    <div class="modal-popup__desc">
                        <h5>STREET SERIES BRAKE DISC</h5>
                        <p>High-performance street disc with SOLIDCAST&reg; heat treatment. Built for everyday performance and OEM plug & play installation.</p>
                        <div class="modal-popup__learn-more">
                            <a href="<?= site_url('street-series') ?>" class="btn btn--stroke modal-popup__learn-more-btn smoothscroll">Learn More</a>
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
                    <iframe src="<?= base_url('assets/videos/product-competition.mp4') ?>" frameborder='0' style="aspect-ratio: 1 !important;" allow="loop"></iframe>
                </div>
                <div class="column">
                    <div class="modal-popup__desc">
                        <h5>COMPETITION SERIES BRAKE DISC</h5>
                        <p>Slotted pattern with FC250 material and SOLIDCAST&reg;. Designed for heat resistance and linear braking on track.</p>
                        <div class="modal-popup__learn-more">
                            <a href="<?= site_url('competition-series') ?>" class="btn btn--stroke modal-popup__learn-more-btn smoothscroll">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->include('templates/footer-bar'); ?>
<?php $this->include('templates/footer'); ?>
