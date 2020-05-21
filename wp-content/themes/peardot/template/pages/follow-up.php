<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">


            <div class="follow-up-heading">
                <div class="main">

                    <?php while (the_flexible_field('followup')): ?>
                        <?php if (get_row_layout() == 'heading_1_block'): ?>
                            <div class="follow-up-main">
                                <h1><?php the_sub_field('heading_1'); ?></h1>
                                <p><?php the_sub_field('heading_1_text'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'heading_2_block'): ?>
                            <div class="follow-up-main">
                                <h2><?php the_sub_field('heading_2'); ?></h2>
                                <p><?php the_sub_field('heading_2_text'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'heading_3_block'): ?>
                            <div class="follow-up-main">
                                <h3><?php the_sub_field('heading_3'); ?></h3>
                                <p><?php the_sub_field('heading_3_text'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'quote_block'): ?>
                            <div class="follow-up-main quote">
                                <h3><?php the_sub_field('quote'); ?></h3>
                                <p><?php the_sub_field('author'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'table_block'): ?>
                            <div class="follow-up-main">
                                <?php the_sub_field('table'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'image_with_text_block'): ?>
                            <div class="follow-up-main follow-up-info">
                                <?php $image = get_sub_field('image'); ?>
                                <img class="card-img-top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                <p><?php the_sub_field('image_text'); ?></p>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'title_with_call_to_action'): ?>
                            <div class="follow-up-main follow-up-cta">
                                <h2><?php the_sub_field('title_t_cta'); ?></h2>
                                <h3><?php the_sub_field('heading_t_cta'); ?></h3>
                                <p><?php the_sub_field('content_t_cta'); ?></p>
                                <a href="<?php
                                if (empty(get_sub_field('url'))) {
                                    the_sub_field('url');
                                } elseif (empty(get_sub_field('page'))) {
                                    the_sub_field('page');
                                } else {
                                    echo '';
                                } ?>">
                                    <button type="button" class="btn btn-lg btn-secondary"><?php the_sub_field('label'); ?></button>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'video_block'): ?>
                            <div class="follow-up-main follow-up-video">
                                <?php the_sub_field('video_single') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'list_block'): ?>
                            <div class="follow-up-main follow-up-list">
                                <h3><?php the_sub_field('list_title') ?></h3>
                                <?php
                                $list = get_sub_field('list');
                                $listStr = '';
                                foreach ($list as $listItem) {
                                    $item = $listItem['list_item'];
                                    $listStr .= '<li>
                                            ' . $item . '
                                        </li>';
                                }
                                ?>
                                <ul>
                                    <?= $listStr ?>
                                </ul>
                                <button type="button" class="btn btn-lg btn-secondary"><?php the_sub_field('label'); ?></button>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'file_block'): ?>
                            <div class="follow-up-main">
                                <h3><?php the_sub_field('files_title') ?></h3>
                                <?php
                                $files = get_sub_field('files');
                                $fileStr = '';
                                foreach ($files as $fileItem) {
                                    $file = $fileItem['file-single'];
                                    $title = $file['title'];
                                    $url = $file['url'];
                                    $fileStr .= '<div class="input-group">
                                            <label style="width: 100%;">
                                                <div class="input-group-prepend">
                                                    <input type="text" class="form-control download-text" id="inlineFormInputGroupUsername" placeholder="' . $title . '" disabled>
                                                    <a href="' . $url . '" class="download-btn" download>
                                                        <p class="input-group-text">&#8615;</p>
                                                    </a>
                                                </div>
                                            </label>
                                        </div> ';
                                }
                                ?>
                                <?= $fileStr ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'q_&_a_block'): ?>
                            <div class="follow-up-main follow-up-qna">
                                <h3><?php the_sub_field('q&a_title') ?></h3>
                                <?php
                                $qna = get_sub_field('q&a_item');
                                $qnaStr = '';
                                foreach ($qna as $qnaItem) {
                                    $question = $qnaItem['q&a_question'];
                                    $answer = $qnaItem['q&a_answer'];
                                    $qnaStr .= '<button class="accordion">' . $question . '</button>
                                        <div class="panel">
                                            <p>' . $answer . '</p>
                                        </div>';
                                }
                                ?>
                                <?= $qnaStr ?>
                            </div>
                        <?php endif; ?>

                        <?php if (get_row_layout() == 'team_block'): ?>
                            <div class="follow-up-main follow-up-team">
                                <h3><?php the_sub_field('team_title') ?></h3>
                                <div class="row">
                                    <?php
                                    $team = get_sub_field('team_personen');
                                    $teamStr = '';
                                    foreach ($team as $teamMember) {
                                        $image = $teamMember['team_avatar'];
                                        $avatar = '<img class="card-img-top" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '"/>';
                                        $fullname = $teamMember['team_fullname'];
                                        $quote = $teamMember['team_quote'];
                                        $email = $teamMember['team_mail'];
                                        $phone = $teamMember['team_phone'];
                                        $teamStr .= '<div class="col-lg-4 col-sm-12 team-single">
                                        ' . $avatar . '
                                        <h4 class="team-name">' . $fullname . '</h4>
                                        <p class="team-text">' . $quote . '</p>
                                        <p class="team-icons">&#128231; ' . $email . '<br> &#128241; ' . $phone . '</p>
                                    </div>';
                                    }
                                    ?>
                                    <?= $teamStr ?>
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if (get_row_layout() == 'form_block'): ?>
                            <div class="follow-up-main follow-up-form">
                                <?php
                                while (have_posts()) : the_post();
                                    $form_id = get_sub_field('form_id');
                                    gravity_form($form_id, true, true, false, '', true, 1);
                                    get_template_part('template-parts/content-form', 'page');
                                endwhile;
                                ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>

                </div>
            </div>
    </div>

    </main><!-- #main -->
    </div><!-- #primary -->

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("collapse-active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

<?php
require_once __DIR__ . '/../parts/follow.php';
get_footer();
