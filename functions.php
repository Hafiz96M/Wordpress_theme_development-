<?php
if(!function_exists('mythemefunction')){

function mythemefunction(){


    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery','image', 'video' ) );
   
   
}

load_theme_textdomain( 'neogymtheme', get_template_directory() . '/languages' );
register_nav_menus(array(
    "top_menu" => __("Top Menu", "neogymtheme")
));

}

if(!function_exists("neogymliclass")){

function neogymliclass($classes, $item, $args) {
    if($args->theme_location == 'top_menu') {
        $classes[] = 'list-inline-item';
      
    return $classes;
}
}
add_filter('nav_menu_css_class', 'neogymliclass', 1, 3);

}

if(!function_exists("neogymanchorclass")){
function neogymanchorclass($atts, $item, $args, $depth) {
    if ($args->theme_location == 'top_menu') { // Replace 'primary' with your theme location.
        $atts['class'] = 'nav-item'; // Add your custom class.
    }
    return $atts;
}
}
add_filter('nav_menu_link_attributes', 'neogymanchorclass', 10, 4);



add_action("after_setup_theme","mythemefunction");

// add services
if(!function_exists("neogym_service")){
   function neogym_service(){
    register_post_type("Yunus",
    array(
        "labels" => array(
          'name'  => __('Services', 'textdomain'),
		  'singular_name' => __('Services', 'textdomain'),  
        ),
                'public'      => true,
				'has_archive' => true,
    ));

   }
    
}

add_action('init', 'neogym_service');

// add students

if(!function_exists("neogym_student")){
    function neogym_student(){
     register_post_type("student",    //id
     array(
         "labels" => array(
           'name'  => __('students', 'textdomain'),
           'singular_name' => __('student', 'textdomain'),  

           'add_new_item'  => __( 'Add New Student', 'textdomain' ),
           'not_found'     => __( 'Not found any student', 'textdomain' ),
           'not_found_in_trash'    => __( 'Student not found in Trash', 'textdomain' ),
           'set_featured_image'    => __( 'Add student image', 'textdomain' ),
          
         ),
                 'public'      => true,
                 'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
                 'has_archive' => true,
     ));
 
    }
     
 }
 
 add_action('init', 'neogym_student');    // add hook

 // add texonomy

if(!function_exists('mystudentdepartment')){
    function mystudentdepartment(){
        $labels=array(
         'name'              => _x( 'students', 'textdomain' ),
		 'singular_name'     => _x( 'student', 'textdomain' ),
		 'search_items'      => __( 'Search students' ),
		 'all_items'         => __( 'All students' ),
		 'parent_item'       => __( 'Parent students' ),
		 'parent_item_colon' => __( 'Parent students:' ),
		 'edit_item'         => __( 'Edit students' ),
		 'update_item'       => __( 'Update students' ),
		 'add_new_item'      => __( 'Add New students' ),
		 'new_item_name'     => __( 'New students Name' ),
		 'menu_name'         => __( 'Student Department' ),
        );
        
        $args=array(
            'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'neogym_student' ],

        );

        register_taxonomy( 'studentdepartment', [ 'student' ], $args );
    }
}


 add_action('init','mystudentdepartment');


?>