<?php

class Widget_Categories extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'categories-widget',  // Base ID
            'Categories Widget'   // Name
        );
    }

    public function widget($args, $instance)
    {

        $title = apply_filters('widget_title', $instance['title']);
        if (!empty($title)) {
            echo "<div class='sidebar-item bg-default'><h1 class='title-primary font4 pr-2 shadow-sm d-inline-block d-flex justify-content-start align-items-center'>"  . $title . '</h1>';
        }
        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ));

        echo  '<ul class="item-primary-ul w-100 row m-0 p-0">';
        foreach ($categories as $category) {
            $category_link = sprintf(
                '<li class="col-12 p-1"> <a href="%1$s" alt="%2$s" class="item-primary font3 shadow-sm">%3$s <i class="fa fa-link"></i></a></a> </li>',
                esc_url(get_category_link($category->term_id)),
                esc_attr(sprintf($category->name)),
                esc_html($category->name)
            );

            echo  $category_link;
        }

        echo '</ul></div><hr/>';
    }

    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'arcade');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:', 'arcade'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>

<?php

    }

    public function update($new_instance, $old_instance)
    {


        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
}
