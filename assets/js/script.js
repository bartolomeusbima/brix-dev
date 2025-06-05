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
                if (e.target.matches('#preloader'))  {
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

                // at 1200px and below
                if (window.matchMedia('(max-width: 1200px)').matches) {
                    toggleButton.classList.toggle('is-clicked');
                    siteBody.classList.toggle('menu-is-open');
                }
            });
        });

        window.addEventListener('resize', function() {

            // above 1200px
            if (window.matchMedia('(min-width: 1201px)').matches) {
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
                    // const hiddenList = list.querySelectorAll(".list-mobile-products")
                    const button = list.querySelector(".btn-products")

                    if (mobileArrow) {
                        mobileArrow.classList.toggle("flipper");
                        // hiddenList.classList.toggle("menu-is-open");

                        const hiddenList = document.querySelectorAll(".menu__navigation__page li.list.products.list-mobile-products");

                        hiddenList.forEach(function(list) {
                            list.classList.toggle("menu-is-open");
                        })

                        button.classList.toggle("is-open")
                    }
                });
            });

            list_information.forEach(function(list) {

                list.addEventListener('click', function() {
                    const mobileArrow = list.querySelector(".mobile-arrow-information");
                    // const hiddenList = list.querySelectorAll(".list-mobile-information")
                    const button = list.querySelector(".btn-information")

                    if (mobileArrow) {
                        mobileArrow.classList.toggle("flipper");
                        // hiddenList.classList.toggle("menu-is-open");

                        const hiddenList = document.querySelectorAll(".menu__navigation__page li.list.information.list-mobile-information");

                        hiddenList.forEach(function(list) {
                            list.classList.toggle("menu-is-open");
                        })

                        button.classList.toggle("is-open")
                    }
                });
            });
        });    

    };

    const ssLightbox = function() {
 
        // video lightbox
        const videoLightbox = function() {

            const videoLink = document.querySelector('#hero-trailer-btn');
            if (!videoLink) return;
    
            videoLink.addEventListener('click', function(event) {
    
                const vLink = this.getAttribute('href');
                const iframe = "<iframe id='video' src='" + vLink + "' frameborder='0'></iframe>";
    
                event.preventDefault();
    
                const instance = basicLightbox.create(iframe);
                instance.show()
    
            });
    
        };

        // portfolio lightbox
        const folioLightbox = function() {

            const folioLinks = document.querySelectorAll('.showcase .showcase-modal-link');
            const modals = [];

            folioLinks.forEach(function(link) {
                let modalbox = link.getAttribute('href');
                let instance = basicLightbox.create(
                    document.querySelector(modalbox),
                    {
                        onShow: function(instance) {
                            //detect Escape key press
                            document.addEventListener("keydown", function(event) {
                                event = event || window.event;
                                if (event.key === "Escape") {
                                    instance.close();
                                }
                            });
                            
                            // const video = instance.element().querySelector('.iframe').contentWindow;
                            // console.log(video)
                            // const video1 = video.contentWindow.document.querySelector('video');
                            // const video1 = video.document;
                            // console.log(video1)

                            // modals.push(instance);

                        }
                    }
                )
                modals.push(instance);
                // });

                // console.log(modals)
    
        
                folioLinks.forEach(function(link, index) {
                    link.addEventListener("click", function(event) {
                        event.preventDefault();
                        modals[index].show();

                        console.log(modals[index].element().querySelector('iframe').contentWindow)

                        const iframe = modals[index].element().querySelector('iframe');

                        iframe.onload = () => {
                            const video = iframe.contentWindow.document.querySelector('video');
                            if (video) {
                                video.currentTime = 0;
                                video.play();
                            } else {
                                console.warn('Video not found inside iframe');
                            }
                        };
                    });
                });
            });
    
            
    
        };

        const testimonyLightbox = function() {

            const folioLinks = document.querySelectorAll('.brick .entry__link');
            const modals = [];
    
            folioLinks.forEach(function(link) {
                let modalbox = link.getAttribute('href');
                let instance = basicLightbox.create(
                    document.querySelector(modalbox),
                    {
                        onShow: function(instance) {
                            //detect Escape key press
                            document.addEventListener("keydown", function(event) {
                                event = event || window.event;
                                if (event.key === "Escape") {
                                    instance.close();
                                }
                            });
                        }
                    }
                )
                modals.push(instance);
            });
    
            folioLinks.forEach(function(link, index) {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    modals[index].show();
                });
            });
    
        };

        videoLightbox();
        folioLightbox();
        testimonyLightbox();
 
    };

    const ssSwiper = function() {

        const testimonialsSwiper = new Swiper('.s-testimonials__slider', {

            "loop": true,
            "speed": 600,
            "autoplay": {
                "delay": 5000
            },
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                "type": "bullets",
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 1,
                    spaceBetween: 50
                },
                // when window width is > 1180px
                1181: {
                    slidesPerView: 1,
                    spaceBetween: 100
                }
            }
        });

    };

    const ssSwiperTestimony = function() {

        const testimonialsSwiper = new Swiper('.s-testimony__slider', {

            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is > 400px
                401: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is > 800px
                801: {
                    slidesPerView: 1,
                    spaceBetween: 50
                },
                // when window width is > 1180px
                1181: {
                    slidesPerView: 1,
                    spaceBetween: 100
                }
            }
        });

    };

    (function Init() {

        ssPreloader();
        ssMobileMenu();
        ssLightbox();
        ssSwiper();  
        ssSwiperTestimony();

    })();

})(document.documentElement);