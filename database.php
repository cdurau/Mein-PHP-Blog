<?php

$pdo = new PDO('mysql:host=192.168.2.30;port=3306;dbname=blog', 'blog', '2JH0chvcVuBj77v4');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

class Database
{
    public static function fetchPosts()
    {
        global $pdo;

        return $pdo->query("SELECT * FROM `posts`");
    }
}