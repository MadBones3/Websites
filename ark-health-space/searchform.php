<form action="<?php bloginfo('siteurl'); ?>" id="searchform" class="search" method="get">
	<div class="sf_wrapper">
		<label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
		<input class="search-bar__input" type="text" placeholder="Enter search" name="s" id="s" />
		<button type="submit" id="searchsubmit" class="search-bar__submit"><i class="fas fa-search"></i></button>
	</div>
</form>