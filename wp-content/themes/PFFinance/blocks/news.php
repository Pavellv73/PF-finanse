
<section class="news cnt" id="news">
  <div class="news-head">
    <h2>Новости</h2>
  </div>
  <div class="news-content row">
    <?php
      global $post;
      if (isset($allPosts)){
        $count = -1;
      } else {
        $count = 6;
      }
      $args = array(
        'category' => 6,
        'posts_per_page' => $count
      );
      $myposts = get_posts( $args );
      foreach( $myposts as $post ){
        setup_postdata($post);
    ?>
      <div class="news-block">
        <div class="news-img" style="background-image: url('<?php echo wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full'); ?>');"></div>
        <div class="news-text">
          <p class="data"><?php the_time('d.m.Y'); ?></p>
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="news-but">
          <a href="<?php the_permalink(); ?>">Подробнее</a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/next.png"/>
        </div>
      </div>
    <?php
			}
			wp_reset_postdata();
		?>

    <a href="/новости/" class="news-link"><button class="button-white new-visible" <?php if (isset($allPosts)){ echo 'hidden'; } ?>>Смотреть все новости</button></a>
  </div>
</section>
