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

<section class="works">
    <div class="works__header">
    <h2 class="c-section-heading">Works<span class="c-section-heading__ja">施工事例</span></h2>
    <a href="#" class="works__link">全ての施工事例を見る</a>
    </div>

    <div class="works__list">

        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>
        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>
        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>
        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>                    
        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>

        <a href="#" class="works__card">
            <div class="works__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <div class="works__body">
            <h3 class="works__title">やすらぎの家</h3>
            <div class="works__meta">
             <span class="works__category">新築住宅</span>
             <span class="works__area">高山市</span>                     
            </div>
            </div>
        </a>
 </div>
</section> 
    
<section class="concept">

    <div class="concept__main">
    <div class="concept__inner">    
    <h2 class="c-section-heading concept__heading">Concept<span class="c-section-heading__ja">私たちの家づくり</span></h2>
    <p class="concept__catch">自然と、<br>
    人と、未来をつなぐ。
    </p>    
    <div class="concept__content">
       <p class="concept__text">Hida Worksは、岐阜県飛騨地域に根ざした建設会社・工務店です。<br>
       飛騨の豊かな自然と、受け継がれてきた技術。<br>
       そして、これからの暮らし。<br>
       Hida Worksは、この3つをつなぎ、<br>
       地域に根ざした、持続可能な家づくりを目指します。
        </p>
    </div>
    <a class="c-link-btn" href="<?php echo home_url(); ?>/about">私たちの想いを見る</a>
    </div>   

    </div>
    <div class="concept__side">
    <div class="concept__list">

        <a href="#" class="concept__card">
            <div class="concept__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <span>01</span>
            <div class="concept__body">
            <h3 class="concept__title">地域の木を活かす</h3>
            <p class="concept__text">
            飛騨の木を使い、<br>
            地域の森を守り、<br>
            次の世代へつなぎます。                   
            </p>
            </div>
        </a>
        <a href="#" class="concept__card">
            <div class="concept__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <span>02</span>
            <div class="concept__body">
            <h3 class="concept__title">暮らしに寄り添う</h3>
            <p class="concept__text">
            家族の今と未来を見据えた、<br>
            心地よい住まいを提案します。               
            </p>
            </div>
        </a>
        <a href="#" class="concept__card">
            <div class="concept__image">
            <img src="https://placehold.co/400x300" alt="">
            </div>
            <span>03</span>
            <div class="concept__body">
            <h3 class="concept__title">地域とともに</h3>
            <p class="concept__text">
            このまちの暮らしが、<br>
            もっと豊かになる建築をつくり続けます。                   
            </p>
            </div>
        </a>               
        </div>
 </div>
</section>

<section class="news">

    <div class="news__header">
        <h2 class="c-section-heading">
            News
            <span class="c-section-heading__ja">お知らせ</span>
        </h2>

        <a href="#" class="news__link">
            すべてのお知らせを見る
        </a>
    </div>

    <div class="news__body">

        <ul class="news__list">

            <li class="news__item">
                <a href="#" class="news__item-link">
                    <span class="news__date">2024.10.28</span>
                    <span class="news__category">お知らせ</span>
                    <p class="news__title">年末年始の営業について</p>
                </a>
            </li>

            <li class="news__item">
                <a href="#" class="news__item-link">
                    <span class="news__date">2024.10.28</span>
                    <span class="news__category">お知らせ</span>
                    <p class="news__title">年末年始の営業について</p>
                </a>
            </li>

            <li class="news__item">
                <a href="#" class="news__item-link">
                    <span class="news__date">2024.10.28</span>
                    <span class="news__category">お知らせ</span>
                    <p class="news__title">年末年始の営業について</p>
                </a>
            </li>
        </ul>

        <div class="news__visual">
           <img class="news__visual-image" src ="https://placehold.co/400x160" alt="">
           <div class="news__visual-text">
           <p class="news__visual-copy">つくるのは、<br>
                これからの風景。
            </p>
            <span class="news__visual-name">Hida Works</span>
           </div>  
        </div>    

    </div>
</section> 

<section class="contact">

    <div class="contact__main">
    <div class="contact__inner">    
    <h2 class="c-section-heading contact__heading">contact<span class="c-section-heading__ja">私たちの家づくり</span></h2>
    <p class="contact__catch">自然と、<br>
    人と、未来をつなぐ。
    </p>    
    <a class="c-link-btn" href="<?php echo home_url(); ?>/about">私たちの想いを見る</a>
    </div>   

    </div>
</section>
<?php get_footer(); ?>