<?php
/**
 * Title: Query Loop — Product Card
 * Slug: rainbow-dove/query-loop-product-card
 * Categories: rainbow-dove-query, rainbow-dove-shop
 * Block Types: core/post-template
 * Description: A WooCommerce product card for use inside woocommerce/product-collection. Shows product image, category, title, price, and an Add to Cart button.
 */
?>
<!-- wp:group {"className":"wc-block-product rd-product-card","style":{"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--border)"},"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"var(--wp--preset--color--background)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group wc-block-product rd-product-card" style="border-radius:8px;border:1px solid var(--wp--preset--color--border);background-color:var(--wp--preset--color--background);overflow:hidden">

	<!-- wp:post-featured-image {"isLink":true,"style":{"dimensions":{"aspectRatio":"4/3"}},"scale":"cover"} /-->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1.25rem","left":"1rem","right":"1rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group" style="padding:1rem 1rem 1.25rem">

		<!-- wp:post-terms {"term":"product_cat","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--body)","fontSize":"var(--wp--preset--font-size--xs)","fontWeight":"700","textTransform":"uppercase"},"color":{"text":"var(--wp--preset--color--accent)"}}} /-->

		<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)","fontSize":"var(--wp--preset--font-size--lg)","fontWeight":"400"},"color":{"text":"var(--wp--preset--color--foreground)"}}} /-->

		<!-- wp:woocommerce/product-price {"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--body)","fontWeight":"700","fontSize":"var(--wp--preset--font-size--md)"},"color":{"text":"var(--wp--preset--color--accent)"}}} /-->

		<!-- wp:woocommerce/product-button {"style":{"border":{"radius":"8px"},"typography":{"fontFamily":"var(--wp--preset--font-family--heading)"},"color":{"background":"var(--wp--preset--color--primary)","text":"var(--wp--preset--color--primary-foreground)"}}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
