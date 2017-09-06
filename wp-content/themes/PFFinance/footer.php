		<footer class="footer cnt">
		  <div class="footer-content row">
		    <div class="comp-menu">
		      <p>Компания</p>
		      <?php
						wp_nav_menu(array('theme_location' => 'footer-company-menu'));
					?>
					<p class="ogrn">ОГРН 1137746773691</p>
	        <p class="inn">ИНН 7734707068</p>
		    </div>
		    <div class="serv-menu">
		      <p>Услуги</p>
		      <?php
						wp_nav_menu(array('theme_location' => 'footer-service-menu'));
					?>
		    </div>
		    <div class="pay">
		      <div class="pay-content">
		        <h3>Мы принимаем к оплате</h3>
		        <div class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/visa-icon.png"/><img src="<?php echo get_template_directory_uri(); ?>/img/mastercard-icon.png"/></div>
						<?php get_search_form(); ?>
		        <div class="nt-logo"><a href="http://next-team.ru/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/nextteam-logo.png"/></a></div>
		      </div>
		    </div>
                <div class="nav">
          <?php
						wp_nav_menu(array('theme_location' => 'footer-mobile-menu'));
					?>
                    <a href="http://next-team.ru/" target="_blank" class="next-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/nextteam-logo.png"/></a>
                </div>
		  </div>
		</footer>
		<div class="footer-end cnt">
		  <div class="fe-content">
		    <p>2017 «ПФ Финанс». Все права защищены.</p><a class="fancybox" href="#politic">Политика конфиденциальности</a>
		  </div>
		</div>
		<div class="hiddensection">
		  <div class="politic" id="politic">
		    <p>Политика конфиденциальности</p>
		    <p>Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.</p>
		    <p>Все лица, заполнившие сведения, составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных.</p>
		    <p>Под персональными данными Гражданина понимается нижеуказанная информация: общая информация (имя и адрес электронной почты, телефон).</p>
		    <p>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.</p>
		    <p>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.</p>
		  </div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
