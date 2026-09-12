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
<button type="button" id="btn-open" class="site-header__nav-btn sp_only"></button>
<div class="site-header__nav-overlay sp_only"></div>
</header>