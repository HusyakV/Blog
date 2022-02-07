<?php include_once ('header.php'); ?>
<?php include_once ('post.php'); ?>

<?php

$post = new Post($db);
$post->deletePostBySlug($_GET['slug']);
header('Location:result.php');

?>

