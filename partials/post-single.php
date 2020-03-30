<div class="post post-<?php echo get_post_format() ? get_post_format() : 'standard'; ?> bg-default mt-3 p-1 mb-5 rounded shadow">

    <div class="title-post title-post-<?php echo get_post_format() ? get_post_format() : 'standard'; ?> d-flex flex-column justify-content-center align-content-center">
        <h1 class='font4'> <?php the_title(); ?></h1>
        <h5 class='font2'> <?php the_category(', '); ?> :دسته بندی <i class="fa fa-tag" aria-hidden="true"></i>
        </h5>
    </div>
    <div class="post-main-content p-2 py-3 m-1 my-3">
        <?php echo get_the_content(null, false, the_post()) ?>
    </div>
    <div class="w-100 p-0 m-0 text-left">
        <a class="btn post-btn-standard" href='<?php the_permalink() ?>'>بیشتر بخوانید <i class="fa fa-reply"></i></a>

    </div>

    <div class="post-footer">
        <span class='post-footer-item font3'> <?php echo get_the_time('dS M Y'); ?> <i class="fa fa-calendar" aria-hidden="true"></i>
        </span>
        <?php if (comments_open()) : ?>
            <span class='post-footer-item font3'> نظر ::[ <?php comments_number('بدون نظر', 'یک نظر', '% نظر'); ?>
                ] <i class="fa fa-comment" aria-hidden="true"></i>
            </span>
        <?php endif; ?>

        <span class='post-footer-item font3'><?php the_author() ?> <i class="fas fa-user" aria-hidden="true"></i>
        </span>

        <span class='post-footer-item font3'> بازدید::1,764 <i class="fa fa-eye" aria-hidden="true"></i>
        </span>
    </div>
</div>