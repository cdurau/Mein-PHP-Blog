<?php
include "../init.php";
include "elements/header.php";
?>

    <h1>Startseite des Blogs</h1>
    <p class="lead">Das hier ist die Startseite des Blogs</p>

<?php
$res = DATABASE::fetchPosts();

foreach ($res as $row) {
    echo $row["title"] . "<br>";
}
?>

<?php include "elements/footer.php"; ?>