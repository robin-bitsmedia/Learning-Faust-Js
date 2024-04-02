<?php
/**
 * Title: Post
 * Slug: corporatecrafter/post
 * Categories: corporatecrafter
 * Keywords: Post
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"heading-text-color","className":"animated fadeInUp news-section","layout":{"type":"constrained"}} -->
<main class="wp-block-group animated fadeInUp news-section has-heading-text-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"25px","left":"25px"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:25px;padding-left:25px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-center has-body-font-family" style="font-size:32px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Latest News And Articles', 'corporatecrafter' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="font-size:16px"><?php echo esc_html__( 'Cras non dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur suscipit suscipit tellus. Phasellus tempus. Aenean imperdiet.', 'corporatecrafter' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"17px","left":"17px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:17px;padding-left:17px"><!-- wp:query {"queryId":23,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"8px","color":"#eeebeb","width":"1px"}},"backgroundColor":"heading-text-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-heading-text-color-background-color has-background" style="border-color:#eeebeb;border-width:1px;border-radius:8px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}},"typography":{"fontSize":"14px"}},"textColor":"contrast-2"} /-->

<!-- wp:post-author {"showAvatar":false,"showBio":false} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|accent-6"}}},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"textColor":"accent-6"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->