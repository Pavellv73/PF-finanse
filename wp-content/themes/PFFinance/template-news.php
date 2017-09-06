<?php
  /*
  Template Name: news-page
  */
  get_header();

  $allPosts = true;

  include 'blocks/news.php';
  include 'blocks/question.php';

  get_footer();
?>
