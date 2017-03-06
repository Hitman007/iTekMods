<?php
/*
Plugin Name: iTek
Plugin URI: http://customrayguns.com/
Description: 
Version: 0.1
Author: Jim Karlinski
Author URI: http://customrayguns.com/
*/

namespace iTekMods;

add_action( 'wp_footer', '\iTekMods\recomveCopyrightInfo' );
	
function recomveCopyrightInfo(){

$output = <<<OUTPUT
<script>
        jQuery("document").ready(function(){
		jQuery(".footer-copyright-wrapper").html('<span style="float:left;">Copyright <a href = "http://jimsbigbrain.com">&copy;</a> Jim\'s Big Brain. All rights reserved. <a href = "http://customrayguns.com/contact/">Contact us.</a> This site is a <a href = "http://customrayguns.com">Custom Ray Gun.<img align = "MIDDLE" src = "http://customrayguns.com/wp-content/uploads/2012/08/ray_gun.gif" /></a>.</span>');
	});
</script>
<style>
     a {text-decoration:underline !important;}
</style>
OUTPUT;
	echo $output;
	}
