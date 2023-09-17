<?php
/**
 * Title: Post Meta
 * slug: twentytwentyfour/post-meta
 * inserter: no
 */
?>

<!-- wp:group {"style":{"layout":{"flexSize":null,"selfStretch":"fit"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

		<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color has-link-color">—</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html_x( 'by','Prefix for the post author block: "By author name"', 'twentytwentyfour' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ','Prefix for the post category block: "in category name','twentytwentyfour'); ?>"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
