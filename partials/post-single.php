<div class="post post-single bg-default mt-3 p-1 rounded shadow">
    <div class="title-post title-post-<?php echo get_post_format() ? get_post_format() : 'standard'; ?> d-flex flex-column justify-content-center align-content-center">
        <h1 class='font4'> <?php the_title(); ?></h1>
        <h5 class='font2'> <?php the_category(', '); ?> :دسته بندی <i class="fa fa-tag" aria-hidden="true"></i>
        </h5>
    </div>
    <div class="post-main-content p-2 py-3 m-1 my-3">
        <?php echo get_the_content(null, false, the_post()) ?>
    </div>
    <div class="download-section-header mt-5">
        <span class='font3'>بخش دانلود
        </span>
    </div>
    <div class="download-section mt-3">
        <a href="#" target='_blank' class='btn btn-download'>دانلود pdf تمام درسها <i class="fa fa-download" aria-hidden="true"></i>
        </a>
    </div>
    <div class="error-section-header mt-5">
        <span class='font3'>مشکلات لینک دانلود
        </span>
    </div>
    <div class="error-section mt-3">
        <p class='font4'>
            <a href='#' class='error-link'>.اگر مشکل دانلود دارید این لینک (کلیک) را مطالعه نمایید.</a>
            <i class="fas fa-less-than"></i>
        </p>
        <p class='font4'>
            .استفاده نمایید
            <a href='#' class='error-link'>"Google PDF"</a>و برای فایل های فشرده از <a href='#' class='error-link'>"WINRAR" </a>
            برای بازکردن جزوه از برنامه <i class="fas fa-less-than"></i>
        </p>
        <p class='font4'>
            .در صورت نارضایتی صاحب اثر لینک دانلود برداشته خواهد شد
            <i class="fas fa-less-than"></i>

        </p>
    </div>
    <div class="advertisment-section-header mt-5">
        <span class='font3'>مطالب پیشنهادی از سراسر وب
        </span>
    </div>
    <div class="advertisment-section mt-3">
        فعلا خالی
    </div>
    <div class="info-section-header mt-5">
        <span class='font3'>دیگر موارد
        </span>
    </div>
    <div class="info-section">
        <div class="social-items  mt-2">
            <div class="item item-fb"><span class='text font3'>تلگرام</span> <span class='icon font5'><i class="fab fa-telegram"></i></span> </div>
            <div class="item item-insta"><span class='text font3'>اینستاگرام</span> <span class='icon font5'><i class="fab fa-instagram"></i></span>
            </div>
        </div>


        <div class="info-box col-12 col-md-7 mt-5 border mx-auto py-4">
            <p class='text-center font3'>لطفا نظر خود را درباره این مطلب بیان بفرمایید.
            </p>
            <p class='text-center font3'>nomrebartar.com/?p=908
            </p>
        </div>
    </div>

    <div class="post-footer mt-5">
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


<div class="tags bg-default mt-3 p-1 rounded shadow">
    <h1 class='font2'> برچسب‌ها:گام به گام نهم, عربی نهم, گام به گام عربی نهم </h1>

</div>