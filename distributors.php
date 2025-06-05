<?php
    include 'data/distributors.php';
?>

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

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JYYS6CNFN8"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-JYYS6CNFN8');
        </script>

        <link rel="stylesheet" href="assets/css/root.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/distributor.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/vendor/css/vendor.css">
    </head>
    <body>
        <div id="preloader">
            <img src="assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="s-pagewrap">

            <?php
                $basePath = '';
                include 'templates/navbar.php';
            ?>

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

                            <?php foreach ($distributors as $d): ?>
                                <div class="column collapse lg-4 md-6 mob-12 distributor-card-wrapper <?= $d['region'] ?>">
                                    <div class="distributor-card">
                                        <div class="distributor-img">
                                            <?= $d['map'] ?>
                                        </div>
                                        <div class="distributor-detail">
                                            <div class="date">
                                                <p><?= $d['type'] ?></p>
                                            </div>
                                            <div class="header">
                                                <a><?= $d['name'] ?></a>
                                            </div>
                                            <div class="row">
                                                <div class="column collapse lg-2 mob-2">
                                                    <svg fill="#000000" width="24px" height="24px" viewBox="0 0 0.72 0.72" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.583 0.39c-0.007 0 -0.013 -0.002 -0.02 -0.004a0.282 0.282 0 0 1 -0.039 -0.012 0.06 0.06 0 0 0 -0.074 0.03l-0.007 0.013a0.366 0.366 0 0 1 -0.08 -0.06 0.366 0.366 0 0 1 -0.06 -0.08l0.013 -0.008a0.06 0.06 0 0 0 0.03 -0.074 0.3 0.3 0 0 1 -0.012 -0.039c-0.002 -0.007 -0.003 -0.013 -0.004 -0.02a0.09 0.09 0 0 0 -0.09 -0.075h-0.09a0.09 0.09 0 0 0 -0.09 0.102 0.57 0.57 0 0 0 0.496 0.494h0.011a0.09 0.09 0 0 0 0.06 -0.023 0.09 0.09 0 0 0 0.03 -0.068v-0.09a0.09 0.09 0 0 0 -0.074 -0.087m0.015 0.18a0.03 0.03 0 0 1 -0.01 0.022 0.032 0.032 0 0 1 -0.025 0.007A0.51 0.51 0 0 1 0.122 0.157a0.033 0.033 0 0 1 0.007 -0.025 0.03 0.03 0 0 1 0.022 -0.01h0.09a0.03 0.03 0 0 1 0.03 0.024q0.002 0.012 0.004 0.024a0.33 0.33 0 0 0 0.014 0.046l-0.042 0.019a0.03 0.03 0 0 0 -0.015 0.04 0.435 0.435 0 0 0 0.21 0.21 0.03 0.03 0 0 0 0.023 0 0.03 0.03 0 0 0 0.017 -0.016l0.019 -0.042a0.42 0.42 0 0 0 0.047 0.014q0.012 0.003 0.024 0.004a0.03 0.03 0 0 1 0.024 0.03Z"/>
                                                    </svg>
                                                </div>
                                                <div class="column collapse lg-10 mob-10">
                                                    <div class="title"><a>Contact</a></div>
                                                    <div class="subtitle"><p><?= $d['contact'] ?></p></div>
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
                                                    <div class="subtitle"><p><?= $d['address'] ?></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>

            <?php
                $basePath = '';
                include 'templates/footer.php';
            ?>
        
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