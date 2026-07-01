<?php
/**
 * Title: Featured Posts Section
 * Slug: rainbow-dove/featured-section
 * Categories: rainbow-dove-blog, rainbow-dove-query
 * Description: A section heading with a 3-column post query grid and a "View All" link.
 * Keywords: featured, posts, grid, query
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5rem;padding-bottom:5rem">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"},"style":{"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--headline)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
		<h2 class="wp-block-heading">Recent Research</h2>
		<!-- /wp:heading -->
		<!-- wp:button {"style":{"color":{"text":"var(--wp--preset--color--primary)","background":"transparent"},"border":{"width":"0"},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/research">View All Posts →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:pattern {"slug":"rainbow-dove/query-loop-post-card"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
