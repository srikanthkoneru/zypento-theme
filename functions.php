<?php
/**
 * Functions.
 *
 * @link       http://zypento.com
 * @since      1.0.0
 *
 * @package    zypento
 */

/**
 * Autoloader
 */
require_once 'vendor/autoload.php';

/**
 * Add fonts.
 *
 * @since    1.0.0
*/
function zypento_preload_fonts() {

?>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-700.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-800.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-900.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/montserrat/montserrat-v26-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-800.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-italic.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/fonts/open-sans/open-sans-v40-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<?php

}

add_action( 'wp_head', 'zypento_preload_fonts', 1 );

/**
 * Enqueue Assets.
 *
 * @since    1.0.0
*/
function zypento_enqueue_assets() {


    wp_enqueue_style( 'zypento-theme', esc_url( get_stylesheet_directory_uri() ) . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'zypento-theme', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'zypento-aos', esc_url( get_stylesheet_directory_uri() ) . '/assets/js/aos.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'zypento_enqueue_assets' );

/**
 * Set the default image if none exists.
 *
 * @param string $html              The post thumbnail HTML.
 * @param int    $post_id           The post ID.
 * @param int    $post_thumbnail_id The post thumbnail ID.
 * @return html
 */
function zypento_fallback_post_thumbnail_html( $html, $post_id, $post_thumbnail_id ) {

    if ( empty( $html ) ) {
        $html = '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/default-600-400-2.webp" width="400" height="200" loading="lazy" alt="' . get_the_title( $post_id ) . '" />';
    }

    return $html;

}
add_filter( 'post_thumbnail_html', 'zypento_fallback_post_thumbnail_html', 5, 3 );

/**
 * Set the default image if none exists.
 */
function zypento_pattern_categories() {
    register_block_pattern_category(
        'zypento',
        array( 'label' => __( 'Zypento', 'zypento' ) )
    );
    
}
  
add_action( 'init', 'zypento_pattern_categories' );
  
