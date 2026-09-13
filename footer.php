<?php wp_footer(); ?>

<footer>
<div>    
<a href="<?php echo home_url(); ?>" class="site-header__logo-link">
    <img class="site-header__logo-mark" src="<?php echo get_template_directory_uri(); ?>/assets/images/hida-works-symbol.svg" alt="hidaworksロゴ">
    <div class="site-header__logo-text">
    <span class="site-header__logo-name">Hida Works</span>
    <span class="site-header__logo-description">飛騨の暮らしを、つくる。</span>
    </div>
    </a>
<nav class="site-header__nav">   
    <ul class="site-header__nav-list">
        <li><a href="<?php echo home_url(); ?>/about" class="site-header__nav-link">About<span>会社概要</span></a></li>
        <li><a href="<?php echo home_url(); ?>/services" class="site-header__nav-link">Services<span>サービス</span></a></li>
        <li><a href="<?php echo home_url(); ?>/works" class="site-header__nav-link">Works<span>施工事例</span></a></li>
        <li><a href="<?php echo home_url(); ?>/news" class="site-header__nav-link">News<span>お知らせ</span></a></li>
        <li><a href="<?php echo home_url(); ?>/contact" class="site-header__nav-link">Contact<span>お問い合わせ</span></a></li>
    </ul>
</nav>
<div>
<ul class="site-footer__sns-list">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.svg" alt="インスタグラム"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-youtube.svg" alt="ユーチューブ"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.svg" alt="フェイスブック"></a></li>        

    </ul>

</div>
</div>
<div>
<span>© 2026 Hida Works. All Rights Reserved.</span>
<small>この土地の、これからの暮らしをつくる。</small>

</div>
</footer>
</body>
</html>