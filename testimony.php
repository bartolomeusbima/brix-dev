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
        <!-- <link rel="stylesheet" href="assets/css/information.css"> -->
        <link rel="stylesheet" href="assets/css/testimony.css">
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
                            <a class="logo" href="index.html">
                                <img src="assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                            </a>
                        </div>

                        <a class="menu__bar__toggle" href="/index.html"><span>Menu</span></a>
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
                            <li class="list article" onclick="location.href='article.html'" style="margin-top: 0;">
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

            <section class="info">
              <div class="info-body">
                <div class="column">
                    <h2 class="info-title">
                        TESTIMONY
                    </h2>
                </div>
              </div>

              <div class="info-bodyy">
                <div class="row s-testimonials__content">
                  
                  <!-- Testimonial Card 1 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                    </div>
  
                    <div class="s-testimonials__slide swiper-slide card">
                        <div class="row s-testimonials__author">
                            <div class="col mob-12 s-testimonial__user">
                                <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>T***n</strong>
                                    <span>Tokopedia Buyer</span>
                                    <span><a href="https://www.tokopedia.com/brix/brake-disc-piringan-rem-depan-suzuki-xl7-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                        <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                        product link
                                    </a></span>
                                </cite>
                            </div>
                            <div class="col md-12 s-testimonial__images">
                                <article class="brick entry border">
                                    <a href="#modal-testimony-01-img-01" class="entry__link">
                                        <div class="entry__thumb">
                                            <img src="assets/images/photos/testimony/01/01.jpg" alt="">
                                        </div>
                                    </a>
                                </article>
  
                                <article class="brick entry border">
                                    <a href="#modal-testimony-01-img-02" class="entry__link">
                                        <div class="entry__thumb">
                                            <img src="assets/images/photos/testimony/01/02.jpg" alt="">
                                        </div>
                                    </a>
                                </article>
  
                                <article class="brick entry border">
                                    <a href="#modal-testimony-01-img-03" class="entry__link">
                                        <div class="entry__thumb">
                                            <img src="assets/images/photos/testimony/01/03.jpg" alt="">
                                        </div>
                                    </a>
                                </article>
  
                            </div>
                        </div>
                        <p>
                            Mulai proses order, pengiriman sampai barang tiba cepet banget. Barang ori n pas banget dipasang di mobil. Rem jd lebih pakem n ga khawatir cepat panas.
                        </p>
                        <div id="modal-testimony-01-img-01" hidden>
                            <div class="modal-popup">
                                <div class="row block-tab-one-half block-tab-whole">
                                    <div class="column">
                                        <img src="assets/images/photos/testimony/01/01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modal-testimony-01-img-02" hidden>
                            <div class="modal-popup">
                                <div class="row block-tab-one-half block-tab-whole">
                                    <div class="column">
                                        <img src="assets/images/photos/testimony/01/02.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modal-testimony-01-img-03" hidden>
                            <div class="modal-popup">
                                <div class="row block-tab-one-half block-tab-whole">
                                    <div class="column">
                                        <img src="assets/images/photos/testimony/01/03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end s-testimonials__slide -->
      
                  </div> <!-- end column -->
  
                  <!-- Testimonial Card 2 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                        <img src="assets/images/icons/icon-star.svg">
                    </div>
  
                    <div class="s-testimonials__slide swiper-slide card">
                        <div class="row s-testimonials__author">
                            <div class="col mob-12 s-testimonial__user">
                                <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                                <cite class="s-testimonials__cite">
                                    <strong>MUHAMMAD</strong>
                                    <span>Tokopedia Buyer</span>
                                    <span><a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-toyota-sienta-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                        <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                        product link
                                    </a></span>
                                </cite>
                            </div>
                            <div class="col md-12 s-testimonial__images">
                                <article class="brick entry border">
                                    <a href="#modal-02-img-01" class="entry__link">
                                        <div class="entry__thumb">
                                            <img src="assets/images/photos/testimony/02/01.jpg" alt="">
                                        </div>
                                    </a>
                                </article>
  
                            </div>
                        </div>
                        <p>
                            Terbaik, semoga awet dan tahan lama
                        </p>
                        <div id="modal-02-img-01" hidden>
                            <div class="modal-popup">
                                <div class="row block-tab-one-half block-tab-whole">
                                    <div class="column">
                                        <img src="assets/images/photos/testimony/02/01.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end s-testimonials__slide -->
  
                  </div> <!-- end column -->
                <!-- </div> -->

                <!-- <div class="s-testimonials__content"> -->
  
                  <!-- Testimonial Card 3 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>Y***R</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-bmw-e90-325i-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-03-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/03/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>produk sesuai, bagus</p>
                
                      <div id="modal-testimony-03-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/03/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- end s-testimonials__slide -->
                  </div> <!-- end column -->
                
                  <!-- Testimonial Card 4 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="https://accounts.tokopedia.com/image/v1/u/10840438/user_thumbnail/desktop?ect=4g" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>Brata</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-honda-brio-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-04-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/04/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>barang sesuai. good respon seller.. smoga cocok dan awet..</p>
                
                      <div id="modal-testimony-04-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/04/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- end s-testimonials__slide -->
                  </div> <!-- end column -->
                
                <!-- </div> -->
  
                <!-- <div class="s-testimonials__content"> -->
  
                  <!-- Testimonial Card 5 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>ROY</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-honda-brv-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-05-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/05/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>sesuai discbrakenya</p>
                      <div id="modal-testimony-05-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/05/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Testimonial Card 6 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>T***h</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-jazz-gd3-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-06-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/06/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>
                        Brg sudah sampai sesuai pesanan Tinggal dipasang…seller sangat komunikatif dan bnyk membantu…Terimakasih
                      </p>
                      <div id="modal-testimony-06-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/06/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <!-- </div> -->
  
                <!-- <div class="s-testimonials__content"> -->
  
                  <!-- Testimonial Card 7 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="https://accounts.tokopedia.com/image/v1/u/8518665/user_thumbnail/desktop?ect=4g" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>L</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-honda-odyssey-ra-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-07-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/07/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>Semoga bahannya kuat, tanpa getar getar lagi</p>
                      <div id="modal-testimony-07-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/07/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Testimonial Card 8 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>RANGGA</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-mazda-2-old-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-08-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/08/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>
                        alhamdulillah barang sampe dengan selamat. tapi sayang kardusnya ancur. tapi gpp yang penting dalamannya selamat. tnks min.
                      </p>
                      <div id="modal-testimony-08-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/08/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <!-- </div> -->
  
                <!-- <div class="s-testimonials__content"> -->
  
                  <!-- Testimonial Card 9 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="https://accounts.tokopedia.com/image/v1/u/77171317/user_thumbnail/desktop?ect=4g" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>AZI</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-nissan-march-1-3-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-09-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/09/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>sejauh ini tampilan bagus sesuai deskripsi. kita coba beberapa bulan</p>
                      <div id="modal-testimony-09-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/09/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Testimonial Card 10 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="https://accounts.tokopedia.com/image/v1/u/1135413/user_thumbnail/desktop?ect=4g" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>FAJAR</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-nissan-march-1-5-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-10-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/10/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>belum di pasang, mau dipasang pas ada waktu, semogaa pas barang bagus</p>
                      <div id="modal-testimony-10-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/10/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <!-- </div> -->
  
                <!-- <div class="s-testimonials__content"> -->
  
                  <!-- Testimonial Card 11 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>MHD</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-fortuner-vrz-srz-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-11-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/11/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>Admin komunikatif, kombinasi discbrake dan pads bikin pengereman mobil meningkat jauh</p>
                      <div id="modal-testimony-11-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/11/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Testimonial Card 12 -->
                  <div class="column lg-6 tab-12">
                    <div class="card-header">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                      <img src="assets/images/icons/icon-star.svg">
                    </div>
                
                    <div class="s-testimonials__slide swiper-slide card">
                      <div class="row s-testimonials__author">
                        <div class="col mob-12 s-testimonial__user">
                          <img src="assets/images/icons/icon-user.svg" alt="Author image" class="s-testimonials__avatar">
                          <cite class="s-testimonials__cite">
                            <strong>F***N</strong>
                            <span>Tokopedia Buyer</span>
                            <span>
                              <a href="https://www.tokopedia.com/brix/brix-brake-disc-piringan-rem-depan-pajero-exceed-rotor-performance" style="font-style:italic; text-decoration:underline;" target="_blank" rel="noopener noreferrer">
                                <img src="assets/images/icons/icon-link.svg" alt="Homepage" style="width:1em; height:1em; vertical-align:middle; margin-right: 1px;">
                                product link
                              </a>
                            </span>
                          </cite>
                        </div>
                        <div class="col md-12 s-testimonial__images">
                          <article class="brick entry border">
                            <a href="#modal-testimony-12-img-01" class="entry__link">
                              <div class="entry__thumb">
                                <img src="assets/images/photos/testimony/12/01.jpg" alt="">
                              </div>
                            </a>
                          </article>
                        </div>
                      </div>
                      <p>Pengiriman cepat</p>
                      <div id="modal-testimony-12-img-01" hidden>
                        <div class="modal-popup">
                          <div class="row block-tab-one-half block-tab-whole">
                            <div class="column">
                              <img src="assets/images/photos/testimony/12/01.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
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