<?php


class Custom_Walker_Comment extends Walker_Comment
{


    protected function html5_comment($comment, $depth, $args)
    {

        $tag = ('div' === $args['style']) ? 'div' : 'li';

?>
        <div id="comment-<?php comment_ID(); ?>" <?php comment_class($this->has_children ? 'parent' : '', $comment); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">

                <?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => 'div-comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<div class="comment-reply-btn float-left ml-3">',
                            'after'     => '</div>',
                        )
                    )
                );
                ?>

                <?php echo '<h1 class="comment-author-name font4 my-0">' . get_comment_author_link($comment) . '</h1>';
                ?>

                <?php
                $comment_timestamp = sprintf(__('%1$s', 'arcade'), get_comment_date('', $comment));
                ?>
                <small class='font2 my-0'>
                    <i class="fas fa-clock"></i> <?php echo $comment_timestamp; ?>
                </small>



                <?php if ('0' == $comment->comment_approved) : ?>
                    <p class="comment-awaiting-moderation my-2"><?php _e('کامت شما در انتظار تایید می باشد', 'arcade'); ?></p>
                <?php endif; ?>

                <div class="comment-content mt-4 font4">
                    <?php comment_text(); ?>
                </div>
                <hr>
            </article><!-- .comment-body -->
        </div>

<?php
    }
}
