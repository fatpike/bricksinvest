<?php get_header(); ?>
    <div id="container">
        <div id="content">
            <div class="contact-heading">
                <div class="contact-header">

                    <div class="contact-main">
                        <h1><?php the_field('heading_1'); ?></h1>
                    </div>
                    <div class="contact-main contact-question">
                        <p><?php the_field('heading_1_text'); ?></p>
                    </div>
                </div>


                <?php while (the_flexible_field('contact')): ?>
                <div class="row columns">
                    <div class="col-sm">
                        <div class="column-left">
                            <h3>Bricks Invest</h3>
                            <p class="info-title">Contactgegevens</p>
                            <ul>
                                <li>Symfonielaan 20 22</li>
                                <li>3438 EV Nieuwegein</li>
                                <br>
                                <li class="contact-link">T +31 30 207 21 30</li>
                                <li>info@bricksinvest.nl</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="column-right">
                            <h2>Of gebruik ons contactformulier</h2>
                            <div class="contact-form">

                                <?php if (get_row_layout() == 'form'): ?>
                                    <div class="follow-up-main follow-up-form">
                                        <?php
                                        while (have_posts()) : the_post();
                                            $form_id = get_sub_field('form_id');
                                            gravity_form($form_id, true, true, false, '', true, 1);
                                        endwhile;
                                        ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                </div>
            </div>


        </div>


    </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>