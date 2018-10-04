<?php
require_once 'AbstractArticle.php';

/**
 * Concrete Class
 */
class UserArticle extends AbstractArticle {

    protected function getContent()
    {
        return 'This is a User Article. Here write your things.';
    }
}
