<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">

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
<button type="button" id="js-btn-open" class="site-header__nav-btn sp_only">
<span></span><span></span><span></span>   
</button>
<div class="site-header__nav-overlay sp_only"></div>

<div class="site-header__sp-menu sp_only" id="js-sp-menu">
<div class="site-header__sp-menu-inner">
    <button type="button" class="site-header__sp-menu-close" id="btn-close"></button>

    <nav class="site-header__sp-nav">
    <ul class="site-header__sp-nav-list">
    <li><a href="<?php echo home_url(); ?>/about" class="site-header__sp-nav-link">About<span>会社概要</span></a></li>
        <li><a href="<?php echo home_url(); ?>/services" class="site-header__sp-nav-link">Services<span>サービス</span></a></li>
        <li><a href="<?php echo home_url(); ?>/works" class="site-header__sp-nav-link">Works<span>施工事例</span></a></li>
        <li><a href="<?php echo home_url(); ?>/news" class="site-header__sp-nav-link">News<span>お知らせ</span></a></li>
        <li><a href="<?php echo home_url(); ?>/contact" class="site-header__sp-nav-link">Contact<span>お問い合わせ</span></a></li>
    </ul>
  </nav>
    <ul class="site-header__sns-list">
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
  <div class="site-header__sp-menu-visual">
    <img class="site-header__sp-menu-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sp-menu-visual.webp" alt="イメージ">
    <p class="site-header__sp-menu-copy">この土地の<br>これからの暮らしをつくる。</p>
  </div>  
</div>

</header>

