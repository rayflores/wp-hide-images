<?php
/*
 * Plugin Name: WP Examples Gallery
 * Plugin Author: Ray Flores
 * Author URL: https://rayflores.com
 */
add_filter( 'shortcode_atts_gallery', 'wpse246345_shortcode_atts_gallery', 10, 4 );
function wpse246345_shortcode_atts_gallery( $out, $pairs, $atts, $shortcode ) {

    if ( ! isset( $atts['columns'] )  ) {
        $out['columns'] = 5;
    }

    return $out;
}

add_action('wp_footer','add_examples_gallery_js',99);
function add_examples_gallery_js(){
    if (!is_page('examples') ){
        return;
    }
    ?>
    <script>
        jQuery(document).ready(function($){
            $('.cncmachine').on('click',function(){
                $('.cncmachine-imgs').toggle();
                $('.swissmachine-imgs').hide();
                $('.wireedm-imgs').hide();
                $('.sheetmetal-imgs').hide();
                $('.weldfab-imgs').hide();
                $('.nemaenc-imgs').hide();
            });
            $('.swissmachine').on('click',function(){
                $('.swissmachine-imgs').toggle();
                $('.cncmachine-imgs').hide();
                $('.wireedm-imgs').hide();
                $('.sheetmetal-imgs').hide();
                $('.weldfab-imgs').hide();
                $('.nemaenc-imgs').hide();
            });
            $('.wireedm').on('click',function(){
                $('.wireedm-imgs').toggle();
                $('.cncmachine-imgs').hide();
                $('.swissmachine-imgs').hide();
                $('.sheetmetal-imgs').hide();
                $('.weldfab-imgs').hide();
                $('.nemaenc-imgs').hide();
            });
            $('.sheetmetal').on('click',function(){
                $('.sheetmetal-imgs').toggle();
                $('.cncmachine-imgs').hide();
                $('.swissmachine-imgs').hide();
                $('.wireedm-imgs').hide();
                $('.weldfab-imgs').hide();
                $('.nemaenc-imgs').hide();
            });
            $('.weldfab').on('click',function(){
                $('.weldfab-imgs').toggle();
                $('.cncmachine-imgs').hide();
                $('.swissmachine-imgs').hide();
                $('.wireedm-imgs').hide();
                $('.sheetmetal-imgs').hide();
                $('.nemaenc-imgs').hide();
            });
            $('.nemaenc').on('click',function(){
                $('.nemaenc-imgs').toggle();
                $('.cncmachine-imgs').hide();
                $('.swissmachine-imgs').hide();
                $('.wireedm-imgs').hide();
                $('.sheetmetal-imgs').hide();
                $('.weldfab-imgs').hide();
            });
        });
    </script>
<?php
}