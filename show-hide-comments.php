<?php
/*
  Plugin Name: ARC Custom Show/Hide Comments
  Description: Creates a show/hide link or button in the comments section of a post.
  Reference: http://coreyjmahler.com/topics/create-a-button-to-showhide-wordpress-comments-with-a-click/
*/

function load_show_hide_comments_js() { 
	// load the file
	wp_register_script( 'show_hide_comments', plugins_url( '/show-hide-comments.js', __FILE__ ), array('jquery'), '', true ); // register the file

	  if ( is_single() && comments_open() ) {
	    // enables script only if post has comments
	    wp_enqueue_script( 'show_hide_comments' ); // enqueue the file
	  }	
}

add_action('wp_enqueue_scripts', 'load_show_hide_comments_js'); // initiate the function
