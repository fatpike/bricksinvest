<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block" href="<?= esc_url(home_url('/')); ?>">
            <?php esc_html_e(bloginfo('name'), 'themeslug'); ?>
        </a>
        <a class="navbar-brand mx-auto d-lg-none d-inline-block" href="#">
            <?php esc_html_e(bloginfo('name'), 'themeslug'); ?>
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1" id="myNavbar">
        <span class="sr-only"><?php esc_html_e('Main Menu', 'themeslug'); ?></span>
        <div class="navbar-nav ml-auto flex-nowrap navbar-links">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'navigation-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </div>
</nav>