<?php get_header(); ?>

<main class="works-single">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="works-single__mainvisual">
    <?php the_post_thumbnail('full'); ?>
</div>
<section class="works-single__header">
 <div class="works-single__heading">
   <h1 class="works-single__title"><?php the_title(); ?></h1>
   <div class="works-single__meta"> 
   <span class="works-single__category">
       <?php the_terms(
            get_the_ID(),
            'works_category'
        ); ?>
    </span>
   <span class="works-single__area">
       <?php the_terms(
            get_the_ID(),
            'works_area'
        ); ?>  
   </span>
   </div>
 </div>
 <dl class="works-single__info">
    <dt class="works-single__info-label">所在地</dt>
    <dd class="works-single__info-value"><?php the_field('works_location'); ?></dd>
    <dt class="works-single__info-label">施工年月</dt>
    <dd class="works-single__info-value"><?php the_field('construction_date'); ?></dd>
    <dt class="works-single__info-label">建物種別</dt>
    <dd class="works-single__info-value">
        <?php the_terms(
            get_the_ID(),
            'works_category'
        ); ?>
    </dd>    
    <dt class="works-single__info-label">延床面積</dt>
    <dd class="works-single__info-value"><?php the_field('floor_area'); ?></dd>          
</dl>
</section>

<section class="works-single__content">
    <div class="works-single__intro">
        <h2 class="works-single__catch"><?php the_field('works_catch'); ?></h2>
        <p class="works-single__description"><?php echo nl2br(esc_html(get_field('works_description'))); ?></p>
    </div>    
    <?php
    $image_id = get_field('works_image_1');
    ?>
    <div class="works-single__main-image">
        <?php
        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id,
                'large',
                false,
                array('id' => 'js-works-main-image')
            );
        }
        ?>
    </div>
    <div class="works-single__gallery">
        <?php
        $image_id = get_field('works_image_1');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id, 
                'large',
                false,                
                array('class' => 'js-works-thumbnail')                   
            );
        }

        ?>
        <?php
        $image_id = get_field('works_image_2');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id, 
                'large',
                false,                
                array('class' => 'js-works-thumbnail')                   
            );
        }

        ?>
        <?php
        $image_id = get_field('works_image_3');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id, 
                'large',
                false,                
                array('class' => 'js-works-thumbnail')                   
            );
        }
        
        ?>
        <?php
        $image_id = get_field('works_image_4');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id, 
                'large',
                false,               
                array('class' => 'js-works-thumbnail')                   
            );
        }

        ?>                  
    </div>
</section>

<section class="works-single__staff">
    <h2 class="works-single__staff-title">担当者のコメント</h2>
     <div class="works-single__staff-content">
        <div class="staff__image">
        <?php
        $image_id = get_field('staff_image');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id,
                 'large',
                 false,               
                 array('class' => 'staff__image-img')   
            );
        }
        ?>
        </div>
        <p class="works-single__staff-comment"><?php echo nl2br(esc_html(get_field('staff_comment'))); ?></p>
    </div>

</section>

<a href="<?php echo home_url(); ?>/works" class="c-link-btn works-single__back">一覧に戻る</a>

<?php endwhile; ?>
<?php endif ?>

</main>

<?php get_footer(); ?>