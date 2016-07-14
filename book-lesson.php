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

/**
 * LearnDash Version Constant
 */
define( 'BOOK_LESSON_VERSION', '1.0.0.0' );

if ( !defined('BOOK_LESSSON_LPM_PLUGIN_DIR' ) ) {
  define( 'BOOK_LESSSON_LPM_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}
if (!defined( 'BOOK_LESSSON_LPM_PLUGIN_URL' ) ) {
  define( 'BOOK_LESSSON_LPM_PLUGIN_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
}

// if ( !defined('LEARNDASH_LMS_DEFAULT_QUESTION_POINTS' ) ) {
//   define( 'LEARNDASH_LMS_DEFAULT_QUESTION_POINTS', 1 );
// }

// if ( !defined('LEARNDASH_LMS_DEFAULT_ANSWER_POINTS' ) ) {
//   define( 'LEARNDASH_LMS_DEFAULT_ANSWER_POINTS', 0 );
// }

function foobar_func( $atts ){

  wp_enqueue_script( 'book-lesson', BOOK_LESSSON_LPM_PLUGIN_URL . '/assets/js/book-lesson.js', array( 'jquery' ), BOOK_LESSON_VERSION );

  echo get_current_user_id();
  ?>

    <form action method="post">
    <input type="hidden" name="action" value="add_foobar">
    <input type="hidden" name="data" value="foobarid">
    <input type="submit" value="Submit">
    </form>


    <form action="http://localhost/stage/wp-content/plugins/book-lesson-1/post.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>



  <?php

  // global $wpdb;
  // $fivesdrafts = $wpdb->get_results( 
  //   "
  //   SELECT ID, post_title 
  //   FROM wp_posts
  //   WHERE post_type = 'sfwd-courses' 
  //   "
  // );

  // echo '<pre>';
  // print_r($fivesdrafts);
  // echo '</pre>';
}
add_shortcode( 'book-lesson', 'foobar_func' );

add_action( 'admin_post_add_foobar', 'prefix_admin_add_foobar' );

function prefix_admin_add_foobar() {
    status_header(200);
    // wp_redirect( 'http://localhost/stage/?page_id=6315' );
    die("Server received '{$_REQUEST['data']}' from your browser.");
    //request handlers should die() when they complete their task
}

?>
