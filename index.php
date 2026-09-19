<?php get_header(); ?>

<?php
global $template;
echo basename($template);
?>

<?php
echo '投稿タイプ：' . get_post_type();
?>
<main>
    <h1>施工事例</h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                </a>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>