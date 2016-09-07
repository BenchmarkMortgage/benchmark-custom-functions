<?php 
/*
Plugin Name: Benchmark Functions Plugin
Plugin URI: https://benchmark.us
Description: This plugin contains additional functions.
Version: 1.0
Author: Jason Haeger
Author URI: http://greyleafmedia.com
*/

function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array('contact-form-7', 'jquery-form', 'jquery-ui-datepicker', 'jquery-ui-spinner');
   
   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async="async" src', $tag);
      }
   }
   return $tag;
}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
