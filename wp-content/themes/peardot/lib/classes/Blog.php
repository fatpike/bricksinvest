<?php


class Blog
{

    public $blog;

    private $post_type;
    private $post_per_page;
    private $blog_type;

    public function __construct($_post_type, $_post_per_page, $_blog_type)
    {
        $this->post_type = $_post_type;
        $this->post_per_page = $_post_per_page;
        $this->blog_type = $_blog_type;

        $this->createBlog();
    }

    public function createBlog()
    {
        $blog = wp_get_recent_posts(array('post_type' => $this->post_type, 'posts_per_page' => $this->post_per_page));

        $blogStr = '';

        foreach ($blog as $value) {

            $post_id = $value['ID'];
            $post_title = esc_attr($value["post_title"]);
            $post_date = esc_attr($value['post_date']);

            $image = '<img src="//via.placeholder.com/1000x600" class="card-img-top" alt="blog-img">';
            $image = get_the_post_thumbnail($post_id);
            $image_url = get_the_post_thumbnail_url($post_id);


            $title = strlen($post_title) > 50 ? substr($post_title, 0, 70) . "..." : $post_title;
            $date = date('d F Y', strtotime($post_date));


            if (!empty($image_url)) {
                $image_url;
            } else {
                $image_url = '//via.placeholder.com/1000x600';
            }

            if ($this->blog_type == 'normal') {
                $blogStr .= '<div class="col-lg-4 col-md-4 col-sm-12 col-12" style="padding: 0">
                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="' . $image_url . '" class="info-img" alt="info">
                                </div>
                                <div class="blog-content">
                                    <a href="' . get_permalink($post_id) . '">' . $title . '</a>
                                    <p>' . $date . '</p>
                                </div>
                            </div>
                        </div>';
            } elseif ($this->blog_type == 'old') {
                $blogStr .= '<div class="imgpush">
                                <div class="card" style="width: 22rem;">
                                <img src="' . $image_url . '" class="card-img-top blog-img" alt="blog-img">
                                    <div class="card-body" style="height: 10rem">
                                        <h5 class="card-title"><a href="' . get_permalink($post_id) . '">' . $title . '</a></h5>
                                        <br>
                                        <p class="card-text" style="bottom: 0">' . $date . '</p>
                                    </div>
                                </div>
                            </div>';
            } elseif ($this->blog_type == 'small') {
                $blogStr .= '<div class="col-12 blog-small">
                                <a href="' . get_permalink($post_id) . '">
                                    <img src="' . $image_url . '" class="card-img-top blog-img" alt="blog-img">
                                    <a class="blog-small-title" href="' . get_permalink($post_id) . '">' . $title . '</a>
                                </a>
                            </div>';
            } elseif ($this->blog_type == 'big') {
                $blogStr .= '<div class="col-12 blog-big">
                                <a href="' . get_permalink($post_id) . '">
                                    <img src="' . $image_url . '" class="card-img-top blog-img" alt="blog-img">
                                    <a class="blog-big-title" href="' . get_permalink($post_id) . '">' . $title . '</a>
                                </a>
                            </div>';
            }

            $this->blog = $blogStr;
        }
    }


}