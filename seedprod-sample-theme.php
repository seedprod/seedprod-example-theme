<?php
/*
Plugin Name: SeedProd Sample Theme
Plugin URI: http://www.seedprod.com
Description: Sample Theme
Version:  1.0.0
Author: SeedProd
Author URI: http://www.seedprod.com
TextDomain: seedprod
License: GPLv2
Copyright 2014 SEEDPROD LLC (email : john@seedprod.com, twitter : @seedprod)
*/

/****************************
* Replace all instances of 'seedprod_sample_theme' with your theme name. Make sure it is unique.
*****************************/

/****************************
* Registers the Theme with the SeedProd plugin
*****************************/
add_filter('seed_cspv4_themes','seedprod_sample_theme_presets');

function seedprod_sample_theme_presets($args){
    // Set theme presets
    $args['seedprod_sample_theme'] = array('alt' => 'SeedProd Sample Theme', 'img' => plugin_dir_url( __FILE__ ) . 'screenshot.png',
                                'presets' => '{"background":{"background-color":"#ffffff","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed","background-position":"center top","background-image":"'.plugin_dir_url( __FILE__ ).'images/bg.jpg","media":{"id":"","height":"","width":"","thumbnail":""}},"bg_slideshow":"","bg_slideshow_slide_speed":"3000","bg_slideshow_slide_transition":"1","bg_slideshow_images":[{"title":"","description":"","url":"","sort":"0","attachment_id":"","thumb":"","image":"","height":"","width":""}],"bg_video":"","bg_video_url":"","headline_font":{"font-family":"Open Sans","font-options":"","google":"true","font-weight":"700","font-style":"","subsets":"","font-size":"32px","color":"#777777"},"text_font":{"font-family":"Open Sans","font-options":"","google":"true","font-weight":"400","font-style":"","subsets":"","font-size":"16px","line-height":"18px","color":"#777777"},"button_font":{"font-family":"Open Sans","font-options":"","google":"true","font-weight":"400","font-style":"","subsets":"","font-size":"16px","color":"#1e8cbe"},"typekit_id":"","container_color":{"color":"#ffffff","alpha":"1"},"container_position":"none","container_width":{"width":"600px","units":"px"},"container_radius":"0","container_border":{"border-top":"0","border-right":"0","border-bottom":"0","border-left":"0","border-style":"solid","border-color":"#ffffff"},"container_flat":"0","btn_style":"1","container_effect_animation":""}');

return $args;
}

/****************************
* Register Paths if active, no need to change any other except for chaning out the name of your theme.
*****************************/
$seedprod_sample_theme_seed_cspv4 = get_option('seed_cspv4');

// Run filter if the theme is active
if($seedprod_sample_theme_seed_cspv4['theme'] == 'seedprod_sample_theme'){
    add_filter('seed_cspv4_themes_url','seedprod_sample_theme_url');
    add_filter('seed_cspv4_themes_path', 'seedprod_sample_theme_path');
}

function seedprod_sample_theme_url($arg){
    return plugin_dir_url( __FILE__ );
}

function seedprod_sample_theme_path($arg){
    return plugin_dir_path( __FILE__ );
}
