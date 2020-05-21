<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
endwhile; endif; ?>

<?php

$blog = new Blog('blog', 5, 'small');


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
            <div class="row">
                <div class="col-sm-8">
                    <div class="blog-section">
                        <div class="blog-header">
                            <img src="<?= $image_url ?>" class="card-img-top" alt="...">
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                        </div>
                        <div class="blog-content"><?php the_content(); ?></div>
                    </div>
                </div>
                <div class="col-sm-4 blog-small-header">
                    <h2 class="other-news">Andere blogs:</h2>
                    <?php

                    echo $blog->blog;

                    ?>
                </div>
            </div>


        </div>
    </div>
</div>

<?php
require_once __DIR__ . '/../parts/follow.php';
get_footer();
?>





