<?php


class Post
{

    private $post_type;

    private $image;

    public function __construct(string $_image)
    {

        $this->image = $_image;

    }

    public function getPostType()
    {
        return $this->post_type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setPostType($Post_Type)
    {
        $this->post_type = $Post_Type;
    }

    public function setImage($Image)
    {
        $this->image = $Image;
    }

}

