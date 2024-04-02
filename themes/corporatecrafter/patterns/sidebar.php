<?php
 /**
  * Title: Sidebar
  * Slug: corporatecrafter/sidebar
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"15px","right":"15px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:15px;padding-bottom:var(--wp--preset--spacing--10);padding-left:15px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"primary","textColor":"secondary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"15px","right":"15px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:15px;padding-bottom:var(--wp--preset--spacing--10);padding-left:15px"><!-- wp:heading {"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);font-size:21px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Posts', 'corporatecrafter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"excerptLength":11,"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"15px","lineHeight":"1.4"}},"textColor":"contrast","className":"sidebar-latest-posts"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"15px","right":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"6px"}},"backgroundColor":"secondary","textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-secondary-background-color has-text-color has-background has-link-color" style="border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:15px;padding-bottom:var(--wp--preset--spacing--10);padding-left:15px"><!-- wp:heading {"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:21px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Categories', 'corporatecrafter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"15px","right":"15px"}},"border":{"radius":"6px"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:6px;padding-top:var(--wp--preset--spacing--10);padding-right:15px;padding-bottom:var(--wp--preset--spacing--10);padding-left:15px"><!-- wp:heading {"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="font-size:21px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Tags', 'corporatecrafter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->