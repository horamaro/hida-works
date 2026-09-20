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

//js読み込み
function hida_works_enqueue_scripts() {
    wp_enqueue_script(
        'hida_works_script',
        get_template_directory_uri().'/assets/js/common.js',
        array(),
        null,
        true
    );
}
add_action(
    'wp_enqueue_scripts',
    'hida_works_enqueue_scripts'
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

//カスタム投稿
function hida_works_custom_post_type() {
	register_post_type('works',
		array(
			'labels'      => array(
				'name'          => '施工事例',
				'singular_name' => '施工事例',
			),
				'public'      => true,
				'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-admin-home',
        'supports'     => array(
          'title',
          'editor',
          'thumbnail'
      ),        
		)
	);
}
add_action('init', 'hida_works_custom_post_type');
// カスタム投稿アイキャッチ画像を有効化
function hida_works_theme_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'hida_works_theme_setup');


// カスタムタクソノミー施工事例のカテゴリー
function hida_works_register_works_taxonomy() {

    register_taxonomy(
        'works_category',//名前 
        'works',//セットする投稿タイプ
        array(
            'labels' => array(
                'name'          => '施工種別',
                'singular_name' => '施工種別',
            ),
            'public'       => true,
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action(
    'init',
    'hida_works_register_works_taxonomy'
);

// カスタムタクソノミー施工地域のカテゴリー
function hida_works_register_area_taxonomy() {

    register_taxonomy(
        'works_area',//名前 
        'works',//セットする投稿タイプ
        array(
            'labels' => array(
                'name'          => '施工地域',
                'singular_name' => '施工地域',
            ),
            'public'       => true,
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action(
    'init',
    'hida_works_register_area_taxonomy'
);


//それぞれのページのcssを読み込む
function hida_works_page_styles(){
  if (is_singular('works')) {
    wp_enqueue_style(
        'hida-works-single-works',
        get_template_directory_uri() . '/assets/css/single-works.css',
        array('hida_works_style')//commonに依存

    );
  }

  if (
      is_post_type_archive('works') ||
      is_tax('works_category') ||
      is_tax('works_area')
  ) {
      wp_enqueue_style(
          'hida-works-archive-works',
          get_template_directory_uri() . '/assets/css/archive-works.css',
          array('hida_works_style')
      );
  }

  if(is_page('services')){
    wp_enqueue_style(
        'hida-works-services',
        get_template_directory_uri() .'/assets/css/page-services.css',
        array('hida_works_style')
    );
  } 


  if(is_home()){
    wp_enqueue_style(
        'hida-works-home',//投稿用
        get_template_directory_uri() .'/assets/css/home.css',
        array('hida_works_style')
    );
  } 
  
  if (is_singular('post')) {
    wp_enqueue_style(
        'hida-works-single',//投稿用
        get_template_directory_uri() .'/assets/css/single.css',
        array('hida_works_style')
    );
  }    

  if(is_page('contact')){
    wp_enqueue_style(
        'hida-works-contact',
        get_template_directory_uri() .'/assets/css/page-contact.css',
        array('hida_works_style')
    );
  } 


}
add_action(
    'wp_enqueue_scripts',
    'hida_works_page_styles',
    'hida-works-services'
);



