<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 Shortcodes


//////////////////////////////////////////////////////// TT Post Content

add_shortcode( 'tt_post', 'tt_post' );
function tt_post ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    $tt_post_content = get_post_field( 'post_content', $id );
    
// code
return $tt_post_content;    
}

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT HSR Search Bar

add_shortcode( 'tt_hsr_search', 'tt_hsr_search' );
function tt_hsr_search ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
?>
    <div id="search">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="form-group">
            <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-43563" src="http://realestate.homespotrealty.com/idx/quicksearchjs.php?widgetid=43563"></script>
                </div>
            </div>    
        </div>
    </div>

<?php }

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT lp boxes

add_shortcode( 'tt_hsr_lp_boxes', 'tt_hsr_lp_boxes' );
function tt_hsr_lp_boxes ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
    
?>
    <div id="home-boxes">
        <div class="row">
            <div class="col-md-12 col-xs-10 col-xs-offset-1">
                <ul>
                    <li class="col-md-2 col-md-offset-0 col-sm-6 col-xs-12 hbox-wrap"><a href="http://<?php the_field('box1_link','options'); ?>"><div class="fb-img-wrap"><img src="<?php the_field('box1_image','options'); ?>"></div><h2><?php the_field('box1_headline','options'); ?></h2></a></li>
                    <li class="col-md-2 col-md-offset-0 col-sm-6 col-xs-12 hbox-wrap"><a href="http://<?php the_field('box2_link','options'); ?>"><div class="fb-img-wrap"><img src="<?php the_field('box2_image','options'); ?>"></div><h2><?php the_field('box2_headline','options'); ?></h2></a></li>
                    <li class="col-md-2 col-md-offset-0 col-sm-6 col-xs-12 hbox-wrap"><a href="http://<?php the_field('box3_link','options'); ?>"><div class="fb-img-wrap"><img src="<?php the_field('box3_image','options'); ?>"></div><h2><?php the_field('box3_headline','options'); ?></h2></a></li>
                    <li class="col-md-2 col-md-offset-0 col-sm-6 col-xs-12 hbox-wrap"><a href="http://<?php the_field('box4_link','options'); ?>"><div class="fb-img-wrap"><img src="<?php the_field('box4_image','options'); ?>"></div><h2><?php the_field('box4_headline','options'); ?></h2></a></li>
                    <li class="col-md-2 col-md-offset-0 col-sm-6 col-xs-12 hbox-wrap"><a href="http://<?php the_field('box5_link','options'); ?>"><div class="fb-img-wrap"><img src="<?php the_field('box5_image','options'); ?>"></div><h2><?php the_field('box5_headline','options'); ?></h2></a></li>
                    
                
                </ul>
            </div>    
        </div>
    </div>

<?php }

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT quick search now

add_shortcode( 'tt_hsr_qsearch', 'tt_hsr_qsearch' );
function tt_hsr_qsearch ( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'name' => '',
            'id' => '',
		), $atts )
	);
    
?>
    <div id="qsearch">
        <div class="row">
            <div class="col-md-12">
                <div id="callout">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
	    <p><span class="hidden-xs">Looking for more KC Homes? </span><a href="http://realestate.homespotrealty.com/idx/search/advanced"><img src="/wp-content/themes/DT_homespot/img/callout_btn.png" alt=""></a><span class="hidden-xs">now</span></p>
      </div>
    </div>
            </div>    
        </div>
    </div>

<?php }

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// hsr buttons
add_shortcode( 'button', 'button_shortcode' );
function button_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => 'small',
        'color'  => 'nil',
        'block'  => 0,
        'url'    => '#',
        'target'    => '',
    ), $atts ) );

    $classes = 'btn btn-' . $size . ' btn-' . $color;

    if ($block) {
    	$classes .= ' btn-block';
    }

    return '<a class="' . $classes . '" href="' . $url . '" target="' . $target . '">' . $content . '</a>';
}

//////////////////////////////////////////////////////// button

add_shortcode( 'hsr_btn', 'hsr_btn1' );
function hsr_btn1($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '',
        'color'  => '#003764', //#003764
        'fcolor'  => '#ffffff', //#ffffff
        'link'    => '#',
        'float'    => 'none',
        'target'    => '',
    ), $atts ) );

    $classes = 'btn btn-default btn-' . $size;

    return '<button type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';margin:0.5em 0.5em 0.5em 0 !important;" target="' . $target . '">' . $content . '</button>';
}

////////////////////////////////////////////////////////

add_shortcode( 'rule', 'rule' );
function rule($atts, $content = null) {
    extract(shortcode_atts(array(
        'size'   => '1px',
        'color'  => '#bdc2c6',
    ), $atts ) );

    $classes = 'rule';

    return '<div class="' . $classes . '" style"border:' . $size . ' solid ' . $color .';"></div>';
}

////////////////////////////////////////////////////////

add_shortcode( 'print_info', 'print_info' );
function print_info($atts, $content = null) {
    extract(shortcode_atts(array(
        'type'   => '',
    ), $atts ) );

    $categories = get_the_category();
    $tags = get_the_tags();
    
    print_r($categories);
    print_r($tags);
}

////////////////////////////////////////////////////////

add_shortcode( 'city_info', 'city_info' );

function city_info($atts, $content = null) {
    extract(shortcode_atts(array(
        'name'   => '',
    ), $atts ) );
    
    
    $args = array(
	'post_type' => 'listing_type',
	'tax_query' => array(
		array(
			'taxonomy' => 'area',
			'field' => 'slug',
			'terms' => ''
		)
	)
);
$query = new WP_Query( $args );

    $output = 'hello';
    $price_link_1_label = get_field('price_link_1_label');
    $price_link_1 = get_field('price_link_1');
    $price_link_2_label = get_field('price_link_2_label');
    $price_link_2 = get_field('price_link_2');
     
    $output = '
    <div id="city-widget">
        <div class="row">
            <div class="col-md-12">
                            
                <h4 class="rule">by subdivision</h4>
                <div class="btn-group">
                  <button type="button" class="btn btn-primary btn-hsr-2">A-F</button>
                  <button type="button" class="btn btn-primary">G-K</button>
                  <button type="button" class="btn btn-primary">L-O</button>
                  <button type="button" class="btn btn-primary">P-T</button>
                  <button type="button" class="btn btn-primary">U-Z</button>
                </div>
                
            </div>    
        </div>
    </div>';



    return $output;

}

////////////////////////////////////////////////////////
