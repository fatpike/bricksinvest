<?php


class Quote
{

    private $quote;
    private $author;

    public function __construct(string $_quote, string $_author)
    {
        $this->quote = $_quote;
        $this->author = $_author;
    }

    public function getQuote(): string
    {
        return $this->quote;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

}