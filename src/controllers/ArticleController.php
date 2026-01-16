<?php

class ArticleController
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'title' => 'Article 1'],
            ['id' => 2, 'title' => 'Article 2'],
            ['id' => 3, 'title' => 'Article 3'],
        ];

        require_once __DIR__ . '/../views/front/articles.php';
    }
}
