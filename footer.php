<?php wp_footer(); ?>

<footer class="site-footer">

    <div class="site-footer__main">

        <a href="<?php echo home_url(); ?>" class="site-footer__logo-link">
            <img
                class="site-footer__logo-mark"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/hida-works-symbol.svg"
                alt="Hida Worksロゴ"
            >

            <div class="site-footer__logo-text">
                <span class="site-footer__logo-name">Hida Works</span>
                <span class="site-footer__logo-description">飛騨の暮らしを、つくる。</span>
            </div>
        </a>
        <div class="site-footer__left">
        <nav class="site-footer__nav">
            <ul class="site-footer__nav-list">
                <li>
                    <a href="<?php echo home_url(); ?>/about" class="site-footer__nav-link">
                        About<span>会社概要</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/services" class="site-footer__nav-link">
                        Services<span>サービス</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/works" class="site-footer__nav-link">
                        Works<span>施工事例</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/news" class="site-footer__nav-link">
                        News<span>お知らせ</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/contact" class="site-footer__nav-link">
                        Contact<span>お問い合わせ</span>
                    </a>
                </li>
            </ul>
        </nav>

        <ul class="site-footer__sns-list">
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.svg" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-youtube.svg" alt="YouTube">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.svg" alt="Facebook">
                </a>
            </li>
        </ul>
    </div>
    </div>

    <div class="site-footer__bottom">
        <small class="site-footer__copyright">
            © 2026 Hida Works. All Rights Reserved.
        </small>

        <small class="site-footer__message">
            この土地の、これからの暮らしをつくる。
        </small>
    </div>

    <?php wp_footer(); ?>

</footer>
</body>
</html>