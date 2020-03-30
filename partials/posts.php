<section class='posts mt-3 p-0'>

    <?php
    get_posts();
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('partials/post', get_post_format() ? get_post_format() : 'standard');
        endwhile;
    endif;
    ?>
</section>