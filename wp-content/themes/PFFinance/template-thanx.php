<?php
  /*
  Template Name: thanks-page
  */
  get_header();
?>
    <div class="thanx-block">
      <div class="thanx-content">
        <div class="thanx-head">
          <h1>Благодарим за обращение в «ПФ Финанс»!</h1>
          <p>Скоро с вами свяжется наш специалист.</p>
        </div>
        <div class="thanx-text">
          <h2>Получите от 3 000 до 10 000 рублей</h2>
          <p>За то, что поможете своему близкому, другу или знакомому снизить ставку по ипотечному кредитованию или решить другие вопросы с ипотекой.</p>
          <p>Просто порекомендуйте нашу компанию ПФ Финанс, как профессионалов в финансовых вопросах по улучшению условий ипотечного кредитования. Нажмите на кнопку соц. сети, которой вы пользуетесь:</p>
          <div class="soc-icon"><a onclick="Share.vkontakte('URL','TITLE','IMG_PATH','DESC')"><img src="<?php echo get_template_directory_uri(); ?>/img/vk-icon.svg"></a><a onclick="Share.facebook('URL','TITLE','IMG_PATH','DESC')"><img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon.svg"></a></div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
