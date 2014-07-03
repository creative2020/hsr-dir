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
            <div class="col-md-10 col-md-offset-1">
                <div class="form-group">
            <script charset="UTF-8" type="text/javascript" id="idxwidgetsrc-43563" src="http://realestate.homespotrealty.com/idx/quicksearchjs.php?widgetid=43563"></script>
                </div>
            </div>    
        </div>
    </div>

<?php }

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////// TT HSR Search Bar

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
            <div class="col-md-12">
                <ul>
                    <li class="col-md-2 col-md-offset-1 hbox-wrap"><a href="#"><img src="http://homespotrealty.com/wp-content/uploads/2013/09/leawood-city-hall-2_300px.jpg"><h2>Title Here</h2></a></li>
                    <li class="col-md-2 hbox-wrap"><a href="#"><img src="http://homespotrealty.com/wp-content/uploads/2013/09/leawood-city-hall-2_300px.jpg"><h2>Title Here</h2></a></li>
                    <li class="col-md-2 hbox-wrap"><a href="#"><img src="http://homespotrealty.com/wp-content/uploads/2013/09/leawood-city-hall-2_300px.jpg"><h2>Title Here</h2></a></li>
                    <li class="col-md-2 hbox-wrap"><a href="#"><img src="http://homespotrealty.com/wp-content/uploads/2013/09/leawood-city-hall-2_300px.jpg"><h2>Title Here</h2></a></li>
                    <li class="col-md-2 hbox-wrap"><a href="#"><img src="http://homespotrealty.com/wp-content/uploads/2013/09/leawood-city-hall-2_300px.jpg"><h2>Title Here</h2></a></li>
                    
                
                </ul>
            </div>    
        </div>
    </div>

<?php }

////////////////////////////////////////////////////////













