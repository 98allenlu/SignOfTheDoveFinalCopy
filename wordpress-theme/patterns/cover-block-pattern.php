<?php
/**
 * Title: Cover Block Pattern (Page Header with Wave Shape)
 * Slug: rainbow-dove/cover-block-pattern
 * Categories: rainbow-dove-banner, rainbow-dove-header
 * Description: Full-width page header with the organic wave shape overlay. Pass a title via the post-title block inside.
 * Keywords: cover, page header, wave, shape, banner
 * ViewportWidth: 1400
 */

$shape_svg = function_exists( 'rd_inline_svg' ) ? rd_inline_svg( 'cover-block-shape.svg' ) : '';
?>
<!-- wp:group {"className":"rd-cover-block","align":"full","style":{"color":{"background":"var(--rd-primary)","text":"var(--rd-primary-foreground)"},"spacing":{"padding":{"top":"4rem","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group rd-cover-block" style="background-color:var(--rd-primary);color:var(--rd-primary-foreground);padding-top:4rem">

	<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var(--rd-font-headline)","fontSize":"var(--wp--preset--font-size--2xl)"},"color":{"text":"var(--rd-primary-foreground)"},"spacing":{"padding":{"bottom":"3rem"}}}} /-->

	<!-- Wavy shape overlay — renders inline SVG via PHP -->
	<?php if ( $shape_svg ) : ?>
	<div class="rd-shape-overlay" aria-hidden="true" style="color:var(--rd-background)">
		<?php echo $shape_svg; ?>
	</div>
	<?php else : ?>
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<?php endif; ?>

</div>
<!-- /wp:group -->
