<?php

class Widget_Slider extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'slider-widget',  // Base ID
            'Slider Widget'   // Name
        );
    }

    public function widget($args, $instance)
    {

        $image_uri = esc_url($instance["image_uri"]);



        echo '<div id="bootstrapCarouselIndicator" class="carousel slide bg-default" data-ride="carousel">';

        echo ' <ol class="carousel-indicators p-0 mx-auto">
              <li data-target="#bootstrapCarouselIndicator" data-slide-to="0" class="active"></li>
              <li data-target="#bootstrapCarouselIndicator" data-slide-to="1"></li>
              <li data-target="#bootstrapCarouselIndicator" data-slide-to="2"></li>
            </ol>';

        echo '<div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="' . $image_uri . '" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="' . $image_uri . '" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="' . $image_uri . '" alt="Third slide">
              </div>
            </div>';

        echo '<a class="carousel-control-prev" href="#bootstrapCarouselIndicator" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#bootstrapCarouselIndicator" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>';


        echo '</div><hr/>';
    }

    public function form($instance)
    {



        $image_uri = !empty($instance["image_uri"]) ? $instance["image_uri"] : esc_html__('', 'arcade');

        if (!empty($instance["image_uri"])) {
            echo '<a href="#" class="button button-primary js_custom_upload_media" style="margin-top:5px;">Upload Image</a>';
        }

        echo $image_uri ? '<img class="js_custom_upload_media js_custom_upload_media-img"  src="' . $image_uri . '" style="max-width:95%;display:block;cursor:pointer;" />' : '';

        echo '<input type="text" id="' . $this->get_field_id("image_uri") . '" name="' . $this->get_field_name("image_uri") . '" class="form-control js_custom_upload_media_input" value="' . $image_uri . '"/>';
    }

    public function update($new_instance, $old_instance)
    {

        // var_dump($new_instance);
        // die();
        $instance["image_uri"] = $new_instance["image_uri"] ? $new_instance["image_uri"] : '';
        // var_dump($instance);
        // die();
        return $instance;
    }
}
