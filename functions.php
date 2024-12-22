<?php
if(!function_exists('mythemefunction')){

function mythemefunction(){


    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery','image', 'video' ) );
   
   
}


}




add_action("after_setup_theme","mythemefunction");
?>