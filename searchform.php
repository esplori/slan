<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input class="search-text" type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input class="search-btn" type="submit" id="searchsubmit" value="search" />
	</div>
</form>