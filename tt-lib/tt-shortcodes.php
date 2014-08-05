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
        'class' => '',
    ), $atts ) );

    $classes = 'btn btn-default ' . $class . ' btn-' . $size;

    return '<a type="button" class="' . $classes . '" href="' . $link . '" style="background:' . $color . ';color:'. $fcolor . ';float:' . $float . ';margin:0.5em 0.5em 0.5em 0 !important;" target="' . $target . '">' . $content . '</a>';
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

///////////////////////////////////////////////////////////////// 2020 /////////////////////////////////////////////////////////////////
// 2020 Typography Shortcodes
function HsBreak($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '#',
       'bgcolor' => '#fdb825',
       'name' => 'HS',
   ), $atts));
   return '<div class="hs-callout">' . $name . '</div>' . '<div class="hs-break">' . do_shortcode($content) . '</div>';
}
add_shortcode('hs-break', 'HsBreak');

// Shortcode HS BREAK 2
function HsBreak2($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '#',
       'bgcolor' => '#fdb825',
       'name' => 'HS',
   ), $atts));
   return '<div class="hs-callout2">' . $name . '</div>' . '<div class="hs-break2">' . do_shortcode($content) . '</div>';
}
add_shortcode('hs-break2', 'HsBreak2');
// end
function HsText1($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '#',
       'color' => '#333333',
       'bgcolor' => '',
   ), $atts));
   return '<div class="hs-text1" style=color:' . $color . ';background-color:' . $bgcolor . '>' . do_shortcode($content) . '</div>';
}
add_shortcode('hs-text1', 'HsText1');

function HsTextC1($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '#',
       'color' => '#333333',
       'bgcolor' => '#cccccc',
   ), $atts));
   return '<div class="hs-text-c1" style=color:' . $color . ';background-color:' . $bgcolor . '>' . do_shortcode($content) . '</div>';
}
add_shortcode('hs-text-c1', 'HsTextC1');

function HsTextH1($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '#',
       'color' => '#003764',
       'bgcolor' => '',
   ), $atts));
   return '<div class="hs-h1" style=color:' . $color . ';background-color:' . $bgcolor . '>' . do_shortcode($content) . '</div>';
}
add_shortcode('hs-h1', 'HsTextH1');

// Shortcode for credentials
function Credentials($atts, $content = null) {
   extract(shortcode_atts(array(
       'link' => '',
       'color' => '#003764',
       'bgcolor' => '',
       'img' => '',
       'title' => '',
   ), $atts));
   return '<div class="cred-wrap"><div class="cred-img"><img src="' . $img .'" width="50"></div><div class="cred-info"><div class="hsr-cred-title" style=color:' . $color . ';><a href="' . $link .'">' . $title . '</a></div><div class="hsr-cred-text" background-color:' . $bgcolor . '>' . do_shortcode($content) . '</div></div></div>';
}
add_shortcode('creds', 'Credentials');

// Add shortcode for Area Information [area_info]

add_shortcode('area_info', 'area_info_field');
function area_info_field() {
        global $post;
        $area_true = get_post_meta($post->ID, "neighborhood_area_info", true);
        
    if ($area_true == 1) {
        return 'Area';
    }
}
// Add shortcode for Area Information [area_info_full]
add_shortcode('area_info_full', 'area_info_full1');
function area_info_full1() {
        global $post;
        
        $area_true = get_post_meta($post->ID, "neighborhood_area_info", true);
        
    if ($area_true == 1) {
        return '<div class="AreaFull"><a href="' . get_permalink($post->ID) . '">Area</a></div';
        }               
        return '<div class="' . get_post_meta($post->ID, "neighborhood_area_info.name", true) . 'Full"><a href="' . get_permalink($post->ID) . '"></a></div>';
         
}
