<?php get_header(); ?>

<section class="hero swiper">

  <div class="swiper-wrapper">

    <div class="swiper-slide">
        <picture class ="hero__image">            
        <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/hero01-sp.webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero01.webp" alt"ヒーロー画像">
        </picture>
  
    </div>
    <div class="swiper-slide">
        <picture class ="hero__image">            
        <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/hero02-sp.webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero02.webp" alt"ヒーロー画像">
        </picture>
  
    </div>
    <div class="swiper-slide">
        <picture class ="hero__image">            
        <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/hero03-sp.webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero03.webp" alt"ヒーロー画像">
        </picture>
  
    </div>
</div> 
<div class="hero__inner">
    <div class ="hero__contents">
            <h1 class="hero__title">飛騨の暮らしを、<br>つくる。</h1>
            <p class="hero__lead">
            この土地の木で、<br class="sp_only">
            この土地の暮らしを。<br>
            これからの未来へ。    
            </p>
            <div class="hero__brand">
            <p class="hero__brand-name">Hida Works</p>
            <p class="hero__brand-copy">BUILDING A BETTER TOMORROW</p>     
            </div>
        </div>
</div>    
</section>

<section class="about">
    <div class="about__image-main">
    <img src="https://placehold.co/400x400" alt="">
    </div>
    <div class="about__body">
    <h2 class="c-section-heading about__heading">About<span class="c-section-heading__ja">Hida Worksについて</span></h2>
    <p class="about__catch">この地域の、<br>
    これからの暮らしをつくる。</p>    
    <div class="about__content">
       <p class="about__text">Hida Worksは、岐阜県飛騨地域に根ざした建設会社・工務店です。<br>
        豊かな自然と受け継がれてきた木の文化を大切にし、<br>
        人・まち・環境に寄り添った、心地よい暮らしの場をつくっています。<br>
        新築住宅からリフォーム、店舗施工まで。<br>
        この土地で暮らす人々の未来を、建築の力で支えていきます。
        </p>
    </div>
    <a class="c-link-btn" href="<?php echo home_url(); ?>/about">私たちについて詳しく見る</a>
    </div>    
    <div class="about__image">
    <div  class="about__image-sub"><img src="https://placehold.co/200x160" alt=""></div>
    <img class="about__image-message" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-message.png" alt="">   
    </div>

</section> 

<section class="service">
  <div class="service__inner">  
    <div class="service__heading">
    <h2 class="c-section-heading about__heading">Service<span class="c-section-heading__ja">事業内容</span></h2>
    <p class="service__discription">暮らしから、まちまで。<br>
    建築の力で、地域の未来をつくります。</p>
    </div>

    <div class="service__list">
        <a href="<?php echo home_url(); ?>/services/new-house/" class="service__card">
            <div class="service__image">
            <img src="https://placehold.co/500x300" alt="">
            </div>
            <div class="service__body">
            <h3 class="service__title">新築住宅<span class="service__title-en">New House</span></h3>
            <p class="service__text">飛騨の気候と風土に合った、<br>
                永く愛される木の家をつくります</p>
            <span class="service__arrow">→<span>                        
            </div>
        </a>

        <a href="<?php echo home_url(); ?>/services/new-house/" class="service__card">
            <div class="service__image">
            <img src="https://placehold.co/500x300" alt="">
            </div>
            <div class="service__body">
            <h3 class="service__title">新築住宅<span class="service__title-en">New House</span></h3>
            <p class="service__text">飛騨の気候と風土に合った、<br>
                永く愛される木の家をつくります</p>
            <span class="service__arrow">→<span>           
            </div>
        </a>

        <a href="<?php echo home_url(); ?>/services/new-house/" class="service__card">
            <div class="service__image">
            <img src="https://placehold.co/500x300" alt="">
            </div>
            <div class="service__body">
            <h3 class="service__title">新築住宅<span class="service__title-en">New House</span></h3>
            <p class="service__text">飛騨の気候と風土に合った、<br>
                永く愛される木の家をつくります</p>
            <span class="service__arrow">→<span>                        
            </div>
        </a>

  </div>
</div>
</section> 


    
<?php get_footer(); ?>