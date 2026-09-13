<?php

//css読み込み
function hida_works_enqueue_styles() {
    wp_enqueue_style(
        'hida_works_style',
        get_template_directory_uri().'/assets/css/common.css',
    );
}

add_action(
    'wp_enqueue_scripts',
    'hida_works_enqueue_styles'
);

//swiper読み込み
function hida_works_swiper(){
  if (is_front_page()){
  wp_enqueue_style(
   'hida-works-swiper-style', 
   'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css', 
    array(),
    null

  );

  wp_enqueue_style(
   'hida-works-front-style', 
   get_template_directory_uri().'/assets/css/front-page.css',
    array(),
    null

  );

  wp_enqueue_script(
    'hida-works-swiper-script', 
    'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
    array(),
    null,
    true   
  );

  wp_enqueue_script(
    'hida-works-front', 
    get_template_directory_uri().'/assets/js/front-page.js',
    array('hida-works-swiper-script'),
    null,
    true 
  );

  }

}

add_action(
    'wp_enqueue_scripts',
    'hida_works_swiper'
 
);