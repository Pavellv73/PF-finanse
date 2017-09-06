<?php
  /*
  WP Post Template: news
  */

  get_header();

  global $wp_query;
  global $cat;
  global $post;

  include 'blocks/news-content.php';
  include 'blocks/question.php';
  include 'blocks/news.php';

  get_footer();
?>
