<?php
	/*
	Template Name: 404
	*/

	get_header();
?>

    <div class="error-block">
      <div class="error-content">
        <div class="error-head"><img src="<?php echo get_template_directory_uri(); ?>/img/error-big.svg">
          <p>По вашему запросу ничего не найдено</p>
        </div>
        <div class="error-text">
          <h2>Свяжитесь со специалистом</h2>
          <form method="post" action="/mailer.php">
            <textarea name="text" placeholder="Ваш запрос..."></textarea>
            <input name="phone" placeholder="Ваш контактный телефон">
            <div class="action-block">
              <button class="button-blue">Связаться</button>
              <div class="error-but">
                <p>Или вернитесь на<a href="index.php"> Главную</a></p><img src="<?php echo get_template_directory_uri(); ?>/img/next.png">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
