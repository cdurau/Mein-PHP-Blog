<?php
include "../init.php";
include "elements/header.php";

use App\Post\PostRepository;

?>

<h1>Post.php</h1>
<?php
if (isset($_GET["id"])):
    $id = $_GET["id"];
    /** @var $pdo */
    $postRepository = new PostRepository($pdo);
    $post = $postRepository->fetchPost($id);
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php echo $post->title; ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php echo nl2br($post->content); ?>
        </div>
    </div>

<?php endif; ?>

<?php include "elements/footer.php"; ?>
