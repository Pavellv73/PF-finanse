
<section class="new-content cnt">
  <div class="info-content row">
    <div class="new-head">
      <a href="/новости/" onclick="history.back();">
        <p>Назад</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg"/>
      </a>
      <h1><?php the_title(); ?></h1>
      <p class="data"><?php the_time('d.m.Y'); ?></p>
    </div>
    <div class="img-head">
      <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } 
      ?>
    </div>
    <div class="new-text">
      <?php
        the_post();
        the_content();
      ?>
    </div>
  </div>
</section>
