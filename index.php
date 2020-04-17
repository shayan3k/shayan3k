<?php

get_header();
?>


<div class="container row p-0 m-0 my-4 mx-auto">

    <div class="col-12 col-md-3 m-0 p-1 px-2 order-2">
        <?php get_template_part('partials/sidebar'); ?>
    </div>
    <div class="col-12 col-md-9 m-0 p-1 px-2 order-1">
        <?php get_template_part('partials/widget', 'pishnahad'); ?>
        <?php get_template_part('partials/posts'); ?>
    </div>

</div>





<?php
get_footer();
?>