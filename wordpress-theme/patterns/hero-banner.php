<?php
/**
 * Title: Hero Banner
 * Slug: rainbow-dove/hero-banner
 * Categories: rainbow-dove-banner, rainbow-dove-header
 * Description: Full-width hero section with heading, subtext, and two call-to-action buttons.
 * Keywords: hero, banner, cta, cover
 * ViewportWidth: 1400
 */
?>
<!-- wp:cover {"minHeight":85,"minHeightUnit":"vh","isDark":false,"style":{"color":{"background":"var(--wp--preset--color--background)"},"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}}} -->
<div class="wp-block-cover" style="min-height:85vh;background-color:var(--wp--preset--color--background);padding-top:6rem;padding-bottom:6rem">
	<div class="wp-block-cover__inner-container">

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--accent-font)","fontSize":"clamp(2.5rem,6vw,4.5rem)"},"color":{"text":"var(--wp--preset--color--primary)"}}} -->
		<h1 class="wp-block-heading has-text-align-center">At the Sign of the Rainbow &amp; Dove</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--body)","fontSize":"var(--wp--preset--font-size--md)"},"spacing":{"margin":{"bottom":"2.5rem"}}}} -->
		<p class="has-text-align-center">Explore the rich history of 18th-century textile arts through research and handcrafted products.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"1rem"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"primary-foreground","style":{"border":{"radius":"8px"},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"var(--wp--preset--font-size--md)"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-primary-foreground-color has-background has-text-color wp-element-button" href="/shop">Visit the Shop</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"accent","textColor":"accent-foreground","style":{"border":{"radius":"8px"},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"var(--wp--preset--font-size--md)"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"2rem","right":"2rem"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-accent-foreground-color has-background has-text-color wp-element-button" href="/research">Explore Research</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
</div>
<!-- /wp:cover -->
