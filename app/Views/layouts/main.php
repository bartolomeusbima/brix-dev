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

        <link rel="stylesheet" href="<?= base_url('assets/css/root.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/footer.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/vendor/css/vendor.css') ?>">
    </head>
    <body>
        <div id="preloader">
            <img src="assets/images/gifs/preloader.gif" alt="Loading..." id="loader">
        </div>

        <div class="page-wrapper">

            <?= $this->include('partials/navbar') ?>

            <?= $this->renderSection('content') ?>

            <?= $this->include('partials/footer') ?>
        
        </div>

        <script src="<?= base_url('assets/vendor/js/plugins.js') ?>"></script>
        <script src="<?= base_url('assets/js/script.js') ?>"></script>
    </body>
</html>