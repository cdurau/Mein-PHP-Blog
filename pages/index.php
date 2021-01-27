<?php

use App\Post\PostRepository;

include "../init.php";
include "elements/header.php";
?>

    <h1>Startseite des Blogs</h1>
    <p class="lead">Das hier ist die Startseite des Blogs</p>

<?php
/** @var $pdo */
$postRepository = new PostRepository($pdo);
$res = $postRepository->fetchPosts();
?>

    <ul>
        <?php foreach ($res as $row) : ?>
            <li><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] . "<br>"; ?></a></li>
        <?php endforeach; ?>
    </ul>

<?php include "elements/footer.php"; ?>