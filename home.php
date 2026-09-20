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


<main class="news">
    <div class="news__inner">

    <h2 class="news__heading">お知らせ一覧</h2>

    <?php if (have_posts()) : ?>

        <div class="news__list">

            <?php while (have_posts()) : the_post(); ?>

            <article class="news__item">

              <a class="news__link" href="<?php the_permalink(); ?>">
                <time class="news__date">
                    <?php echo get_the_date('Y.m.d'); ?>
                </time>

                <h2 class="news__title">
                    <?php the_title(); ?>
                </h2>
              </a>
            </article>

            <?php endwhile; ?>

        </div>

    <?php endif; ?>
    </div>
</main>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>