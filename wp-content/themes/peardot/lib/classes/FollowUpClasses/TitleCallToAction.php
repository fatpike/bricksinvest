<?php


class TitleCallToAction
{

    private $title;
    private $subtitle;
    private $content;
    private $button;

    public function __construct(string $_title, string $_subtitle, string $_content, string $_button)
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->content = $_content;
        $this->button = $_button;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getButton(): string
    {
        return $this->button;
    }
}