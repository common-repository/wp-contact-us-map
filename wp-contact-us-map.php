<?php
/*
Plugin Name: WP Contact Us Page Map
Description: This plugin allows you easy to add one or more maps to your page/post using shortcodes,Eg.: [WP_Contact_Us_Map id="WP_Contact_Us_Map_1" zoom="4" lat="-26.8369" lon="147.0524" w="600" h="450" icon=""], more detail: http://www.joomlacreator.com/downloads/wordpress-extensions/wp-contact-us-map
Version: 1.0
Author: JoomlaCreator team
Plugin URI: http://www.joomlacreator.com/downloads/wordpress-extensions/wp-contact-us-map
*/

// Add the google maps api to header
add_action('wp_head', 'WP_Contact_Us_Map_header');

function WP_Contact_Us_Map_header() {
	?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<?php
}

//eg: [WP_Contact_Us_Map id="WP_Contact_Us_Map_1" zoom="4" lat="-26.8369" lon="147.0524" w="600" h="450" icon="" popinfodefaultopen='1']
function WP_Contact_Us_Map($attr) {

	// default atts
	$attr = shortcode_atts(array(	
									'lat'   => '0', 
									'lon'    => '0',
									'id' => 'map',
									'zoom' => '4',
									'w' => '400',
									'h' => '300',
									'maptype' => 'ROADMAP',
									'icon' =>'',
									'popinfo' => '',
									'popinfodefaultopen' => '',
									), $attr);

	$mapHTML ="
<style>
.entry-content #" . $attr['id'] . " img{
	max-width: none;
}
</style>
<script type=\"text/javascript\">
  function initializeMap() {
    var myLatlng = new google.maps.LatLng(". $attr['lat'] .",". $attr['lon'] .");
    var myOptions = {
      zoom: ". $attr['zoom'] .",
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById('" . $attr['id'] . "'), myOptions);
    
    var marker = new google.maps.Marker({
        position: myLatlng, 
        map: map";
        if(! empty($attr['icon'])){
        	$mapHTML .= ",icon: '" . $attr['icon'] ."'";
        } 
        $mapHTML .= "
    });";

if($attr['popinfo']){ 
	$attr['popinfo'] = str_replace("'", "",  $attr['popinfo']);
	$mapHTML .="
	var infowindow = new google.maps.InfoWindow({
		content: '".$attr['popinfo']."'
	});";
	if($attr['popinfodefaultopen']){
		$mapHTML .=" 
			infowindow.open(map,marker); 
		";
	}
	$mapHTML .="
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
		";
	
}					
											
$mapHTML .= "											
  }
if (document.all){ 
 window.attachEvent('onload', initializeMap);
} 
else{ 
 window.addEventListener('load',initializeMap,false); 
}
</script> 
<div id='" . $attr['id'] . "' style='width: ". $attr['w'] ."px;height: ". $attr['h'] ."px;'></div>
"; 
		return $mapHTML;
	?>
     
	<?php
}

add_shortcode('WP_Contact_Us_Map', 'WP_Contact_Us_Map');


?>