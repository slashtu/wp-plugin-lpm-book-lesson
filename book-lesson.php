<?php
/*
Plugin Name: Book Lesson
Description: Themes the WordPress login, registration and forgot password pages according to your theme.
Version: 1.0.0
Author: Slash Tu
Author URI: https://github.com/slashtu
Text Domain: book-lesson
Domain Path: /languages
*/

//[foobar]
function foobar_func( $atts ){
  return "foo and bar";
}
add_shortcode( 'book-lesson', 'foobar_func' );

?>
