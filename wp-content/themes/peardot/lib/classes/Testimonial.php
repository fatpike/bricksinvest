<?php
//
//include_once 'Post.php';
//
//class Blog extends Post
//{
//
//    private $post_type;
//
//    private $title;
//    private $date;
//
//    public function __construct(string $_post_type, string $_image, string $_title, string $_date)
//    {
//        $this->post_type = $_post_type;
//        parent::__construct($_image);
//        $this->title = $_title;
//        $this->date = $_date;
//    }
//
//    public function getTitle()
//    {
//        return $this->title;
//    }
//
//    public function getDate()
//    {
//        return $this->date;
//    }
//
//    public function setTitle($Title)
//    {
//        $this->title = $Title;
//    }
//
//
//    public function createBlog()
//    {
//        $type = parent::setPostType($this->post_type);
//
//    }
//
//}

class Testimonial
{

    public $testimonials;

    private $post_type;
    private $post_per_page;

    private $testimonials_type;


    private $title;
    private $image;
    private $date;

    public function __construct($_post_type, $_post_per_page, $_testimonials_type)
    {
        $this->post_type = $_post_type;
        $this->post_per_page = $_post_per_page;
        $this->testimonials_type = $_testimonials_type;

        $this->createTestimonials();
    }

    public function createTestimonials()
    {
        $testimonials = wp_get_recent_posts(array('post_type' => $this->post_type, 'posts_per_page' => $this->post_per_page));

        $testimonialsStr = '';

        foreach ($testimonials as $value) {

            $post_id = $value['ID'];
            $post_author = esc_attr($value['post_author']);


            $image = '<img class="avatar rounded-circle mx-2" src="//via.placeholder.com/500x500" alt="avatar">';
            $image_url = get_avatar_url($post_author);

            if (!empty($image_url)) {
                $image_url;
            } else {
                $image_url = '//via.placeholder.com/1000x600';
            }


            $quote = esc_attr($value['post_content']);
            $author = get_the_author_meta('display_name', $post_author);


            if ($this->testimonials_type == 'normal') {
                $testimonialsStr .= '<div class="col-lg-4 col-md-4 col-sm-12 col-12" style="padding: 0">
                                        <div class="testimonials-item">
                                            <div class="author-img">
                                                <img src="' . $image_url . '" class="author-avatar" alt="avatar">
                                            </div>
                                            <div class="author-content">
                                                <p class="author-quote">' . $quote . '</p>
                                                <p class="author-name">' . $author . '</p>
                                            </div>
                                        </div>
                                    </div>';
            } elseif ($this->testimonials_type == 'old') {
                $testimonialsStr .= '<div class="imgpush testimonialwidth" style="margin-bottom: 5%">
                                         <div class="card" style="width: 22rem; height:25vh;">
                                             <div class="author d-flex align-items-center center">
                                                 <img class="avatar rounded-circle mx-2" src="' . $image_url . '" alt="avatar">   
                                             </div>
                                        
                                             <div class="card-body">
                                                 <blockquote class="blockquote text-left">
                                                    <p class="testimonial-quote">' . $quote . '</p>
                                                 </blockquote>
                                                    <p class="card-text">' . $author . '</p>
                                            </div>     
                                         </div>     
                                 </div>';
            }
            $this->testimonials = $testimonialsStr;


        }
    }
}



