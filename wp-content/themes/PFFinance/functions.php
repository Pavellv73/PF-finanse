<?php

  /*подключение файлов стилей*/
  function enqueue_styles() {
  	wp_enqueue_style( 'style', get_stylesheet_uri());
  	wp_enqueue_style('fancybox',get_template_directory_uri().'/js/jquery.fancybox.css', false, '1.0');
  	wp_enqueue_style('fonts',get_template_directory_uri().'/fonts/stylesheet.css', false, '1.0');
  	wp_enqueue_style('slick',get_template_directory_uri().'/js/slick.css', false, '1.0');
  	wp_enqueue_style('slick-theme',get_template_directory_uri().'/js/slick-theme.css', false, '1.0');
  }
  add_action('wp_enqueue_scripts', 'enqueue_styles');

  /*подключение файлов скриптов*/
  function scripts() {
  	wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery.min.js');
  	wp_enqueue_script('slick', get_template_directory_uri(). '/js/slick.js');
  	wp_enqueue_script('form', get_template_directory_uri(). '/js/jquery.form.min.js');
  	wp_enqueue_script('fancybox', get_template_directory_uri(). '/js/jquery.fancybox.js');
  	wp_enqueue_script('yandex-map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU');
  	wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js');
  	wp_enqueue_script('functions_calc', get_template_directory_uri(). '/js/functions_calc.js');
  }
  add_action('wp_enqueue_scripts', 'scripts');

  /*миниатюры в теме*/
  add_theme_support( 'post-thumbnails' );

  /*Объявляю: меню!*/
  function register_my_menus() {
    register_nav_menus(array(
      'header-menu' => 'Меню в шапке',
      'hamburger-menu' => 'Меню в всплывающем окне',
      'footer-company-menu' => 'Меню в подвеле - компания',
      'footer-service-menu' => 'Меню в подвале - услуги',
      'footer-mobile-menu' => 'Меню в подвале (планшет)',
    ));
  }
  if (function_exists('register_nav_menus')){
  	add_action( 'init', 'register_my_menus' );
  }

?>
