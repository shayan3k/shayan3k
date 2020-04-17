<?php

class Widget_Recent_Posts extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'recent-post-widget',  // Base ID
            'Recent Post Widget'   // Name
        );
    }

    public function widget($args, $instance)
    {

        $title = apply_filters('widget_title', $instance['title']);
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $query = new WP_Query(array('post_type' => 'post', 'orderby' => 'post_date', 'order' => 'desc', 'posts_per_page' => 9));
        $posts = $query->posts;

        echo '<ul class="item-primary-ul w-100 row m-0 p-0">';
        foreach ($posts as $post) {

            echo  "<li class='col-12 col-md-4 p-1'>
        <a href='" . $post->guid . "' class='item-primary font3 shadow-sm'><span> <i class='fa fa-link'></i>" . $post->post_title . "</span> <span class='item-primary-badge'>
        " . esc_html(human_time_diff(strtotime($post->post_modified), current_time('timestamp'))) . "</span> </a> </li>";
        }
    }

    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

<?php

    }

    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
}
