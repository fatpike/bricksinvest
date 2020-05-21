<?php


// The Query
$the_query = new WP_Query(array('post_type' => 'blog', 'posts_per_page' => 3));

// The Loop
if ($the_query->have_posts()) {
    echo '<ul>';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $title = get_the_title();
        $content = get_the_content();
        echo '<li>' . $title . '</li>';
        echo '<li>' . $content . '</li>';
        echo '<br>';
    }
    echo '</ul>';
} else {
    echo("Broken");
}
/* Restore original Post Data */
wp_reset_postdata();
