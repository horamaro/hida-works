<?php get_header(); ?>

<section class="c-page-hero">

    <div class="c-page-hero__visual">
        <picture class ="c-page-hero__image">            
            <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/services-hero-sp.webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-hero-pc.webp" alt"">
        </picture>
    </div> 
    <div class="c-page-hero__inner">
        <span class="c-page-hero__title-en">
            Services
        </span>
        <h1 class="c-page-hero__title-jp">
            事業内容
        </h1>
    </div>    
</section>


<main class="services">


<section class="c-page__intro js-scroll is-fadeup">
<span class="c-page__intro-en">Our Service</span>
<h2 class="c-page__catch">飛騨の暮らしに寄り添う、家づくり。</h2>
<p class="c-page__lead">
Hida Worksでは、新築住宅からリフォーム、店舗施工まで、<br>
飛騨の風土と暮らしに合わせた建物づくりを行っています。
</p>    
</section>

<div class="services__list js-scroll is-fadeup">
    <section id="new-house" class="services__item">
        <div class="services__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-l.webp" alt="">
        </div>
        <div class="services__content">
            <span class="services__num">01</span>
            <h2 class="services__title">新築住宅</h2>
            <span class="services__title-en">New House</span>
            <p class="services__text">
            この土地で、心地よく暮らし続ける家。<br>
            <br>
            飛騨の気候や風土を活かし、<br>
            家族の暮らしに寄り添う住まいをつくります。<br>
            光や風の入り方、日々の動線、素材の質感まで丁寧に考え、<br>
            年月を重ねるほど愛着の深まる家を目指します。
            </p>
        </div>
    </section>

    <section id="renovation" class="services__item">
        <div class="services__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-l.webp" alt="">
        </div>
        
        <div class="services__content">
            <span class="services__num">02</span>
            <h2 class="services__title">リフォーム</h2>
            <span class="services__title-en">Renovation</span>
            <p class="services__text">
            今あるものを大切に、これからの暮らしへ。<br>
            <br>
            住み慣れた家の良さを活かしながら、<br>
            今の暮らしに合った快適な空間へ整えます。<br>
            部分的な改修から住まい全体のリノベーションまで、<br>
            建物の状態やご希望に合わせてご提案します。
            </p>
        </div>
    </section>

    <section id="shop" class="services__item">
        <div class="services__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-l.webp" alt="">
        </div>       
        <div class="services__content">
            <span class="services__num">03</span>
            <h2 class="services__title">店舗施工</h2>
            <span class="services__title-en">Shop Construction</span>
            <p class="services__text">
            人とまちをつなぐ、心地よい場所を。<br>
            <br>
            飲食店やカフェ、ショップなど、<br>
            その場所ならではの魅力を活かした空間をつくります。<br>
            デザインだけでなく使いやすさや動線にも配慮し、<br>
            訪れる人にも働く人にも心地よい店舗を目指します。
            </p>
        </div>
    </section>    
</div>

<?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>