<?php get_header(); ?>

<section class="c-page-hero">

    <div class="c-page-hero__visual">
        <picture class ="c-page-hero__image">            
            <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-m.webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dummy-l.webp" alt"">
        </picture>
    </div> 
    <div class="c-page-hero__inner">
        <span class="c-page-hero__title-en">
            Contact
        </span>
        <h1 class="c-page-hero__title-jp">
            お問い合わせ
        </h1>
    </div>    
</section>


<main class="contact">

    <section class="c-page__intro">
    <h2 class="c-page__catch">家づくりのこと、<br>ご相談ください。</h2>
    <p class="c-page__lead">
    新築、リフォーム、店舗施工など、どのようなご相談でもお気軽にお問い合わせください。
    </p>    
    </section>


    <div class="contact__inner">

  
    <?php echo do_shortcode('[contact-form-7 id="f83db56" title="Hida Works お問い合わせ"]'); ?>


    </div>
</main>



<?php get_footer(); ?>