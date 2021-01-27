<?php

namespace App\Core;

use PDO;
use App\Post\PostRepository;

class Container
{
    public function getPdo()
    {
        $config = parse_ini_file(__DIR__ . '/../../config.ini');

        $pdo = new PDO("{$config['connection']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']}", "{$config['user']}", "{$config['password']}");

        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }

    public function getPostsRepository()
    {
        return new PostRepository($this->getPdo());
    }
}