<?php
require_once(get_template_directory() . '/inc/theme-support.php');
//////////////////////
//Register Scripts
///////////////////////
function arcade_register_scripts()
{

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array('jquery'), null, false);
    wp_enqueue_script('fontAwesome', get_template_directory_uri() . './node_modules/@fortawesome/fontawesome-free/js/all.js');

    wp_enqueue_style('arcade-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('arcade-script', get_template_directory_uri() . '/js/main.js');

    is_admin() ?  wp_enqueue_script('arcade-script-admin', get_stylesheet_directory_uri() . '/js/admin.js', array('jquery'), null, false)
        : '';
}

add_action('wp_enqueue_scripts', 'arcade_register_scripts');

/////////////////////////
//admin scripts
//////////////////////////
function arcade_register_scripts_admin()
{
    //necessary scripts for working with media uploader
    wp_enqueue_script('media-upload');
    wp_enqueue_media();

    wp_enqueue_script('fontAwesome', get_template_directory_uri() . './node_modules/@fortawesome/fontawesome-free/js/all.js');

    is_admin() ?  wp_enqueue_script('arcade-script-admin', get_stylesheet_directory_uri() . '/js/admin.js', array('jquery'), null, false)
        : '';
}
add_action('admin_enqueue_scripts', 'arcade_register_scripts_admin');

/////////////////////////
//Register sidebar
//////////////////////////
function theme_register_sidebar()
{
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __('primary'),
            'description'   => __('display the recent posts'),
            'before_widget' => '<div id="myWidget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h1 class="col-12 title-primary font5 w-100 px-3 py-2 m-0 mb-4 shadow ">',
            'after_title'   => '</h1>',
        )
    );

    /* Register the 'secondary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'secondary',
            'name'          => __('secondary'),
            'description'   => __('secondary sidebar widget'),

        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action('widgets_init', 'theme_register_sidebar');

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
///////////////////////////////////////
//Register a widget
///////////////////////////////////////

require_once(get_template_directory() . '/class/widget_recent_posts.php');
add_action('widgets_init', function () {
    register_widget('Widget_Recent_Posts');
});

///////////////////////////////////////
//Register a widget
///////////////////////////////////////

require_once(get_template_directory() . '/class/widget_categories.php');
add_action('widgets_init', function () {
    register_widget('Widget_Categories');
});


///////////////////////////////////////
//Register a widget
///////////////////////////////////////

require_once(get_template_directory() . '/class/widget_slider.php');
add_action('widgets_init', function () {
    register_widget('Widget_Slider');
});
