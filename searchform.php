<form role="search" method="get" id="searchform" class="searchform" action="<?php esc_url( home_url( '/' ) ) ?>">
	<div class="search404">
		<input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Поиск" />
		<input type="submit" id="searchsubmit" value="Искать" />
	</div>
</form>