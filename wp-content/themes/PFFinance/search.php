<?php
  global $wp_query;
  global $cat;
  global $post;

  get_header();
?>

<section class="search-result">
	<div class="wrap">
		<div class="search-content">
			<?php if(get_search_query()): ?>
  			<h1>Результаты поиска по завпросу: <span><?php the_search_query() ?></span></h1>
        <div class="search-resualt">
          <?php if (have_posts()){ ?>
          <ul class="post-list">
            <?php while (have_posts()): the_post(); ?>
              <li>
  							<h2><?php the_title(); ?></h2>
                <div class="info">
                  <span class="date">
                    <?php the_time('d.m.Y'); ?>
                  </span>
                </div>
  							<a href="<?php print get_permalink() ?>">Далее</a>
						   </li>
						<?php
              endwhile;
              } else { echo '<p>К сожалению, ничего не найдено.</p> '; }
            ?>
					</ul>
        </div>
			<?php else: ?>
			  <h1>Ничего не найдено</h1>
			<?php endif; ?>
    </div>
	</div>
</section>

<?php get_footer(); ?>
