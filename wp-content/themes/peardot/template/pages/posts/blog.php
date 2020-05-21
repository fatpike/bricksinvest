<?php

$blog = new Blog('blog', 3, 'normal');

echo $blog->blog;

?>

<?php

$field = get_field('blog_title');

?>