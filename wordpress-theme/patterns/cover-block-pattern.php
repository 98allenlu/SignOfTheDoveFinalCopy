<?php
/**
 * Title: Cover Block Pattern (Page Header with Wave Shape)
 * Slug: rainbow-dove/cover-block-pattern
 * Categories: rainbow-dove-banner, rainbow-dove-header
 * Description: Full-width page header with the organic wave shape — mirrors the React PageHeaderShape component.
 * Keywords: cover, page header, wave, shape, banner
 * ViewportWidth: 1400
 */

$shape_svg = function_exists( 'rd_inline_svg' ) ? rd_inline_svg( 'cover-block-shape.svg' ) : '';

// Force preserveAspectRatio="none" so the SVG stretches full-width like the React component
if ( $shape_svg ) {
	$shape_svg = preg_replace( '/preserveAspectRatio="[^"]*"/', 'preserveAspectRatio="none"', $shape_svg );
	if ( strpos( $shape_svg, 'preserveAspectRatio' ) === false ) {
		$shape_svg = str_replace( '<svg ', '<svg preserveAspectRatio="none" ', $shape_svg );
	}
}
?>
<!-- wp:group {"className":"rd-cover-block","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group rd-cover-block alignfull">

	<!-- SVG wave background — absolutely positioned, fills container top-to-bottom -->
	<div class="rd-cover-bg" aria-hidden="true">
		<?php if ( $shape_svg ) : ?>
			<?php echo $shape_svg; ?>
		<?php else : ?>
			<div class="rd-cover-bg__fallback"></div>
		<?php endif; ?>
	</div>

	<!-- Content sits on top of the SVG, relative z-10, 15px from top — matches React mt-[15px] -->
	<!-- wp:group {"className":"rd-cover-content","layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group rd-cover-content">
		<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var(--rd-font-headline)","fontSize":"var(--wp--preset--font-size--2xl)"},"color":{"text":"var(--rd-primary-foreground)"}}} /-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
