<?php

namespace App\Post;

use PDO;

class PostRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchPosts()
    {
        $stmt = $this->pdo->query("SELECT * FROM `posts`");
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\Post\PostModel");

        return $stmt->fetchAll();
    }

    function fetchPost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $stmt->execute(["id" => $id]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");

        return $stmt->fetch();
    }
}