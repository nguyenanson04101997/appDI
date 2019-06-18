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

    public function __construct($question, $fristname, $lastname )
    {
        $this->author = new Author($fristname, $lastname);
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


}
$question = new Question ("How to create DI php?" ,"super", "admin");