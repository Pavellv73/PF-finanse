<div class="search-form">
	<form name="search" action="<?php echo home_url( '/' ) ?>" method="get" id="searchform">
		<input type="text" placeholder="Поиск по сайту" value="<?php echo get_search_query() ?>" name="s" id="s"/>
		<button class="submit-form" hidden></button>
	</form>
</div>
