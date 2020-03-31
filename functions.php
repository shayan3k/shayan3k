<?php
require_once(get_template_directory() . '/inc/theme-support.php');
//////////////////////
//Register Scripts
///////////////////////
function arcade_register_scripts()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js');
    wp_enqueue_script('fontAwesome', get_template_directory_uri() . './node_modules/@fortawesome/fontawesome-free/js/all.js');

    wp_enqueue_style('arcade-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('arcade-script', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'arcade_register_scripts');

/////////////////////////
//Register sidebar
//////////////////////////

function theme_register_sidebar()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'virus',
            'name'          => __('virus'),
            'description'   => __('A widget for Corona Virus'),
            'before_widget' => '<div id="myWidget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="myWidget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action('widgets_init', 'theme_register_sidebar');


/////////////////////
//Register Widget
//////////////////////
function theme_register_widget()
{
    require_once(get_template_directory() . '/inc/Widget_Virus.php');
    register_widget('Widget_Virus_Class');
}
add_action('widgets_init', 'theme_register_widget');

///////////////////////////////////////
//Hide the version number in meta
///////////////////////////////////////
function remove_version_info()
{
    return '';
}
add_filter('the_generator', 'remove_version_info');


///////////////////////////////////////
//add post format
///////////////////////////////////////
add_theme_support('post-formats', array('aside ', 'gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat'));

///////////////////////////////////////
//post thumbnails
///////////////////////////////////////
add_theme_support('post-thumbnails');

///////////////////////////////////////
//Excerpt Config
///////////////////////////////////////
require_once __DIR__ . '/excerpt.php';
$excerpt = new Excerpt();

///////////////////////////////////////
//change comment textarea position
///////////////////////////////////////
add_filter('comment_form_fields', 'move_comment_field');
function move_comment_field($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}
