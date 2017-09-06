<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title("", true); ?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<script>
    var templatePath = "<?php echo get_template_directory_uri(); ?>";
    console.log(templatePath);
    console.log("iuhgvyu");
</script>
	<header class="header cnt">
	  <div class="header-content row">
	    <div class="logo">
				<a href="/">
					<img class="min-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""/>
					<img class="big-logo" src="<?php echo get_template_directory_uri(); ?>/img/big-logo.svg"/>
				</a>
			</div>
	    <div class="menu-container">
				<?php
					wp_nav_menu(array('theme_location' => 'header-menu'));
				?>
	    </div>
	    <div class="contact-hab">
	      <div class="contacts"><a class="num" href="tel:+74952520731">+7 (495) 252-07-31</a></div>
	      <div class="burger">
	        <div class="block1"></div>
	        <div class="block2"></div>
	        <div class="block3"></div>
	      </div>
	      <div class="habmenu">
					<?php
						wp_nav_menu(array('theme_location' => 'header-menu'));
					?>
	      </div>
	    </div>
	  </div>
	</header>
