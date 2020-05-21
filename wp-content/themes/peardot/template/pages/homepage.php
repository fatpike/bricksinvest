<?php
get_header();
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="homepage">

<?php if (have_rows('homepage')): ?>

    <?php while (have_rows('homepage')) : the_row(); ?>

        <?php if (get_row_layout() == 'hero_block'): ?>

            <div class="section">
                <div class="hero_section">
                    <p class="pretext"><?php the_sub_field('pretext'); ?></p>
                    <h2 class="title"><?php the_sub_field('title'); ?></h2>
                    <p class="subtext"><?php the_sub_field('subtext'); ?></p>
                    <?php if (have_rows('button_repeater')): ?>
                        <?php while (have_rows('button_repeater')) : the_row(); ?>
                            <a href="<?php
                            if (get_sub_field('url')) {
                                the_sub_field('url');
                            } elseif (get_sub_field('page')) {
                                the_sub_field('page');
                            } else {
                                echo '';
                            } ?>">
                                <button type="button" class="btn btn-lg btn-primary"><?php the_sub_field('label'); ?></button>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="button-down">
                        <button type="button" class="btn btn-dark btn-circle btn-lg" disabled><i class="fa fa-long-arrow-down"></i></button>
                    </div>
                </div>
            </div>

        <?php endif; ?>

        <?php if (get_row_layout() == 'counter_block'): ?>
            <div class="section">
                <div class="counter_section">
                    <div class="row count-row">
                        <?php if (have_rows('counter_repeater')): ?>
                            <?php while (have_rows('counter_repeater')) : the_row(); ?>
                                <div class="col-lg-3 col-sm-6 col-6">
                                    <div class="count-col">
                                        <h2 class="count-item"><span class="count"><?php the_sub_field('number'); ?></span>%</h2>
                                        <p class="count-sub"><?php the_sub_field('text'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'info_left_block'): ?>
            <div class="section">
                <div class="info-left_section">
                    <div class="row info-left-row">
                        <div class="col-12 col-md-8">
                            <div class="info-content">
                                <h2 class="info-title"><?php the_sub_field('title'); ?></h2>
                                <p class="info-subtext"><?php the_sub_field('content'); ?></p>
                                <a href="<?php
                                if (get_sub_field('url')) {
                                    the_sub_field('url');
                                } elseif (get_sub_field('page')) {
                                    the_sub_field('page');
                                } else {
                                    echo '';
                                } ?>">
                                    <button type="button" class="btn btn-lg btn-primary"><?php the_sub_field('label'); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="info-image">
                                <img src="//via.placeholder.com/600x400" class="info-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $image = get_sub_field('image'); ?>
        <?php endif; ?>

        <?php if (get_row_layout() == 'info_right_block'): ?>
            <div class="section">
                <div class="info-right_section">
                    <div class="row info-right-row">
                        <div class="col-12 col-md-8 order-12">
                            <div class="info-content">
                                <h2 class="info-title"><?php the_sub_field('title'); ?></h2>
                                <p class="info-subtext"><?php the_sub_field('content'); ?></p>
                                <a href="<?php
                                if (get_sub_field('url')) {
                                    the_sub_field('url');
                                } elseif (get_sub_field('page')) {
                                    the_sub_field('page');
                                } else {
                                    echo '';
                                } ?>">
                                    <button type="button" class="btn btn-lg btn-primary"><?php the_sub_field('label'); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 order-1">
                            <div class="info-image">
                                <img src="//via.placeholder.com/600x400" class="info-img" alt="info">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $image = get_sub_field('image'); ?>
        <?php endif; ?>

        <?php if (get_row_layout() == 'blog'): ?>
            <div class="section">
                <div class="blog_section">
                    <h2 class="info-title blog-section-title"><?php the_sub_field('title'); ?></h2>
                    <div class="row blog-row">

                        <?php

                        $blog = new Blog('blog', 3, 'normal');

                        echo $blog->blog;

                        ?>

                        <div class="row">
                            <div class="col-12">
                                <a href="<?php
                                if (get_sub_field('url')) {
                                    the_sub_field('url');
                                } elseif (get_sub_field('page')) {
                                    the_sub_field('page');
                                } else {
                                    echo '';
                                } ?>">
                                    <button type="button" class="btn btn-primary btn-lg btn-block button-centered" style="margin-top: 10%; width: 400px;"><?php the_sub_field('label'); ?></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'about'): ?>
            <div class="section">
                <div class="about_section">
                    <h2 class="info-title about-section-title"><?php the_sub_field('title'); ?></h2>
                    <div class="row about-row">
                        <?php if (have_rows('about_repeater')): ?>
                            <?php while (have_rows('about_repeater')) : the_row(); ?>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="about-item">
                                        <div class="about-img-section">
                                            <img src="//via.placeholder.com/500x500" class="info-img about-img" alt="info">
                                        </div>
                                        <h4><?php the_sub_field('title'); ?></h4>
                                        <p class="about-subtext"><?php the_sub_field('content'); ?></p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_row_layout() == 'about_us_block'): ?>
            <div class="section">
                <div class="info-left_section">
                    <div class="row info-left-row">
                        <div class="col-12 col-md-8">
                            <div class="info-content">
                                <h2 class="info-title"><?php the_sub_field('title'); ?></h2>
                                <p class="info-subtext"><?php the_sub_field('content'); ?></p>
                                <button type="button" class="btn btn-lg btn-primary"><?php the_sub_field('label'); ?></button>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="info-image">
                                <img src="//via.placeholder.com/600x400" class="info-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $image = get_sub_field('image'); ?>
        <?php endif; ?>

        <?php if (get_row_layout() == 'partner'): ?>
            <div class="section">
                <div class="partner_section">
                    <h2 class="info-title partner-title"><?php the_sub_field('title'); ?></h2>
                    <a href="<?php
                    if (get_sub_field('url')) {
                        the_sub_field('url');
                    } elseif (get_sub_field('page')) {
                        the_sub_field('page');
                    } else {
                        echo '';
                    } ?>">
                        <button type="button" class="btn btn-secondary btn-block" style="margin-right: auto; margin-left: auto; width: 25%;"><?php the_sub_field('label'); ?></button>
                    </a>
                </div>
            </div>

        <?php endif; ?>

        <?php if (get_row_layout() == 'testimonials'): ?>
            <div class="section">
                <div class="testimonials_section">
                    <h2 class="info-title testimonials-section-title"><?php the_sub_field('title'); ?></h2>
                    <div class="row testimonials-row">


                        <?php

                        $testimonials = new Testimonial('testimonial', 3, 'normal');

                        echo $testimonials->testimonials;

                        ?>

                        <div class="row">
                            <div class="col-12">
                                <a href="<?php
                                if (get_sub_field('url')) {
                                    the_sub_field('url');
                                } elseif (get_sub_field('page')) {
                                    the_sub_field('page');
                                } else {
                                    echo '';
                                } ?>">
                                    <button type="button" class="btn btn-primary btn-block button-centered" style="margin-top: 10%; width: 400px"><?php the_sub_field('label'); ?></button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php if (get_row_layout() == ''): ?>
        <?php endif; ?>

    <?php endwhile; ?>


<?php else : ?>

    <?php return FALSE; ?>

<?php endif; ?>


<?php while (the_flexible_field('homepage')): the_row(); ?>


<?php endwhile; ?>


    <!-- Required JavaScript -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

        $('.count').each(function () {
            $(this).prop('counter', 1).animate({
                Counter: $(this).text()
            }, {
                duration: 1500,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });

    </script>

<?php
require_once __DIR__ . '/../parts/follow.php';
get_footer();
