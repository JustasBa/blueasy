<?php
//apraseme konstanta keliui
define('ASSETS_URL', get_template_directory_uri() . '/assets/');

//iskvieciame funkcija

add_action( 'wp_enqueue_scripts', 'adding_theme_styles_and_scripts' );
//funkcija skirta uzkrauti stiliams ir skriptams
function adding_theme_styles_and_scripts(){

  //registruojame stilius
  wp_register_style( 'main_css', ASSETS_URL . 'style.css', array(), false );
  //wp_register_style( 'lfontawesome_css', ASSETS_URL . 'css/font-awesome.min.css', array(), false );
  //wp_register_style( 'iconfont_css', ASSETS_URL . 'css/iconfont.css', array(), false );
  //wp_register_style( 'jquery_fancybox_css', ASSETS_URL . 'css/jquery.fancybox.css', array(), false );
  //wp_register_style( 'magnific_css', ASSETS_URL . 'css/magnific-popup.css', array(), false );
  //wp_register_style( 'plugins_css', ASSETS_URL . 'css/plugins.css', array(), false );
  //wp_register_style( 'responsive_css', ASSETS_URL . 'css/responsive.css', array(), false );
  //wp_register_style( 'style_css', ASSETS_URL . 'css/style.css', array(), false );

  //registruojame javascript
  //wp_register_script( 'bootstrap_js', ASSETS_URL . 'js/vendor/bootstrap.min.js', array('jquery'), false, true);
  //wp_register_script( 'modernizr_js', ASSETS_URL . 'js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), false, true);
  //wp_register_script( 'gmaps_js', ASSETS_URL . 'js/gmaps.min.js', array(), false, true);
  //wp_register_script( 'jquery.easing_js', ASSETS_URL . 'js/jquery.easing.1.3.js', array('jquery'), false, true);
  //wp_register_script( 'fancybox_js', ASSETS_URL . 'js/jquery.fancybox.pack.js', array('jquery'), false, true);
  //wp_register_script( 'magnific_js', ASSETS_URL . 'js/jquery.magnific-popup.js', array('jquery'), false, true);
  //wp_register_script( 'masonry_js', ASSETS_URL . 'js/jquery.masonry.min.js', array('jquery'), false, true);
  //wp_register_script( 'mixitup_js', ASSETS_URL . 'js/jquery.mixitup.min.js', array('jquery'), false, true);
  //wp_register_script( 'main_js', ASSETS_URL . 'js/main.js', array('jquery','plugins'), false, true);
  //wp_register_script( 'plugins_js', ASSETS_URL . 'js/plugins.js', array('jquery'), false, true);//

  //uzkrauname stilius
  wp_enqueue_style( 'main_css' );
  //wp_enqueue_style( 'fontawesome_css' );
  //wp_enqueue_style( 'iconfont_css' );
  //wp_enqueue_style( 'jquery_fancybox_css' );
  //wp_enqueue_style( 'magnific_css' );
  //wp_enqueue_style( 'plugins_css' );
  //wp_enqueue_style( 'responsive_css' );
  //wp_enqueue_style( 'style_css' );

  //uzkrauname javascript
  //wp_enqueue_script( 'bootstrap_js' );
  //wp_enqueue_script( 'modernizr_js' );
  //wp_enqueue_script( 'gmaps_js' );
  //wp_enqueue_script( 'jquery.easing_js' );
  //wp_enqueue_script( 'fancybox_js' );
  //wp_enqueue_script( 'magnific_js' );
  //wp_enqueue_script( 'masonry_js' );
  //wp_enqueue_script( 'mixitup_js' );
  //wp_enqueue_script( 'main_js' );
  //wp_enqueue_script( 'plugins_js' );
}

add_action( 'init', 'disable_admin_bar' );
//funkcija isjungiam administratoriaus eilute virsuje
function disable_admin_bar() {
  show_admin_bar(false);
}

add_action( 'init', 'adding_theme_supports' );
//funkcija ijungianti nurodytas funkcijos galimybes
function adding_theme_supports() {
  //ijungia meniu redagavimo galimybe
  add_theme_support('menus');
}

//registruojame galimas navigaciju lokacijas
add_action('init', 'registering_navigations');
function registering_navigations() {
  register_nav_menus( array(
    'header-menu'             => __('Viršutinis meniu'),
    'footer-menu'             => __('Apatinis meniu')
  ) );
}
