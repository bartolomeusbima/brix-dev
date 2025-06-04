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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <link rel="stylesheet" href="assets/css/root.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/street-series.css">
        <link rel="stylesheet" href="assets/css/radar-chart.css">
        <link rel="stylesheet" href="assets/css/carousel-image.css">
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

            <section class="hero">

                <div class="hero-content">
                    <div class="column lg-12">
                        <h4 id="hero-top-title">
                            BRIX&nbsp;Performance&nbsp;Rotors
                        </h4>
                        <h1 id="hero-title">
                            STREET&nbsp;SERIES
                        </h1>
                        <h4 id="hero-subtitle">
                            Better&nbsp;Cooling.&nbsp;Daily&nbsp;Confidence.
                        </h4>
                    </div>
                    <img id="hero-photo" src="assets/images/photos/street-series/street-rotor.jpg" alt="">
                </div>

            </section>

            <section class="street-series-shot">
                <div id="street-series-shot-wrapper">
                    <img id="street-series-shot-photo" src="assets/images/backgrounds/street-series/street-series-shot-1.jpg" alt="">
                </div>
            </section>

            <section class="narrative-text bg-1">
                <div id="narrative-text-head">
                    <div class="column">
                        <h3 id="narrative-text-title">
                            STREET SERIES IS
                        </h3>
                        <h3 id="narrative-text-title">
                            PERFECT FOR <blue>DAILY DRIVING</blue>.
                        </h3>
                    </div>
                </div>
                <div id="narrative-text-body">
                    <div class="column">
                        <p class="narrative-text-text">
                            The BRIX Performance Street Series is our high-performance brake rotor, engineered for daily driving with technology derived from our racing division. Each rotor undergoes our proprietary <monument>SOLIDCAST&reg;</monument> heat-treatment process, designed to relieve internal stress and ensure thermal stability under pressure. 
                        </p>
                        <p class="narrative-text-text">
                            Manufactured to TUV/ISO/TS16949 standards, it’s a direct plug-and-play replacement for OEM rotors, delivering better cooling, longer lifespan, and everyday driving confidence.
                        </p>
                    </div>
                </div>
            </section>

            <section class="product-comparison">
                <div id="product-comparison-head">
                    <div class="column">
                        <h3 id="product-comparison-title">
                            PRODUCT COMPARISON
                        </h3>
                    </div>
                </div>
                <div class="container bg-white text-black">
                    <div class="legend">
                        <span>
                            <span class="dot dot-black"></span>&nbsp;Standard (Baseline)
                        </span>
                        <span>
                            <span class="dot dot-blue"></span>&nbsp;Street Series
                        </span>
                    </div>
                    <div class="content-wrapper" id="splitView">
                        <div class="chart-container">
                        <canvas id="radar-chart-street"></canvas>
                        </div>
                    </div>
                </div>
            </section>

            <section class="street-series-shot">
                <div id="street-series-shot-wrapper">
                    <img id="street-series-shot-photo" class="four-three" src="assets/images/backgrounds/street-series/street-series-shot-2.jpg" alt="">
                </div>
            </section>

            <section class="solidcast">
                <div class="column collapse lg-4 tab-12">
                    <div class="solidcast-body-wrapper" style="height: 100%;">
                        <div class="column collapse lg-12 mob-12 key-points bg-blue" style="height: 100%;">
                            <div class="solidcast-key-points-wrapper">
                                <div class="row row-nowrap key-points-title margin">
                                    <div class="title-wrapper">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 433.001 433.001;" xml:space="preserve" width="30" height="30" fill="white">
                                            <g>
                                                <path d="M29.668 13.34a13.587 13.587 0 0 0 -6.016 -8.572 13.675 13.675 0 0 0 -6.305 -2.096 2.625 2.625 0 0 0 -0.141 -0.653A2.6 2.6 0 0 0 15.011 0.291L12.531 0.03a4.5 4.5 0 0 0 -3.673 1.301L1.326 8.863A4.5 4.5 0 0 0 0.025 12.536l0.26 2.48a2.6 2.6 0 0 0 1.727 2.194 2.625 2.625 0 0 0 0.654 0.143 13.675 13.675 0 0 0 6.305 10.512 13.625 13.625 0 0 0 7.317 2.131c4.529 0 8.966 -2.243 11.571 -6.34a13.6 13.6 0 0 0 1.807 -10.316M5.935 15.395l3.06 -3.059a0.625 0.625 0 0 0 0.288 0.073 0.625 0.625 0 0 0 0.525 -0.286 0.625 0.625 0 0 0 0.029 -0.626l1.97 -1.97a0.625 0.625 0 0 0 0.389 0.135 0.625 0.625 0 0 0 0.305 -0.08 0.625 0.625 0 0 0 0.236 -0.85 1.25 1.25 0 0 0 -0.055 -0.08l2.711 -2.711a10.3 10.3 0 0 1 6.509 1.585c4.848 3.081 6.284 9.531 3.204 14.379 -1.492 2.347 -3.81 3.975 -6.526 4.58s-5.505 0.116 -7.853 -1.376a10.375 10.375 0 0 1 -3.839 -4.355 10.45 10.45 0 0 1 -0.951 -5.357m-4.41 -0.51 -0.26 -2.48a3.262 3.262 0 0 1 0.943 -2.661L9.74 2.212a3.262 3.262 0 0 1 2.661 -0.943l2.48 0.26c0.539 0.056 0.968 0.395 1.147 0.904 0.18 0.51 0.06 1.042 -0.323 1.425l-11.851 11.852a1.338 1.338 0 0 1 -1.425 0.323 1.338 1.338 0 0 1 -0.905 -1.147m25.282 8.101a12.438 12.438 0 0 1 -10.516 5.761 12.375 12.375 0 0 1 -6.651 -1.938 12.438 12.438 0 0 1 -5.737 -9.655 2.625 2.625 0 0 0 0.75 -0.484 11.75 11.75 0 0 0 1.104 4.609 11.625 11.625 0 0 0 4.299 4.878 11.575 11.575 0 0 0 8.793 1.54 11.587 11.587 0 0 0 7.308 -5.128c3.449 -5.427 1.84 -12.65 -3.588 -16.1a11.712 11.712 0 0 0 -5.901 -1.814 2.625 2.625 0 0 0 0.486 -0.751 12.425 12.425 0 0 1 5.83 1.914c2.804 1.781 4.745 4.549 5.467 7.791s0.139 6.572 -1.643 9.376"/>
                                                <path d="M12.953 21.599a6.212 6.212 0 0 0 4.72 0.828c1.633 -0.364 3.025 -1.341 3.922 -2.752s1.191 -3.088 0.828 -4.72 -1.341 -3.025 -2.752 -3.922c-2.914 -1.853 -6.79 -0.988 -8.641 1.925s-0.988 6.79 1.925 8.641M12.081 13.625a5.012 5.012 0 0 1 4.239 -2.323 5 5 0 0 1 2.681 0.781c1.13 0.719 1.913 1.834 2.204 3.141s0.056 2.649 -0.663 3.78a4.975 4.975 0 0 1 -3.141 2.204 4.975 4.975 0 0 1 -3.78 -0.663 5.019 5.019 0 0 1 -1.541 -6.92"/>
                                                <path d="M24.015 19.628q0.101 0.035 0.204 0.035c0.259 0 0.5 -0.163 0.589 -0.42a0.624 0.624 0 1 0 -0.792 0.385"/>
                                                <path d="M23.045 11.978a0.625 0.625 0 0 0 0.369 -0.121 0.625 0.625 0 0 0 0.133 -0.872 0.625 0.625 0 0 0 -0.872 -0.133 0.625 0.625 0 0 0 -0.133 0.871 0.625 0.625 0 0 0 0.503 0.255"/>
                                                <path d="M24.578 15.675q0.046 0 0.095 -0.007a0.625 0.625 0 0 0 0.521 -0.711 0.625 0.625 0 0 0 -0.711 -0.521 0.625 0.625 0 0 0 -0.521 0.711 0.625 0.625 0 0 0 0.616 0.529"/>
                                                <path d="M14.695 23.886a0.625 0.625 0 0 0 -0.741 0.479 0.625 0.625 0 0 0 0.479 0.741q0.066 0.014 0.131 0.014a0.624 0.624 0 0 0 0.13 -1.234"/>
                                                <path d="M18.396 23.769a0.625 0.625 0 0 0 -0.432 0.769 0.625 0.625 0 0 0 0.769 0.432 0.625 0.625 0 0 0 0.431 -0.769 0.625 0.625 0 0 0 -0.769 -0.432"/>
                                                <path d="M21.621 21.947a0.625 0.625 0 0 0 -0.025 0.882 0.625 0.625 0 0 0 0.454 0.195 0.624 0.624 0 1 0 -0.428 -1.077"/>
                                                <path d="M11.361 22.267a0.624 0.624 0 0 0 -0.796 0.96 0.625 0.625 0 0 0 0.398 0.144 0.624 0.624 0 0 0 0.399 -1.104"/>
                                                <path d="m19.686 9.351 0.01 0.005h0.001a0.624 0.624 0 0 0 0.545 -1.121l-0.006 -0.003 -0.003 -0.001a0.625 0.625 0 0 0 -0.834 0.289 0.625 0.625 0 0 0 0.286 0.833"/>
                                                <path d="M8.35 18.95a0.625 0.625 0 0 0 -0.336 0.815 0.625 0.625 0 0 0 0.576 0.385 0.625 0.625 0 0 0 0.576 -0.862 0.625 0.625 0 0 0 -0.815 -0.336"/>
                                                <path d="m7.924 16.19 0.056 0.003a0.624 0.624 0 1 0 -0.056 -0.003"/>
                                                <path d="M16.045 8.579h0.021a0.625 0.625 0 0 0 0.603 -0.644 0.625 0.625 0 0 0 -0.643 -0.603 0.625 0.625 0 0 0 -0.603 0.644 0.625 0.625 0 0 0 0.623 0.604"/>
                                                <path d="M14.011 19.934a4.25 4.25 0 0 0 3.232 0.566 4.25 4.25 0 0 0 2.685 -1.885 4.25 4.25 0 0 0 0.566 -3.232 4.25 4.25 0 0 0 -1.885 -2.685c-1.995 -1.268 -4.65 -0.676 -5.918 1.319s-0.676 4.65 1.319 5.918m-0.266 -5.249a3.038 3.038 0 0 1 2.57 -1.409 3 3 0 0 1 1.626 0.474c0.685 0.435 1.16 1.111 1.336 1.905s0.034 1.606 -0.401 2.291 -1.111 1.16 -1.905 1.336 -1.606 0.034 -2.291 -0.401a3.044 3.044 0 0 1 -0.935 -4.196"/>
                                                <path d="M4.664 12.707a1.6 1.6 0 0 0 1.14 -0.473 1.6 1.6 0 0 0 0.473 -1.14 1.6 1.6 0 0 0 -0.473 -1.14 1.6 1.6 0 0 0 -1.14 -0.473 1.6 1.6 0 0 0 -1.14 0.473 1.6 1.6 0 0 0 -0.473 1.14c0 0.431 0.168 0.835 0.473 1.14a1.6 1.6 0 0 0 1.14 0.473M4.405 10.838a0.375 0.375 0 0 1 0.259 -0.106c0.098 0 0.189 0.037 0.259 0.107a0.362 0.362 0 0 1 0 0.517 0.375 0.375 0 0 1 -0.259 0.107 0.375 0.375 0 0 1 -0.259 -0.107 0.362 0.362 0 0 1 0 -0.517"/>
                                                <path d="M11.091 6.28a1.6 1.6 0 0 0 1.14 -0.473 1.6 1.6 0 0 0 0.473 -1.14 1.6 1.6 0 0 0 -0.473 -1.14 1.6 1.6 0 0 0 -1.14 -0.473 1.6 1.6 0 0 0 -1.14 0.473 1.6 1.6 0 0 0 -0.473 1.14c0 0.431 0.168 0.835 0.473 1.14a1.6 1.6 0 0 0 1.14 0.473m-0.259 -1.87a0.375 0.375 0 0 1 0.259 -0.106c0.098 0 0.189 0.037 0.259 0.107a0.362 0.362 0 0 1 0 0.517 0.375 0.375 0 0 1 -0.259 0.107 0.375 0.375 0 0 1 -0.259 -0.107 0.362 0.362 0 0 1 0 -0.517"/>
                                            </g>
                                        </svg>
                                        <p>Drilled & Curve<br>Slotted </p>
                                    </div>
                                </div>
                                <div class="row key-points-detail">
                                    <p>Precision-machined slots and perforations improve airflow, water dispersion, and initial brake bite for confident performance in all conditions.</p>
                                </div>
                                <div class="key-points-photo">
                                    <img src="assets/images/photos/street-series/gallery-3.jpg" alt="Slide 1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column collapse lg-4 tab-12">
                    <div class="solidcast-body-wrapper">
                        <div class="column collapse lg-12 mob-12 key-points bg-white">
                            <div class="solidcast-key-points-wrapper">
                                <div class="row row-nowrap key-points-title">
                                    <div class="title-wrapper">
                                        <svg fill="#000000" width="24px" height="24px" viewBox="0 0 1.08 1.08">
                                            <title>shield-solid</title>
                                            <path d="M0.938 0.222a1.32 1.32 0 0 1 -0.199 -0.07 1.35 1.35 0 0 1 -0.182 -0.096L0.54 0.045l-0.016 0.01a1.35 1.35 0 0 1 -0.182 0.096A1.32 1.32 0 0 1 0.142 0.222L0.12 0.228v0.25c0 0.402 0.406 0.552 0.41 0.553l0.01 0.004 0.01 -0.004c0.004 0 0.41 -0.151 0.41 -0.553V0.228Z" class="clr-i-solid clr-i-solid-path-1"/>
                                            <path x="0" y="0" width="36" height="36" fill-opacity="0" d="M0 0H1.08V1.08H0V0z"/>
                                        </svg>                                      
                                        <p>Special<br>Coating</p>
                                    </div>
                                </div>
                                <div class="row key-points-detail">
                                    <p>Protective coating resists corrosion and keeps your rotors looking and performing like new, even in harsh environments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column collapse lg-12 mob-12 key-points bg-blue">
                            <div class="solidcast-key-points-wrapper">
                                <div class="row row-nowrap key-points-title">
                                    <div class="title-wrapper">
                                        <svg fill="#fff" width="24px" height="24px" viewBox="0 0 1.08 1.08" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="M1.012 0.832 0.59 0.41a0.264 0.264 0 0 0 -0.36 -0.315L0.39 0.256 0.256 0.39 0.095 0.23a0.264 0.264 0 0 0 0.315 0.36l0.422 0.422a0.032 0.032 0 0 0 0.045 0l0.135 -0.135a0.032 0.032 0 0 0 0 -0.045M0.87 0.87a0.041 0.041 0 1 1 0 -0.06 0.041 0.041 0 0 1 0 0.06" class="clr-i-solid clr-i-solid-path-1"/>
                                            <path x="0" y="0" width="36" height="36" fill-opacity="0" d="M0 0H1.08V1.08H0V0z"/>
                                        </svg>   
                                        <p>Plug-and-Play<br>Installation</p>
                                    </div>
                                </div>
                                <div class="row key-points-detail">
                                    <p>Direct-fit upgrade for stock rotors, no hassle, no adjustments, just performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column collapse lg-4 tab-12">
                    <div class="solidcast-body-wrapper">
                        <div class="column collapse lg-12 mob-12 key-points bg-blue">
                            <div class="solidcast-key-points-wrapper">
                                <div class="row row-nowrap key-points-title">
                                    <div class="title-wrapper">
                                        <svg fill="#ffffff" width="24px" height="24px" viewBox="0 0 1.08 1.08" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path d="m0.943 0.273 -0.39 -0.18a0.03 0.03 0 0 0 -0.025 0l-0.39 0.18A0.03 0.03 0 0 0 0.12 0.3v0.51a0.03 0.03 0 0 0 0.017 0.027l0.39 0.18a0.03 0.03 0 0 0 0.025 0l0.39 -0.18A0.03 0.03 0 0 0 0.96 0.81V0.3a0.03 0.03 0 0 0 -0.017 -0.027M0.54 0.447 0.222 0.3 0.54 0.153 0.858 0.3Zm0.36 0.344 -0.33 0.152v-0.444l0.33 -0.152Z" class="clr-i-solid clr-i-solid-path-1"/>
                                            <path x="0" y="0" width="36" height="36" fill-opacity="0" d="M0 0H1.08V1.08H0V0z"/>
                                        </svg>
                                        <p>Monobloc<br>Construction</p>
                                    </div>
                                </div>
                                <div class="row key-points-detail">
                                    <p>Single-piece construction ensures maximum structural integrity and durability under stress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column collapse lg-12 mob-12 key-points bg-white">
                            <div class="solidcast-key-points-wrapper">
                                <div class="row row-nowrap key-points-title">
                                    <div class="title-wrapper">
                                        <svg fill="#000000" width="24px" height="24px" viewBox="0 0 1.68 1.68" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 1.621c0.202 0 0.367 -0.165 0.367 -0.367 0 -0.107 -0.044 -0.2 -0.128 -0.276 -0.015 -0.014 -0.019 -0.022 -0.019 -0.043l0.001 -0.631c0 -0.147 -0.089 -0.245 -0.221 -0.245 -0.133 0 -0.222 0.098 -0.222 0.245l0.001 0.631c0 0.021 -0.004 0.029 -0.018 0.043 -0.084 0.076 -0.128 0.169 -0.128 0.276 0 0.202 0.164 0.367 0.368 0.367m0 -0.102c-0.146 0 -0.265 -0.12 -0.265 -0.265 0 -0.088 0.041 -0.167 0.116 -0.217 0.022 -0.015 0.03 -0.028 0.03 -0.057V0.308c0 -0.089 0.049 -0.146 0.119 -0.146 0.07 0 0.117 0.057 0.117 0.146v0.672c0 0.029 0.008 0.042 0.03 0.057 0.075 0.05 0.116 0.129 0.116 0.217 0 0.146 -0.118 0.265 -0.264 0.265m0.352 -1.202h0.153a0.041 0.041 0 0 0 0.041 -0.041 0.041 0.041 0 0 0 -0.041 -0.041h-0.153a0.041 0.041 0 0 0 -0.041 0.041c0 0.022 0.017 0.041 0.041 0.041m0 0.198h0.153a0.041 0.041 0 0 0 0.041 -0.041 0.041 0.041 0 0 0 -0.041 -0.041h-0.153a0.041 0.041 0 0 0 -0.041 0.041c0 0.022 0.017 0.041 0.041 0.041M0.75 1.424a0.17 0.17 0 0 0 0.17 -0.171c0 -0.066 -0.037 -0.12 -0.091 -0.15 -0.022 -0.012 -0.03 -0.02 -0.03 -0.055V0.675c0 -0.037 -0.021 -0.058 -0.049 -0.058 -0.027 0 -0.049 0.022 -0.049 0.058V1.049c0 0.034 -0.008 0.043 -0.03 0.055 -0.054 0.03 -0.091 0.084 -0.091 0.15a0.17 0.17 0 0 0 0.17 0.171m0.353 -0.712h0.153a0.041 0.041 0 0 0 0.041 -0.041 0.041 0.041 0 0 0 -0.041 -0.041h-0.153a0.041 0.041 0 0 0 -0.041 0.041c0 0.022 0.017 0.041 0.041 0.041m0 0.198h0.153a0.041 0.041 0 0 0 0.041 -0.041 0.041 0.041 0 0 0 -0.041 -0.041h-0.153a0.041 0.041 0 0 0 -0.041 0.041 0.041 0.041 0 0 0 0.041 0.041"/>
                                        </svg>                                                      
                                        <p>Heat-Treated</p>
                                    </div>
                                </div>
                                <div class="row key-points-detail">
                                    <p>Reduces internal stress, enhancing rotor longevity and resistance to warping.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="narrative-text bg-2">
                <div id="narrative-text-head">
                    <div class="column">
                        <h3 id="narrative-text-title">
                            ENGINEERED FOR
                        </h3>
                        <h3 id="narrative-text-title">
                            DAILY PERFORMANCE.
                        </h3>
                    </div>
                </div>
                <div id="narrative-text-body">
                    <div class="column">
                        <p class="narrative-text-text">
                            The BRIX Performance Street Series is designed for drivers who demand more from every stop, every day. Backed by real racing experience and built with precision, each rotor is engineered for dependable performance in daily and spirited driving.
                        </p>
                        <p class="narrative-text-text">
                            Featuring our proprietary <monument>SOLIDCAST&reg;</monument> heat-treatment process, these rotors offer long-lasting strength and resistance to heat-related wear. The drilled and slotted design enhances cooling and water dissipation, helping to reduce brake fade in both dry and wet conditions. A high- temperature anti-corrosion coating protects the rotor surface, keeping your brakes clean, durable, and consistently sharp.
                        </p>
                        <p class="narrative-text-text">
                            Whether you're navigating city streets or carving up winding backroads. The Street Series delivers smooth, responsive, and reliable braking mile after mile.
                        </p>
                    </div>
                </div>
            </section>

            <section class="street-series-shot">
                <div id="street-series-shot-wrapper">
                    <img id="street-series-shot-photo" class="four-three" src="assets/images/backgrounds/street-series/street-series-shot-3.jpg" alt="">
                </div>
            </section>

            <section class="narrative-text bg-3">
                <div id="narrative-text-head">
                    <div class="column">
                        <h3 id="narrative-text-title">
                            SOLIDCAST&reg;
                        </h3>
                    </div>
                </div>
                <div id="narrative-text-body">
                    <div class="column">
                        <p class="narrative-text-text">
                            Heat can make or break a rotor, literally. That’s why BRIX Performance created <b><monument>SOLIDCAST&reg;</monument></b>, our proprietary heat-treatment process designed to unlock the full potential of every disc.
                        </p>
                        <p class="narrative-text-text">
                            By relieving internal stress during casting and machining, <b><monument>SOLIDCAST&reg;</monument></b> delivers rotors that <b>resist warping</b>, <b>withstand repeated thermal cycles</b>, and <b>maintain consistent performance</b>, even <b>under extreme conditions</b>, far beyond what standard OE rotors can handle.
                        </p>
                        <p class="narrative-text-text">
                            Pair it with our GS3000 high-carbon cast iron blanks, and you get a rotor that offers exceptional <b>dimensional stability</b>, <b>reduced wear</b>, and <b>confidence-inspiring braking</b>, even when matched with aggressive, high-metal content pads.
                        </p>
                        <p class="narrative-text-text">
                            Drive after drive, lap after lap, <b><monument>SOLIDCAST&reg;</monument></b> is the foundation of performance that lasts.
                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="carousel carousel--street" id="carousel">
                    <button class="arrow arrow-left">&#10094;</button>
                    <div class="carousel-view">
                        <div class="carousel-track" id="carousel-track">
                        <!-- Injected by JS -->
                        </div>
                    </div>
                    <button class="arrow arrow-right">&#10095;</button>
                </div>
            </section>

            <section class="narrative-text">
                <div id="narrative-text-head">
                    <div class="column">
                        <h3 id="narrative-text-title" style="line-height: calc(var(--gutter));">
                            DRILLED AND SLOTTED?<br>
                            NO WORRIES.
                        </h3>
                    </div>
                </div>
                <div id="narrative-text-body">
                    <div class="column">
                        <p class="narrative-text-text">
                            Unlike DIY-drilled OEM rotors that compromise structural integrity, the BRIX Performance Street Series is <b>purpose-built</b> with precision-engineered <b>drilled and curved slotted patterns</b>, designed from the ground up for real-world performance and reliability.
                        </p>
                        <p class="narrative-text-text">
                            Each rotor is precisely machined before undergoing our proprietary <monument>SOLIDCAST&reg;</monument> heat-treatment. This ensures maximum <b>structural stability, reduces the risk of warping or cracking</b>, and <b>eliminates residual internal stress</b> from machining. Even the drilled holes are strategically positioned between the cooling vanes to preserve the rotor’s core strength.
                        </p>
                    </div>
                </div>
            </section>

            <section class="gallery-section">
                <div class="gallery">
                    <div class="gallery-item">
                        <img src="assets/images/photos/street-series/gallery-1.jpg" alt="Slide 1" />
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/photos/street-series/gallery-2.jpg" alt="Slide 2" />
                    </div>
                    <div class="gallery-item">
                        <img src="assets/images/photos/street-series/gallery-3.jpg" alt="Slide 3" />
                    </div>
                </div>
            </section>

            <section class="narrative-text">
                <div id="narrative-text-head">
                    <!-- <div class="column">
                        <h3 id="narrative-text-title" style="line-height: calc(var(--gutter));">
                            DRILLED AND SLOTTED?<br>
                            NO WORRIES.
                        </h3>
                    </div> -->
                </div>
                <div id="narrative-text-body">
                    <div class="column">
                        <p class="narrative-text-text">
                            These features aren't just cosmetic. Our drilled and slotted design <b>boosts heat dissipation by up to 20%</b>, improves braking performance, and sharpens pedal response. Chamfered hole edges help reduce stress concentration and resist cracking during repeated heat cycles, ensuring long-lasting, reliable stopping power.
                        </p>
                        <p class="narrative-text-text">
                            Worried about slightly increased pad wear? That’s the trade-off for true performance you can feel. From track laps to stoplight sprints, the Street Series delivers <b>precision-built braking power</b> that performs where it matters.
                        </p>
                    </div>
                </div>
            </section>

            <section class="recent-articles">
                <div class="recent-articles-head">
                    <div class="column">
                        <h1 class="recent-articles-title">
                            RECENT ARTICLES
                        </h1>
                    </div>
                </div>
                <div class="recent-articles-body">
                    <div class="column">
                        <div class="recent-articles-body-wrapper">
                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/brix-performance-at-campus-auto-contest-2025.html'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>EVENT</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/18/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 28, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BRIX Performance at Campus Auto Contest 2025.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Connecting with the Next Generation of Automotive Enthusiasts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/subaru-crosstrek-by-garasi-drift.html'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>STREET SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/17/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Subaru Crosstrek by Garasi Drift.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Built to Slide. Engineered to Stop.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/bmw-e36-enhanced.html'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/16/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>BMW E36 Enhanced.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Dominating the Track with BRIX Performance Competition Series.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-3 md-6 mob-12" onclick="location.href='article/subaru-wrx-vb-equipped-with-competition-series.html'">
                                <div class="recent-articles-card">
                                    <div class="recent-articles-category">
                                        <p>COMPETITION SERIES</p>
                                    </div>
                                    <div class="recent-articles-img">
                                        <img src="assets/images/photos/articles/15/header.jpg" alt="">
                                    </div>
                                    <div class="recent-articles-caption">
                                        <div class="date">
                                            <p>April 18, 2025</p>
                                        </div>
                                        <div class="title">
                                            <a>Subaru WRX VB equipped with Competition Series.</a>
                                        </div>
                                        <div class="subtitle">
                                            <p>Maximizing Track Precision with BRIX Performance.</p>
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
        <script src="assets/js/radar-chart.js"></script>
        <script src="assets/js/newsletter.js"></script>
        
        <script src="assets/js/carousel-image.js"></script>
        <script>
            initCarousel({
                trackId: 'carousel-track',
                carouselId: 'carousel',
                imagePaths: [
                    'assets/images/photos/street-series/carousel-1.jpg',
                    'assets/images/photos/street-series/carousel-2.jpg',
                    'assets/images/photos/street-series/carousel-3.jpg',
                    'assets/images/photos/street-series/carousel-4.jpg',
                    'assets/images/photos/street-series/carousel-5.jpg',
                    'assets/images/photos/street-series/carousel-6.jpg'
                ],
                autoplayInterval: 2500
            });
        </script>
    </body>
</html>