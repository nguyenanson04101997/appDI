<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 18/06/2019
 * Time: 9:58 SA
 */
class Author{
    private $fristname;

    private $lastname;

    public function __construct($fristname, $lastname)
    {
        /**
         * gán 2 tham số truyền vào cho thuộcc tính class
         */

        $this->fristname = $fristname;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFristname()
    {
        return $this->fristname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }


}

class Question {
    private $author;

    private $question;

    public function __construct($question, Author $author )
    {
        $this->author =  $author;
        $this->question = $question;
    }

    /**
     * @return Author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    public function getQuestion(){
        return $this->question;
    }
    public function setAuthor( Author $author){

        $this->author = $author;
    }


}
$author = new Author("super", "admin");
$question = new Question ("How to create DI php?" , $author);