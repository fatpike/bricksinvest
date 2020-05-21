<?php


class QuestionsAndAnswers
{

    private $title;
    private $question; //array
    private $answer; //array

    public function __construct(string $_title, $_question, $_answer)
    {
        $this->title = $_title;
        $this->question = $_question;
        $this->answer = $_answer;
    }

    public function createSection(){
        $field = get_field('qna_item');
        foreach($field as $value){

        }
    }

}