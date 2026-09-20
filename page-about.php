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
           About
        </span>
        <h1 class="c-page-hero__title-jp">
            会社概要
        </h1>
    </div>    
</section>


<main class="c-page">


<section class="c-page__intro">
<span class="c-page__intro-en">Our Philosophy</span>
<h2 class="c-page__catch">飛騨で、永く愛される家を。</h2>
<p class="c-page__lead">
私たちは、飛騨の風土と暮らしに寄り添い、<br>
        住む人とともに時を重ねていく家づくりを大切にしています。
</p>    
</section>

<div class="about__image c-image-test">
<img class="about__image-message" src="<?php echo get_template_directory_uri(); ?>/assets/images/about01.webp" alt="">

</div>

<section class="about__message c-massage-test">
    <h2 class="about__message-title c-massage-test-title">
        この土地に根ざした、家づくりを。
    </h2>

    <p class="about__message-text c-massage-test-text ">
        飛騨には、豊かな自然と、受け継がれてきた木の文化があります。<br>
        Hida Worksは、この土地の素材や風土を大切にしながら、
        一つひとつの暮らしに寄り添う家づくりを続けています。
    </p>

    <p class="about__message-text c-massage-test-text">
        建てたときだけではなく、10年、20年と時を重ねるほど、
        愛着が深まっていく住まいへ。<br>
        地域とともに、これからの暮らしをつくっていきます。
    </p>
</section>

<section class="about-company c-company-test">
      <h2 class="c-company-test__title">会社概要</h2> 
      <div class="c-company-test__inner">
        <dl class="c-company-test__table">
          <div class="c-company-test__row">
            <dt>会社名</dt>
            <dd>株式会社 Hida Works</dd>
          </div>
          <div class="c-company-test__row">
            <dt>所在地</dt>
            <dd>
                <p>〒506-0000　岐阜県高山市架空町1-10</p>
                <p>Tel：0000-000-0000　Fax：0000-000-0000</p>
            </dd>
          </div>
          <div class="c-company-test__row">
            <dt>資本金</dt>
            <dd>5,000万円</dd>
          </div>
          <div class="c-company-test__row">
            <dt>設立</dt>
            <dd>2000年04月01日</dd>
          </div>
          <div class="c-company-test__row">
            <dt>事業内容</dt>
            <dd>新築住宅の設計・施工、住宅リフォーム、店舗の設計・施工</dd>
          </div>
        </dl>
      </div>
    </section>


<?php get_template_part('template-parts/contact'); ?>

</main>

<?php get_footer(); ?>