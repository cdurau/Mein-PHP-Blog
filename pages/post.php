<?php
include "../init.php";
include "elements/header.php";
?>

<h1>Post.php</h1>
<?php
//$post = Database::
if (isset($_GET["id"])) {
    $post = Database::fetchPost($_GET["id"]);
    echo "<h3>" . $post["title"] . "</h3>";
    echo "<p>" . $post["content"] . "</p>";
}
?>

<?php include "elements/footer.php"; ?>
