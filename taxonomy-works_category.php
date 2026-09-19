<?php get_header(); ?>

<?php
$term = get_queried_object();
$slug = $term->slug;
?>

<section class="c-page-hero">

    <div class="c-page-hero__visual">
        <picture class ="c-page-hero__image">            
            <source media="(max-width:767px)" srcset ="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($slug); ?>-hero-sp.webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($slug); ?>-hero-pc.webp" alt"">
        </picture>
    </div> 
    <div class="c-page-hero__inner">
        <span class="c-page-hero__title-en">
            Works
        </span>
        <h1 class="c-page-hero__title-jp">
            <?php echo esc_html($term->name); ?>
        </h1>
    </div>    
</section>


<main class="works-archive">

    <h2 class="works-archive__catch">暮らしの数だけ、<br>物語がある。-<?php echo esc_html($term->name); ?>-</h2>
    <p class="works-archive__lead">Hida Worksが手がけた、<?php echo esc_html($term->name); ?>の施工事例をご紹介します。</p>

    <?php if (have_posts()) : ?>

        <div class="works-archive__list">

            <?php while (have_posts()) : the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="c-works__card">
                <div class="c-works__image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>
                <div class="c-works__body">
                    <h3 class="c-works__title"><?php the_title(); ?></h3>
                    <div class="c-works__meta">
                        <span class="c-works__category">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'works_category');

                        if ($terms && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                        }
                        ?>
                        </span>
                        <span class="c-works__area">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'works_area');

                        if ($terms && !is_wp_error($terms)) {
                            echo esc_html($terms[0]->name);
                        }
                        ?>
                        </span>                     
                    </div>
                </div>
            </a>

            <?php endwhile; ?>

        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>