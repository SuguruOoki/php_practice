<?php
require_once 'AbstractCorporateArticle.php';
require_once 'AbstractUserArticle.php';

$data = [
    "title" => "What is the Template Method?",
    "author" => "Qiita Tarou."
];

$corporate_article = new CorporateArticle($data);
$user_article = new UserArticle($data);

echo $corporate_article->display();
