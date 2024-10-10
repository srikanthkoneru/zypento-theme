<?php
/**
 * Title: Single One
 * Slug: zypento/single-one
 * Categories: zypento
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

?>

<!-- wp:group {"tagName":"main","align":"full","className":"zypento-single"} -->
<main class="wp-block-group alignfull zypento-single">

    <!-- wp:group {"align":"full","className":"zypento-no-gap","style":{"backgroundColor":"base-2","spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull zypento-no-gap has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
        
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns alignwide">
            
            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">

                <!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xxx-large"} /-->
    
                <!-- wp:columns {"isStackedOnMobile":false,"className":"zypento-single-author-meta"} -->
                <div class="wp-block-columns is-not-stacked-on-mobile zypento-single-author-meta">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:avatar {"size":64} /-->
                    </div>
                    <!-- /wp:column -->
                
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:post-author-name /-->
                        <!-- wp:post-date /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"className":"zypento-single-meta-cats","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns zypento-single-meta-cats" style="margin-top:var(--wp--preset--spacing--40)">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:post-terms {"term":"category"} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

            </div>
            <!-- /wp:column -->
    
            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:post-featured-image /-->
            </div>
            <!-- /wp:column -->
            
        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
        
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns alignwide">

            <!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%">
                
                <!-- wp:zypento/table-of-contents {"className":"wp-block-zypento-toc"} -->
                <div class="wp-block-zypento-table-of-contents wp-block-zypento-toc">
                    <h4>Table of Contents</h4>
                    <div id="zypento-toc" class="zypento-toc">

                    </div>
                </div>
                <!-- /wp:zypento/table-of-contents -->

            </div>
            <!-- /wp:column -->
    
            <!-- wp:column {"width":"66.66%","className":"zypento-single-content"} -->
            <div class="wp-block-column zypento-single-content" style="flex-basis:66.66%">

                <!-- wp:post-content {"lock":{"move":false,"remove":true},"align":"full","layout":{"type":"constrained"}} /-->

                <!-- wp:pattern {"slug":"zypento/hidden-post-navigation"} /-->

                <!-- wp:group {"align":"full","className":"zypento-comments"} -->
                <div class="wp-block-group alignfull zypento-comments">
                    
                    <!-- wp:comments -->
                    <div class="wp-block-comments">
                        
                        <!-- wp:comments-title {"showPostTitle":false} /-->
                        <!-- wp:comment-template -->
                            <!-- wp:columns {"className":"zypento-comment"} -->
                            <div class="wp-block-columns zypento-comment">
                                
                                <!-- wp:column {"width":"40px"} -->
                                <div class="wp-block-column" style="flex-basis:40px">
                                    <!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
                                </div>
                                <!-- /wp:column -->
        
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    
                                    <!-- wp:comment-author-name {"fontSize":"small"} /-->
        
                                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                                        <!-- wp:comment-date {"fontSize":"small"} /-->
        
                                        <!-- wp:comment-edit-link {"fontSize":"small"} /-->
                                    </div>
                                    <!-- /wp:group -->
        
                                    <!-- wp:comment-content /-->
        
                                    <!-- wp:comment-reply-link {"fontSize":"small"} /-->
                                
                                </div>
                                <!-- /wp:column -->
                                
                            </div>
                            <!-- /wp:columns -->

                        <!-- /wp:comment-template -->
    
                        <!-- wp:comments-pagination -->
                            <!-- wp:comments-pagination-previous /-->
                            <!-- wp:comments-pagination-numbers /-->
                            <!-- wp:comments-pagination-next /-->
                        <!-- /wp:comments-pagination -->
    
                        <!-- wp:post-comments-form /-->
                        
                    </div>
                    <!-- /wp:comments -->
                    
                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:column -->
            
        </div>
        <!-- /wp:columns -->
        
    </div>
    <!-- /wp:group -->

</main>
<!-- /wp:group -->