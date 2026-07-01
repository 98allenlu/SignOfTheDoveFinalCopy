<?php
/**
 * Title: Query Loop — Post Card
 * Slug: rainbow-dove/query-loop-post-card
 * Categories: rainbow-dove-query, rainbow-dove-blog
 * Block Types: core/post-template
 * Description: A post card for use inside core/query loops. Shows featured image, category, title, excerpt, and a Read More link.
 */
?>
<!-- wp:group {"className":"wp-block-post rd-post-card","style":{"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--border)"},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"var(--wp--preset--color--background)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group wp-block-post rd-post-card" style="border-radius:8px;border:1px solid var(--wp--preset--color--border);background-color:var(--wp--preset--color--background);overflow:hidden">

	<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0"},"dimensions":{"aspectRatio":"4/3"}},"scale":"cover"} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1.25rem","left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group" style="padding:1rem 1rem 1.25rem">

		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--body)","fontSize":"var(--wp--preset--font-size--xs)","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"},"color":{"text":"var(--wp--preset--color--accent)"}}} /-->

		<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"var(--wp--preset--font-size--lg)","fontWeight":"400"},"color":{"text":"var(--wp--preset--color--foreground)"},"spacing":{"margin":{"top":"0.25rem","bottom":"0.5rem"}}}} /-->

		<!-- wp:post-excerpt {"moreText":"Read More →","showMoreOnNewLine":false,"excerptLength":20,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--body)","fontSize":"var(--wp--preset--font-size--sm)"},"color":{"text":"var(--wp--preset--color--muted-foreground)"}}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
