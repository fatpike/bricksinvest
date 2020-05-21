<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
endwhile; endif; ?>

<?php

$testimonial = new Testimonial('testimonial', 10, 'normal');


?>

<div class="testimonial-heading">

    <div class="main">
        <h1 class="testimonial-big-title">Testimonials:</h1>
        <div class="row justify-content-md-center">
            <?php
            echo $testimonial->testimonials;
            ?>
        </div>


    </div>
</div>


<?php
require_once __DIR__ . '/../parts/follow.php';
get_footer();
?>





