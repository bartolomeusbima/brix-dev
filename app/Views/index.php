<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
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
                    <a href="<?= base_url('assets/videos/trailer-competition-series.mp4') ?>" id="hero-trailer-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;">
                            <path d="M7 6v12l10-6z"></path>
                        </svg>
                        COMPETITION SERIES TRAILER
                    </a>
                </div>
            </div>
            <div class="column lg-6 tab-8 mob-10">
                <img id="hero-photo" src="<?= base_url('assets/images/photos/index/intro-bg.jpg') ?>" alt="">
            </div>
        </div>
    </section>
<?= $this->endSection() ?>