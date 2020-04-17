<?php

if (post_password_required() || !comments_open())
    return;
?>

<div id="comments" class="comments bg-default mt-5">

    <?php if (have_comments()) : ?>
        <div class="comments-section-header mt-5">
            <h1 class='font3'> نظر خود را به اشتراک بگزارید
            </h1>
        </div>
        <span class='post-footer-item font3 mt-1'> تعداد نظر ::[ <?php comments_number('بدون نظر', 'یک نظر', '% نظر'); ?>
            ] <i class="fa fa-comment" aria-hidden="true"></i>
        </span>
        </h5>

        <?php

        $args = array(
            'must_log_in'            => '<p class="must-log-in font3">' .  sprintf(esc_html__('برای ثبت نظر باید ثبت نام کنید', 'arcade'), '<a href="' . wp_login_url(apply_filters('the_permalink', get_permalink())) . '">', '</a>') . '</p>',
            'logged_in_as'            => '<p class="logged-in-as font3">' . esc_html__('وارد شده به عنوان', 'arcade') . ' <a href="' . admin_url('profile.php') . '">' . $user_identity . '</a>. <a href="' . wp_logout_url(get_permalink()) . '" title="' . esc_html__('Log out of this account', 'arcade') . '">' . esc_html__('Log out', 'arcade') . '</a></p>',
            'comment_notes_before'    => false,
            'comment_notes_after'    => false,
            'comment_field' => '<div class="form-group mt-3"><textarea name="comment" id="comment" cols="39" rows="4" tabindex="100" class="form-control" placeholder="' . esc_html__('نظر خود را بنویسید', 'arcade') . '"></textarea></div>',            'id_submit'                => 'comment-submit',
            'label_submit'            => esc_html__('ارسال', 'arcade'),
            'title_reply' => esc_html__('ثبت نظر', 'arcade'),

            'fields' => array(


                'author' =>
                '<p class="form-group d-inline-block col-12 col-md-5 m-0 mt-2 p-0">' .
                    '<label for="author">' . __('نام', 'arcade') . '</label> ' .
                    ($req ? '<span class="required">*</span>' : '') .
                    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
                    '" size="30" /></p>',

                'email' =>
                '<p class="form-group d-inline-block col-12 col-md-5 m-0 mt-2 p-0"><label for="email">' . __('ایمیل(اختیاری)', 'arcade') . '</label> ' .
                    ($req ? '<span class="required">*</span>' : '') .
                    '<input id="email" class="form-control" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                    '" size="30" /></p>',
                'cookies' => ''

            )

        );

        comment_form($args); ?>


        <hr>
        <?php

        require_once(get_template_directory() . '/class/walker_comment.php');

        wp_list_comments(
            array(
                'walker' => new Custom_Walker_Comment(),
                'short_ping' => true,
                'style' => 'ol',
                'format' => 'html5'
            )
        );
        ?>
        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'arcade'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&amp;larr; Older Comments', 'arcade')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &amp;rarr;', 'arcade')); ?></div>
            </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation 
        ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php _e('Comments are closed.', 'arcade'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() 
    ?>



</div><!-- #comments -->