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
		jQuery(".site-info").html('<span style="float:left;">Copyright <a href = "http://customrayguns.com/login/">&copy;</a> Custom Ray Guns. All rights reserved. <a href = "http://customrayguns.com/contact/">Contact us.</a> This site is a <a href = "http://customrayguns.com">Custom Ray Gun.<img align = "MIDDLE" src = "http://customrayguns.com/wp-content/uploads/ray_gun.png" /></a>.</span>');
	});
</script>
<style>
     a {text-decoration:underline !important;}
</style>
OUTPUT;
	echo $output;
	}
