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
            News
        </span>
        <h1 class="c-page-hero__title-jp">
            お知らせ
        </h1>
    </div>    
</section>


<main class="news-single">
    <article class="news-single__inner js-scroll is-fadeup">

    <?php if (have_posts()) : ?>
       <?php while (have_posts()) : the_post(); ?>

        <div class="news-single__header">
        <time class="news-single__date">
            <?php echo get_the_date('Y.m.d'); ?>
        </time>     
        <span class="news-single__category">

        </span>
        </div>

        <h2 class="news-single__title">
            <?php the_title(); ?>
        </h2>

        <div class="news-single__content">
            <?php the_content(); ?>
        </div>
    </article>


        <div class="news-single__nav">
            <div class="news-single__prev">
                <?php previous_post_link('%link', '←　前の記事'); ?>
            </div>
            <div class="news-single__next">
                <?php next_post_link('%link', '次の記事　→'); ?>
            </div>         
        </div>


       <?php endwhile; ?>
    <?php endif; ?>

</main>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>