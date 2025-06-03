(function(html) {

    const ssPreloader = function() {
        const siteBody = document.querySelector('body');
        const preloader = document.querySelector('#preloader');
        if (!preloader) return;

        html.classList.add('ss-preload');
        
        window.addEventListener('load', function() {
            html.classList.remove('ss-preload');
            html.classList.add('ss-loaded');

            preloader.addEventListener('transitionend', function afterTransition(e) {
                if (e.target.matches('#preloader')) {
                    siteBody.classList.add('ss-show');
                    e.target.style.display = 'none';
                    preloader.removeEventListener(e.type, afterTransition);
                }
            });
        });
    };

    const ssMobileMenu = function() {
        const toggleButton = document.querySelector('.menu__bar__toggle');
        const mainNavWrap = document.querySelector('.menu__navigation');
        const siteBody = document.querySelector('body');

        if (!(toggleButton && mainNavWrap)) return;

        toggleButton.addEventListener('click', function(event) {
            event.preventDefault();
            toggleButton.classList.toggle('is-clicked');
            siteBody.classList.toggle('menu-is-open');
        });

        mainNavWrap.querySelectorAll('.menu__navigation').forEach(function(link) {
            link.addEventListener("click", function(event) {
                if (window.matchMedia('(max-width: 800px)').matches) {
                    toggleButton.classList.toggle('is-clicked');
                    siteBody.classList.toggle('menu-is-open');
                }
            });
        });

        window.addEventListener('resize', function() {
            if (window.matchMedia('(min-width: 801px)').matches) {
                if (siteBody.classList.contains('menu-is-open')) siteBody.classList.remove('menu-is-open');
                if (toggleButton.classList.contains('is-clicked')) toggleButton.classList.remove('is-clicked');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const list_products = document.querySelectorAll(".menu__navigation__page li.list.products");
            const list_information = document.querySelectorAll(".menu__navigation__page li.list.information");
            
            list_products.forEach(function(list) {
                list.addEventListener('click', function() {
                    const mobileArrow = list.querySelector(".mobile-arrow-products");
                    const button = list.querySelector(".btn-products");
                    if (mobileArrow) {
                        mobileArrow.classList.toggle("flipper");
                        const hiddenList = document.querySelectorAll(".menu__navigation__page li.list.products.list-mobile-products");
                        hiddenList.forEach(function(list) {
                            list.classList.toggle("menu-is-open");
                        });
                        button.classList.toggle("is-open");
                    }
                });
            });

            list_information.forEach(function(list) {
                list.addEventListener('click', function() {
                    const mobileArrow = list.querySelector(".mobile-arrow-information");
                    const button = list.querySelector(".btn-information");
                    if (mobileArrow) {
                        mobileArrow.classList.toggle("flipper");
                        const hiddenList = document.querySelectorAll(".menu__navigation__page li.list.information.list-mobile-information");
                        hiddenList.forEach(function(list) {
                            list.classList.toggle("menu-is-open");
                        });
                        button.classList.toggle("is-open");
                    }
                });
            });
        });    
    };

    const ssNewsletterSubscribe = function() {
        const form = document.getElementById("newsletter-form");
        const emailInput = document.getElementById("newsletter-email");
        const formFields = document.getElementById("form-fields");
        const thankYouMsg = document.getElementById("thank-you-msg");

        if (!form || !emailInput) return;

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const email = emailInput.value;

            fetch("subscribe.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: new URLSearchParams({ email })
            })
            .then(res => res.text())
            .then(res => {
                if (res.includes("Thanks") || res.includes("success")) {
                    formFields.style.display = "none";
                    thankYouMsg.style.display = "block";
                } else {
                    alert("Something went wrong. Please try again.");
                }
            })
            .catch(() => {
                alert("Connection failed. Please try again later.");
            });
        });
    };

    (function Init() {
        ssPreloader();
        ssMobileMenu();
        ssNewsletterSubscribe();
    })();

})(document.documentElement);