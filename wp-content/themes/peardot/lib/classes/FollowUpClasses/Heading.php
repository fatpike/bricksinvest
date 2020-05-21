<?php


class Heading
{

    private $title;
    private $content;

    public function __construct(string $_title, string $_content)
    {
        $this->title = $_title;
        $this->content = $_content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

}