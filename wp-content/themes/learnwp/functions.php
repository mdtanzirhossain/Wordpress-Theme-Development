<!-- add_action is used to create new functionality -->
<?php
add_action('after_setup_theme','wplearntheme'); //callback function

if(!function_exists('wplearntheme')){
    function wplearntheme(){
        add_theme_support('post-thumbnails',array('post','page'));
        add_action('wp_enqueue_scripts','mywpscript'); 

        if(!function_exists('mywpscript')){
            function mywpscript(){
                wp_enqueue_style("unique_id", get_stylesheet_uri());
                wp_enqueue_style("main.css", 
                get_parent_theme_file_uri('assets/css/main.css'),
                array(),
                wp_get_theme()->get('Version'),
                'all'
                 );
wp_add_inline_style(
    'main.css',
    'body{background:red;}'
);

                wp_enqueue_script(
                    'main',
                    get_template_directory_uri()."assets/js/main.js",
                    array(),
                    wp_get_theme()->get('Version'),
                    false
                );
                wp_add_inline_script('main',
                'console.log("This is inline javascript")',
                );
            }
        }
    }
}
// remove_theme_support( 'post-thumbnails' );
// wp_enqueue_style takes 5 types of parameter:
/*
1. "unique id"
2. "source"
3. array() : source's dependency,   
4. version
5. media(all/screen, print)

*/
?>