<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
endwhile; endif; ?>

<?php

$blog = new Blog('blog', -1, 'big');


$id = get_the_ID();
$image_url = get_the_post_thumbnail_url($id);

if (!empty($image_url)) {
    $image_url;
} else {
    $image_url = '//via.placeholder.com/1000x600';
}

?>

<div class="blog-heading">

    <div class="main">
        <div class="blog-main">
            <div class="blog-section">
                <div class="blog-big-content">
                    <h1 class="blog-big-title">Blogs:</h1>
                    <?php echo $blog->blog; ?>
                </div>
            </div>
        </div>

        <?php wp_pagenavi(); ?>


    </div>
</div>
</div>

<?php
require_once __DIR__ . '/../parts/follow.php';
get_footer();
?>





