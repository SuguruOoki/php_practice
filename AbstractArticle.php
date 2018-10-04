<?php

abstract class AbstractArticle {

    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->author = $data['author'];
    }

    /**
     * Template Method
     */
    public function display()
    {
        return "Title:{$this->getTitle()}<br />Author:{$this->getAuthor()}<br />Content:{$this->getContent()}";
        $this->getTitle();
        $this->getAuthor();
        $this->getContent();
    }

    /**
     * Common Method
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Common Method
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Abstract Method
     */
    protected abstract function getContent();
}
