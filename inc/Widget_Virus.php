<?php

/**
 * Class WPDocs_New_Widget
 */
class Widget_Virus_Class extends WP_Widget
{

    /**
     * Constructs the new widget.
     *
     * @see WP_Widget::__construct()
     */
    function __construct()
    {
        // Instantiate the parent object.
        parent::__construct(false, __('Virus Live Invasion', 'arcade'));
    }

    /**
     * The widget's HTML output.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Display arguments including before_title, after_title,
     *                        before_widget, and after_widget.
     * @param array $instance The settings for the particular instance of the widget.
     */
    function widget($args, $instance)
    {

        $title = esc_attr(!empty($instance['title']) ? $instance['title'] : 'Please Enter Smthing to show');

        echo  $args['before_title'] . $title . $args['after_title'];
    }

    /**
     * The widget update handler.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance The new instance of the widget.
     * @param array $old_instance The old instance of the widget.
     * @return array The updated instance of the widget.
     */
    function update($new_instance, $old_instance)
    {


        return $instance;
    }

    /**
     * Output the admin widget options form HTML.
     *
     * @param array $instance The current widget settings.
     * @return string The HTML markup for the form.
     */
    function form($instance)
    {


        $title = !empty($instance['title']) ? $instance['title'] : '';
        $before_title = !empty($instance['before_title']) ? $instance['before_title'] : '';
        $after_title = !empty($instance['after_title']) ? $instance['after_title'] : '';


?>
        <!-- <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('before_title'); ?>">before_title:</label>
            <input type="text" id="<?php echo $this->get_field_id('before_title'); ?>" name="<?php echo $this->get_field_name('before_title'); ?>" value="<?php echo esc_attr($before_title); ?>" />
        </p>


        <p>
            <label for="<?php echo $this->get_field_id('after_title'); ?>">after_title:</label>
            <input type="text" id="<?php echo $this->get_field_id('after_title'); ?>" name="<?php echo $this->get_field_name('after_title'); ?>" value="<?php echo esc_attr($after_title); ?>" />
        </p> -->





<?php


    }
}
