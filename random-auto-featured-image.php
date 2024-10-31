<?php

/*
Plugin Name: Random Auto Featured Image
Plugin URI: https://wordpress.org/plugins/random-auto-featured-image
Description: For posts with no featured image, and no images associated with the post,
a random image is selected from the media library and set as the featured image.
Version: 1.1
Author: @MikeRodriquez
Author URI: https://allthepages.org/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


function rafi_add_thumb ($post){
    // this function adds a thumbnail/featured image to posts that don't have one set and also updates db
    global $rafi_has_thumb; // featured image is already set; bail
    global $rafi_need_disclaimer; // display notice re: random images

    // get a pointer to one random image from image library
    $args = array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => 1,
        'fields' => 'ids',
        'orderby' => 'rand'
    );

    $image = new WP_Query( $args );


    $rafi_has_thumb = has_post_thumbnail(); // if it has a thumb then bail
    $post_id=get_the_ID(); // what post are we working on again?
    $rafi_need_disclaimer = $post->rafi_RandFeat; // check db; if set, disclaimer needed

    // no thumb? well then add one (the one chosen above) and update db
    if (!$rafi_has_thumb) {
        set_post_thumbnail($post, $image->posts[0]);
        update_post_meta($post_id,'rafi_RandFeat','1');
    }
}

//print a disclaimer about the randomness of the image
function rafi_note( $content ){

    global $rafi_need_disclaimer;

    if ($rafi_need_disclaimer == "1") {

        $content .= '<footer class="rafi-content-footer">
    <h6> <em> <font color="blue">
  The featured image (which may only  be displayed on the index pages, depending on your settings) was randomly selected. It is an unlikely coincidence if it is related to the post.</font></em></h6>
  
  </footer> ';
    }
        return $content;
    }


add_action( 'the_post', 'rafi_add_thumb' );


add_filter('the_content', 'rafi_note');


?>
