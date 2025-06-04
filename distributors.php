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
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/vendor/css/vendor.css">
        <link rel="stylesheet" href="assets/css/distributor.css">
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
                            <a class="logo" href="index.php">
                                <img src="assets/images/logos/logo-brix.svg" alt="BRIX Performance Logo">
                            </a>
                        </div>

                        <a class="menu__bar__toggle" href="#0"><span>Menu</span></a>
                    </div>
                    <nav class="menu__navigation">
                        <ul class="menu__navigation__page">
                            <li class="list" onclick="location.href='index.php'">
                                <button>
                                    <a href="index.php" style="text-decoration: none; color: white">Home</a>
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
                                            <a href="street-series.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Street Series</div>
                                                        <p>Better Cooling. Daily Confidence.</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="competition-series.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-disc-competition.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Competition Series</div>
                                                        <p>Track-Proven. Maximum Grip.</p>
                                                    </div>
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- START MOBILE VIEW DROPDOWN PRODUCTS -->
                            <a href="street-series.php" style="text-decoration: none; color: white">
                                <li class="list products list-mobile-products" onclick="location.href='street-series.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-disc-street.svg" alt="Homepage">
                                        <a>Street Series</a>
                                    </button>
                                </li>
                            </a>
                            <a href="competition-series.php">
                                <li class="list products list-mobile-products" onclick="location.href='competition-series.php'">
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
                                            <a href="testimony.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Testimony</div>
                                                        <p>Customer's testimony</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="warranty-statement.php">
                                                <li>
                                                    <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                                    <div class="item-title">
                                                        <div class="item-subtitle">Warranty Statement</div>
                                                        <p>Read our warranty statement</p>
                                                    </div>
                                                </li>
                                            </a>
                                            <a href="privacy-policy.php">
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
                                <li class="list information list-mobile-information" onclick="location.href='testimony.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-testimony.svg" alt="Homepage">
                                        <a>Testimony</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='warranty-statement.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-warranty-statement.svg" alt="Homepage">
                                        <a>Warranty Statement</a>
                                    </button>
                                </li>
                            </a>
                            <a>
                                <li class="list information list-mobile-information" onclick="location.href='index.php'">
                                    <button>
                                        <img src="assets/images/icons/icon-privacy-policy.svg" alt="Homepage">
                                        <a>Privacy Policy</a>
                                    </button>
                                </li>
                            </a>
                            <!-- END MOBILE VIEW DROPDOWN INFORMATIONS -->
                            <li class="list" onclick="location.href='distributors.php'">
                                <button>
                                    <a href="distributors.php" style="text-decoration: none; color: white">Distributors</a>
                                </button>
                            </li>
                            <li class="list article" onclick="location.href='article.php'">
                                <button>
                                    <a href="article.php" style="text-decoration: none; color: white">Article</a>
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

            <section class="distributor">
                <div class="distributor-head">
                    <div class="column">
                        <h1 class="distributor-title">
                            DISTRIBUTORS
                        </h1>
                    </div>
                </div>

                <div class="distributor-head">
                    <div class="column">
                        <div class="distributor-map">
                            <iframe src="https://www.google.com/maps/d/embed?mid=11XE3-pjJwty4I0LfzHxwjB7OENokqwc&ehbc=2E312F" width="100%" height="500"></iframe>
                        </div>
                    </div>
                </div>

                <div class="filters">
                    <button class="filter-btn active" data-filter="filter-all">ALL</button>
                    <button class="filter-btn" data-filter="filter-banten">BANTEN</button>
                    <button class="filter-btn" data-filter="filter-dki-jakarta">DKI JAKARTA</button>
                    <button class="filter-btn" data-filter="filter-central-java">CENTRAL JAVA</button>
                    <button class="filter-btn" data-filter="filter-di-yogyakarta">DI YOGYAKARTA</button>
                    <button class="filter-btn" data-filter="filter-east-java">EAST JAVA</button>
                </div>

                <div class="distributor-body">
                    <div class="column">
                        <div class="distributor-body-wrapper">

                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.25131196569!2d106.87179360122546!3d-6.187158262821322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f54d12009d71%3A0xbc1c6a045f5f9ad0!2sASCO%20Motorsport!5e0!3m2!1sen!2sid!4v1748355808100!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Car Repair and Maintenance Service</p>
                                        </div>
                                        <div class="header">
                                            <a>ASCO Motorsport</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 819 3555 7776</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Jl. Kolonel Sugiono No.20 12, RT.14/RW.9, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13430</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-central-java">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7734547401483!2d110.81072567500304!3d-7.599616392415242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3de893ee86cb%3A0x6158283cd51b0ce5!2sSha%20Autoshop!5e0!3m2!1sen!2sid!4v1744293121210!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>SHA AUTOSHOP</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 895 1899 5278</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Jl. Paris 1 Jl. Raya Solo Baru blok JE 5, Dusun I, Madegondo, Kec. Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.347430818186!2d106.74625269678953!3d-6.217831899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7ce28309cf5%3A0xba4c4f48950797c9!2sUNDERCONTROL%20Suspension%20System!5e0!3m2!1sen!2sid!4v1744292945963!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>UNDERCONTROL</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 812 7910 6228</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>No.8uc, Jl. Joglo Raya, Joglo, Kembangan, West Jakarta City, Jakarta 11640</p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-banten">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.91796557152!2d106.6306808!3d-6.2664273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbf4ca847221%3A0x2f11f8c6a1c89c3b!2s4Eleven%20Store!5e0!3m2!1sen!2sid!4v1727197521698!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Car Accessories Store</p>
                                        </div>
                                        <div class="header">
                                            <a>4ELEVEN STORE</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 821 8888 8705</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Ruko Mendrisio, Jl. BSD Raya Utama Boulevard 3 B19, Cihuni, Kec. Pagedangan, Kabupaten Tangerang, Banten 15332, Indonesia</p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-banten">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63462.111913528235!2d106.58663890128165!3d-6.213247456233763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd7c0d5cc87d%3A0x38fcc3690bb1cc18!2sYH%20Brake&#39;s%20(Big%20Brake%20Kit)!5e0!3m2!1sen!2sid!4v1727201071757!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>YH Brake's (Brake Avenue)</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 812 7544 5547</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Ruko Gadget Blok A No.8, Paramount, Serpong Sub-District, Tangerang Regency, Banten, Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-banten">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7654659477644!2d106.68592447475132!3d-6.294522693694543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69facfdc812dd5%3A0x6d9161ec4ad736ca!2sAHT%20Garage!5e0!3m2!1sen!2sid!4v1727203173399!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Motorsports Store</p>
                                        </div>
                                        <div class="header">
                                            <a>AHT Garage</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 215 384 897</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Bumi Serpong Damai, Jl. No.26 Tangerang Selatan, Jl. Serpong Raya, Lengkong Gudang Tim., Kec. Serpong, Kota Tangerang Selatan, Banten 15321, Indonesia</p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-banten">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.026900203507!2d106.6197211!3d-6.2628433!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd007c3848d1%3A0x8e97283dfef1cf1c!2s2Step%20Garage!5e0!3m2!1sen!2sid!4v1727290426546!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>2Step Garage</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Contact</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>+62 896 4880 7066</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>                                                                                                  
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title">
                                                    <a>Address</a>
                                                </div>
                                                <div class="subtitle">
                                                    <p>Ruko Bolsena, Jl. Newton Raya Bolsena Gading Serpong Blok E12, Curug Sangereng, Kelapa Dua, Tangerang Regency, Banten 15810</p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- RMODA Workshop -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.802569257348!2d106.7329782!3d-6.1708231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f78bbf697e93%3A0xfd1f96b48223bdac!2sRMODA%20workshop%20%7C%20Bengkel%20Mobil%20Jakarta!5e0!3m2!1sen!2sid!4v1727286420776!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Repair Shop</p>
                                        </div>
                                        <div class="header">
                                            <a>RMODA Workshop</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 877 7500 1712</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Bojong Raya No.101, Rw. Buaya, Cengkareng, Jakarta Barat, DKI Jakarta 11740</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Naga 76 Autostation -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.616072879939!2d106.7153277!3d-6.1770487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f98ee20aec59%3A0xf2d8a33e03e71544!2sNaga%2076%20Autosport!5e0!3m2!1sen!2sid!4v1727354284358!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Naga 76 Autostation</p>
                                        </div>
                                        <div class="header">
                                            <a>Naga 76 Autostation</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 858 1160 8666</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>RPF8+54P, RT.6/RW.13, Duri Kosambi, Cengkareng, Jakarta 11750</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- New Apollo Motor Pegangsaan -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18481.72072672942!2d106.91369382341937!3d-6.1385294780401525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b1598487479%3A0xffec5ba2334eb6d6!2sNEW%20APOLLO%20MOTOR%20PEGANGSAAN!5e0!3m2!1sen!2sid!4v1730517820207!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Electrical Service</p>
                                        </div>
                                        <div class="header">
                                            <a>New Apollo Motor Pegangsaan</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 878 8947 5271</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Pegangsaan Dua, Semper Bar., Cilincing, Jkt Utara, Jakarta 14250</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Autorev8 -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-dki-jakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.789744944535!2d106.7654437!3d-6.1712514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5171dfb4e3b%3A0x89165360db6c8831!2sAutorev8!5e0!3m2!1sen!2sid!4v1730519524662!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>Autorev8</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 877 8254 9055</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Panjang No.1b, Kedoya Utara, Kebon Jeruk, Jakarta Barat 11520</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ed's Autostore -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-central-java">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.1525700577!2d110.412997!3d-6.975291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f52ce1158f25%3A0x125e35333d081672!2sEd's%20Autostore!5e0!3m2!1sen!2sid!4v1727287649786!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Oil Change Service</p>
                                        </div>
                                        <div class="header">
                                            <a>Ed's Autostore</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 243 514 078</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Imam Bonjol No.123a, Pindrikan Lor, Semarang Tengah, Kota Semarang, Jawa Tengah 50131</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Kenji Auto Station -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-central-java">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15839.789969080364!2d110.4260459!3d-7.015458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b7ffc2aca3f%3A0x82326420ce7454f!2sKenji%20Auto%20Station!5e0!3m2!1sen!2sid!4v1727288532575!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Car Repair and Maintenance Service</p>
                                        </div>
                                        <div class="header">
                                            <a>Kenji Auto Station</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 822 9999 0388</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Talang, Candi, Candisari, Kota Semarang, Jawa Tengah 50256</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hofmeister -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-di-yogyakarta">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7229367217265!2d110.36700877476635!3d-7.8191233922015915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a1c24e34041%3A0xe43a0295d33f4f19!2sHOFMEISTER!5e0!3m2!1sen!2sid!4v1727288979426!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Repair Shop</p>
                                        </div>
                                        <div class="header">
                                            <a>Hofmeister</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 877 3042 3382</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Prawirotaman No.12, Brontokusuman, Mergangsan, Yogyakarta City, DIY 55153</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sumber Bakti Motor -->
                            <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper filter-east-java">
                                <div class="distributor-card">
                                    <div class="distributor-img">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4099222446607!2d112.6297415750079!3d-8.059601691967982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627688bf7e8c5%3A0x239ef8d5ee864c1b!2sSUMBER%20BAKTI%20MOTOR!5e0!3m2!1sen!2sid!4v1727289407060!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 250px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <div class="distributor-detail">
                                        <div class="date">
                                            <p>Auto Parts Store</p>
                                        </div>
                                        <div class="header">
                                            <a>Sumber Bakti Motor</a>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                </svg>
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Contact</a></div>
                                                <div class="subtitle"><p>+62 341 833 266</p></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="column collapse lg-2 mob-2">
                                                <svg width="27px" height="27px" viewBox="0 0 0.81 0.81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.405 0.068c-0.149 0 -0.27 0.122 -0.27 0.27 0 0.182 0.236 0.388 0.246 0.398 0.007 0.003 0.017 0.007 0.024 0.007s0.017 -0.003 0.024 -0.007C0.439 0.726 0.675 0.52 0.675 0.338c0 -0.149 -0.122 -0.27 -0.27 -0.27m0 0.597c-0.071 -0.068 -0.203 -0.213 -0.203 -0.327 0 -0.111 0.091 -0.203 0.203 -0.203s0.203 0.091 0.203 0.203 -0.132 0.26 -0.203 0.327M0.405 0.203c-0.074 0 -0.135 0.061 -0.135 0.135s0.061 0.135 0.135 0.135 0.135 -0.061 0.135 -0.135 -0.061 -0.135 -0.135 -0.135m0 0.203c-0.037 0 -0.068 -0.03 -0.068 -0.068s0.03 -0.068 0.068 -0.068 0.068 0.03 0.068 0.068 -0.03 0.068 -0.068 0.068" fill="#0D0D0D"/>
                                                </svg>    
                                            </div>
                                            <div class="column collapse lg-10 mob-10">
                                                <div class="title"><a>Address</a></div>
                                                <div class="subtitle"><p>Jl. Raya Tambakrejo Bululawang, (Timur Warung Pagi), Tambakasri, Malang, East Java 61419</p></div>
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

        <script>
            const buttons = document.querySelectorAll(".filter-btn");
            const cards = document.querySelectorAll(".distributor-card-wrapper");
        
            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    document.querySelector(".filter-btn.active")?.classList.remove("active");
                    button.classList.add("active");

                    const filter = button.getAttribute("data-filter"); // e.g., "filter-dki-jakarta" or "all"

                    cards.forEach(card => {
                    if (filter === "filter-all") {
                        card.classList.remove("hidden");
                    } else {
                        if (card.classList.contains(filter)) {
                        card.classList.remove("hidden");
                        } else {
                        card.classList.add("hidden");
                        }
                    }
                    });
                });
            });
        </script>
    </body>
</html>