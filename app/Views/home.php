<!DOCTYPE html>
<html lang="en" class="no-js" >
    <head>

        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brix Performance</title>

        <script>
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <!-- CSS
        ================================================== -->
        <link href="<?= base_url('assets/css/vendor.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

        <!-- favicons
        ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/icons/apple-touch-icon.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/icons/favicon-32x32.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/icons/favicon-16x16.png') ?>">
        <link rel="manifest" href="site.webmanifest">
    </head>


    <body id="top">

        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <img src="<?= base_url('assets/images/gifs/brix_logo.gif') ?>" alt="Loading" id="loader">
        </div>


        <!-- page wrap
        ================================================== -->
        <div id="page" class="s-pagewrap">

            <!-- # site header 
            ================================================== -->
            <header class="s-header">

                <div class="row s-header__inner">

                    <div class="s-header__block">
                        <div class="s-header__logo">
                            <a class="logo" href="index.html">
                                <img src="<?= base_url('assets/images/icons/brix.svg') ?>" alt="Homepage">
                            </a>
                        </div>

                        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                    </div> <!-- end s-header__block -->

                    <nav class="s-header__nav">
        
                        <ul class="s-header__menu-links">
                            <li class="current"><a href="#intro" class="smoothscroll">Home</a></li>
                            <li><a href="#about" class="smoothscroll">Products</a></li>
                        </ul> <!-- s-header__menu-links -->

                        <ul class="s-header__social">
                            <li>
                                <a href="https://www.instagram.com/brixperformanceid">
                                    <img src="<?= base_url('assets/images/icons/instagram.svg') ?>">
                                    <span class="u-screen-reader-text">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=6281284746544">
                                    <img src="<?= base_url('assets/images/icons/whatsapp.svg') ?>">
                                    <span class="u-screen-reader-text">Whatsapp</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tokopedia.com/brix">
                                    <img src="<?= base_url('assets/images/icons/tokopedia.svg') ?>">
                                    <span class="u-screen-reader-text">Tokopedia</span>
                                </a>
                            </li>
                            
                            
                        </ul> <!-- s-header__social -->
        
                    </nav> <!-- end s-header__nav -->

                </div> <!-- end s-header__inner -->

            </header> <!-- end s-header -->


            <!-- # site-content
            ================================================== -->
            <section id="content" class="s-content">

                <!-- intro
                ----------------------------------------------- -->
                <section id="intro" class="s-intro target-section">
                    <div class="s-intro__bg"></div>

                    <div class="row s-intro__content">

                        <div class="s-intro__content-bg"></div>

                        <div class="column lg-12 s-intro__content-inner">
                            
                            <h1 class="s-intro__content-title">
                                BRIX® Performance is all about motorsports
                            </h1>

                            <div class="s-intro__content-buttons">
                                <a href="" class="btn btn--stroke s-intro__content-btn smoothscroll">More About Us</a>
                                <a href="assets/videos/brix-performance.mp4" class="s-intro__content-video-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M7 6v12l10-6z"></path></svg>
                                </a>
                            </div>
                            
                        </div> <!-- s-intro__content-inner -->

                    </div> <!-- s-intro__content -->

                    <div class="s-intro__scroll-down">
                        <a href="#about" class="smoothscroll">
                            <span>Scroll Down</span>
                        </a>
                    </div> <!-- s-intro__scroll-down -->

                </section> <!-- end s-intro -->

                <video loop muted autoplay="autoplay" style="margin-bottom: -10px;">
                    <source src="assets/videos/brix-motorsport.mp4" type="video/mp4">
                </video>

                <!-- about
                ----------------------------------------------- -->
                <section id="about" class="s-about target-section">

                    <div class="row section-header" data-num="SOLIDCAST&reg;">
                        <h3 class="column lg-12 section-header__pretitle pretitle text-pretitle">STYLE MEET SENSE</h3>
                        <div class="column lg-12 stack-on-1100 section-header__secondary">
                            <p>
                                <b>SOLIDCAST&reg;</b> is BRIX Performance's cutting-edge heat-treatment technique for brake rotors, designed to enhance durability and reliability. By relieving internal stresses created during casting and CNC machining, this process ensures that the rotors are better equipped to handle high temperatures and aggressive driving conditions. With <b>SOLIDCAST&reg;</b>, you can count on your brake rotors to maintain optimal performance, even under extreme heat and heavy use.
                            </p>
                        </div>
                        <div class="column lg-12 stack-on-1100 section-header__primary">
                            <h2 class="title text-display-1">
                                Key Points of <b>SOLIDCAST&reg;</b>:
                            </h2>
                        </div>
                    </div> <!-- end section-header -->

                    <div class="row process-list list-block show-ctr block-lg-one-half block-tab-whole">
        
                        <div class="column list-block__item">
                            <div class="list-block__title">
                                <h3 class="h5">Enhanced Durability</h3>
                            </div>
                            <div class="list-block__text">
                                <p>
                                    Reduces internal stresses from casting and CNC machining, improving resistance to warping and wear.
                                </p>
                            </div>
                        </div> <!-- end list-block__item -->

                        <div class="column list-block__item">
                            <div class="list-block__title">
                                <h3 class="h5">High-Temperature Performance</h3>
                            </div>
                            <div class="list-block__text">
                                <p>
                                    Capable of withstanding extreme heat and thermal cycling, ensuring consistent braking.
                                </p>
                            </div>
                        </div> <!-- end list-block__item -->
            
                        <div class="column list-block__item">
                            <div class="list-block__title">
                                <h3 class="h5">Aggressive Pad Compatibility</h3>
                            </div>
                            <div class="list-block__text">
                                <p>
                                    Minimizes disc wear, even when paired with high-friction brake pads.
                                </p>
                            </div>
                        </div> <!-- end list-block__item -->
            
                        <div class="column list-block__item">
                            <div class="list-block__title">
                                <h3 class="h5">Reliable Braking</h3>
                            </div>
                            <div class="list-block__text">
                                <p>
                                    Delivers dependable, long-lasting braking performance, even under demanding conditions.
                                </p>
                            </div>
                        </div> <!-- end list-block__item -->

                    </div> <!-- end process-list -->

                    <div class="row">
                        <div class="column lg-12 stack-on-1100 section-header__secondary">
                            <p>
                                With <b>SOLIDCAST&reg;</b>, BRIX Performance combines innovative engineering with reliability, giving drivers the confidence of a high-performance brake system designed to last and perform in the most demanding situations.
                            </p>
                        </div>
                    </div> <!-- end section-header -->

                </section> <!-- end s-about -->

                <!-- portfolio
                ----------------------------------------------- -->
                <section id="folio" class="s-folio target-section">

                    <div class="s-product row">
                        <div class="column lg-12">
                            <div class="row section-header light-on-dark" data-num="OUR PRODUCTS">
                                <h3 class="column lg-12 section-header__pretitle text-pretitle">High Performance Meets Innovation</h3>
                                <div class="column lg-6 stack-on-1100 section-header__primary">
                                    <h2 class="title text-display-1">
                                        Here are some of our disc brake products. Feel free to check them out.
                                    </h2>
                                </div>
                                <div class="column lg-6 stack-on-1100 section-header__secondary">
                                    <p class="desc">
                                        Both series offer advanced features and reliability, so whether you're upgrading your daily driver or pushing your vehicle to its limits on the track, BRIX Performance has the perfect brake disc for you.
                                    </p>
                                </div>
                            </div> <!-- end section-header -->
        
                            <div id="bricks" class="row bricks">
                                <div class="column lg-12 masonry">
                                    <div class="bricks-wrapper">
        
                                        <div class="grid-sizer"></div>
        
                                        <article class="brick brick--double entry border">
                                            <a href="#modal-01" class="entry__link">
                                                <div class="entry__thumb">
                                                    <img src="<?= base_url('assets/images/home/product-street-img.png') ?>" alt="">
                                                </div>
                                                <div class="entry__info">
                                                    <div class="entry__cat">Brake Disc</div>
                                                    <h4 class="entry__title">Street Series Brake Disc</h4>
                                                </div>
                                            </a>
                                        </article> <!-- entry -->
        
                                        <article class="brick brick--double entry border">
                                            <a href="#modal-02" class="entry__link">
                                                <div class="entry__thumb">
                                                    <img src="<?= base_url('assets/images/home/product-competition-img.png') ?>" alt="">
                                                </div>
                                                <div class="entry__info">
                                                    <div class="entry__cat">Brake Disc</div>
                                                    <h4 class="entry__title">Competition Series Brake Disc</h4>
                                                </div>
                                            </a>
                                        </article> <!-- entry -->
        
                                    </div> <!-- end bricks-wrapper -->
                                </div> <!-- end masonry -->
                            </div> <!-- end bricks -->
                        </div>
                    </div>

                    

                    <div class="s-coming-soon row">
                        <div class="column lg-12">
                            <div class="row section-header light-on-dark" data-num="COMING SOON">
                                <h3 class="column lg-12 section-header__pretitle text-pretitle">Better Braking Are Just Around the Corner</h3>
                                <div class="column lg-12 stack-on-1100 section-header__primary">
                                    <h2 class="title text-display-1">
                                        An Exclusive Preview of What’s to Come.
                                    </h2>
                                </div>
                            </div> <!-- end section-header -->
        
                            <div id="bricks" class="row bricks">
                                <div class="column lg-2"></div>
                                <div class="column lg-8 masonry">
                                    <article class="brick brick--one entry">
                                        <a href="#modal-01" class="entry__link">
                                            <div class="entry__thumb">
                                                <img src="<?= base_url('assets/images/home/product-brake-pad.png') ?>" alt="">
                                            </div>
                                        </a>
                                    </article>
                                </div>
                                <div class="column lg-2"></div>
                            </div> <!-- end bricks -->
                        </div>
                    </div>

                    

                    <!-- modal templates popup
                    -------------------------------------------- -->
                    <div id="modal-01" hidden>
                        <div class="modal-popup">
                            <img src="<?= base_url('assets/images/home/product-street-img.png') ?>" alt="">
                
                            <div class="modal-popup__desc">
                                <h5>Street Series Brake Disc</h5>
                                <p>BRIX Performance Street Series is our high-performance street disc. Equipped with experience, knowledge, and data from our racing division for a performance rotor that suites day to day driving. Manufactured using BRIX SOLIDCAST® heat treatment and casting technique which enables the disc to cool evenly, achieving increased dimensional stability and reduced disc internal stress. Our products comply to TUV/ISO/TS16949 standards. BRIX Performance Street Series is a direct replacement to the factory equipped brake rotor with plug and play installation.</p>
                                <ul class="modal-popup__cat">
                                    <li>Brake Disc</li>
                                    <li>Brix Performance</li>
                                </ul>
                            </div>
                
                            <a href="https://www.behance.net/" class="modal-popup__details">Read More</a>
                        </div>
                    </div> <!-- end modal -->

                    <div id="modal-02" hidden>
                        <div class="modal-popup">
                            <img src="<?= base_url('assets/images/home/product-competition-img.png') ?>" alt="">
                
                            <div class="modal-popup__desc">
                                <h5>Competition Series Brake Disc</h5>
                                <p>Different from the Street Series, in Competition series BRIX Performance’s disc is designed with a slotted pattern. It’s useful for braking optimalization as it can be more linear and predictable with a higher friction coefficient. With the use of FC250, SOLIDCAST heat-treatment process, and a unique slotted pattern, it can optimize your braking sensation during higher temperature and significantly reduce the possibility of heat-checking or micro-cracking on your discs during track and competitions.</p>
                                <ul class="modal-popup__cat">
                                    <li>Brake Disc</li>
                                    <li>Brix Performance</li>
                                </ul>
                            </div>
                
                            <a href="https://www.behance.net/" class="modal-popup__details">Read More</a>
                        </div>
                    </div> <!-- end modal -->

                    <!-- clients
                    -------------------------------------------- -->
                    <div class="s-clients row">
                        <div class="column lg-12">

                            <div class="row section-header">
                                <div class="column lg-12">
                                    <h3 class="title text-display-1">Our Trusted Distributors</h3>
                                </div>
                            </div> <!-- end section-header -->
        
                            <div class="row clients-list block-lg-one-sixth block-md-one-fourth block-tab-one-half block-stack">
        
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/1.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/2.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/3.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/4.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/5.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/6.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/7.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/8.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/9.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/10.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/11.svg') ?>" alt="">
                                    </a>
                                </div>
                                <div class="column clients-list__item">
                                    <a href="#0">
                                        <img src="<?= base_url('assets/images/distributors/12.svg') ?>" alt="">
                                    </a>
                                </div>

                            </div> <!-- clients-list -->
                        </div> <!-- end column lg-12 -->
                    </div> <!-- end s-clients -->

                </section> <!-- end s-folio -->

            </section>  <!-- end content -->


            <!-- # site-footer
            ================================================== -->
            <footer id="footer" class="s-footer target-section">

                <div class="row s-footer__bottom_mid">
                    <!-- <div class="column lg-1 tab-12 s-footer__bottom-left">
                        <ul class="s-footer__logo">
                            <li>
                                <a href="https://www.instagram.com/brixperformanceid">
                                    <img src="assets/img/icons/brix.svg">
                                    <span class="u-screen-reader-text">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="column lg-3 tab-12">
                        <h4 class="footer-title">Navigate</h4>
                        <a class="footer-btn-link" href="">About Us</a>
                        <a class="footer-btn-link" href="">Contact Us</a>
                        <a class="footer-btn-link" href="">Reservation</a>
                        <a class="footer-btn-link" href="">Privacy Policy</a>
                        <a class="footer-btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="column lg-3 tab-12 s-footer__bottom-left">
                        <h4 class="footer-title">Contact</h4>
                        <p class="footer-contact map">Location</p>
                        <p class="footer-contact phone">Phone</p>
                        <p class="footer-contact mail">Mail</p>

                        <div class="footer-contact-more">
                            <ul class="s-footer__social">
                                <li>
                                    <a href="https://www.instagram.com/brixperformanceid">
                                        <img src="<?= base_url('assets/images/icons/instagram.svg') ?>">
                                        <span class="u-screen-reader-text">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=6281284746544">
                                        <img src="<?= base_url('assets/images/icons/whatsapp.svg') ?>">
                                        <span class="u-screen-reader-text">Whatsapp</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tokopedia.com/brix">
                                        <img src="<?= base_url('assets/images/icons/tokopedia.svg') ?>">
                                        <span class="u-screen-reader-text">Tokopedia</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column lg-6 tab-12 s-footer__bottom-left">
                        <h4 class="footer-title">Stay Connected</h4>
                        <p class="footer-contact">Want to sign up for our newsletter? Just fill out your email below!</p>
                        <div class="column list-block__item">
                            <div class="subscribe-form s-footer__subscribe">
                                
                            <?php if (session()->getFlashdata('message')): ?>
                                <div class="alert">
                                    <?= session()->getFlashdata('message') ?>
                                </div>
                            <?php endif; ?>
                            
                                <form action="<?= base_url('home/subscribe') ?>" method="POST">
                                    <input type="email" name="email" class="u-fullwidth text-center" placeholder="Your Email" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                                    <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary u-fullwidth">
                                    <div class="mc-status"></div>
                                </form>

                                <p>Form action: <?= base_url('home/subscribe') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row s-footer__bottom">

                    <div class="column lg-6 tab-12">
                        <div class="ss-copyright">
                            <span>© Copyright Brix 2024</span> 
                        </div>
                    </div>

                </div> <!-- s-footer__bottom -->
        
            </footer> <!-- end footer -->


        <!-- Java Script
        ================================================== -->
        <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
        <script src="<?= base_url('assets/js/script.js') ?>"></script>
    </body>
</html>