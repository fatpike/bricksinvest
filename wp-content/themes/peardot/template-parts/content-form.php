<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peardot
 */

?>

<?php
the_content(sprintf(
    wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'peardot'),
        array(
            'span' => array(
                'class' => array(),
            ),
        )
    ),
    get_the_title()
));
