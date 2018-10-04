<?php
require_once 'AbstractArticle.php';

/**
 * Concrete Class
 */
class CorporateArticle extends AbstractArticle {

    protected function getContent()
    {
        return 'This is a Corporate Article. Here write your things.';
    }
}
