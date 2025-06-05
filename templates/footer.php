<?php
$basePath = isset($basePath) ? $basePath : '';
?>

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
                    <li><a href="https://www.tokopedia.com/brix-performance" target="_blank"><span class="icon icon-tokopedia"></span></a></li>
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
                        <div id="form-fields">
                            <input type="email" name="email" id="newsletter-email" class="u-fullwidth text-center" style="width: 75%;" placeholder="Your Email" required>
                            <button type="submit" class="btn btn--primary u-fullwidth subscribe-button" style="width: 25%;">
                                <img src="<?= $basePath ?>assets/images/icons/icon-arrow.svg" alt="Subscribe" style="transform: rotate(-90deg); height: 25px;">
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
