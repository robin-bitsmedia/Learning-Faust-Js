<?php
/**
 * Title: Blogs List
 * Slug: corporatecrafter/blogs-list
 * Categories: corporatecrafter
 * Keywords: Blogs List
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:25px;padding-bottom:var(--wp--preset--spacing--20);padding-left:25px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"25px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":20,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{"category":[9]}},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"lineHeight":"1.5"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"25px"}},"backgroundColor":"base-2"} -->
<div class="wp-block-columns are-vertically-aligned-center has-base-2-background-color has-background" style="border-radius:25px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.5","fontSize":"21px"}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":40,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"lineHeight":"1.6","fontSize":"16px"}},"textColor":"contrast"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"250px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:250px"><!-- wp:post-featured-image {"isLink":true,"width":"250px","height":"250px","align":"right","style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"corporatecrafter","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->