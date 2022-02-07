<?php
include_once ('header.php');
include_once ('post.php');
include_once ('tag.php');
?>

<?php
$post = new Post($db);
$tags = new Tag($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php foreach ($post->getPost() as $post) { ?>
                <div style = "display:flex">
                    <div style="display: inline-table" class="media-left media-top">
                        <img alt="" src="images/<?php echo $post['image'];?>" class="media-object" style="width: 150px; margin-top: 40px;">
                        <p>
                            Author: Admin<br>
                            Created:<?php echo date('Y-m-d',strtotime($post['created_at'])); ?>
                        </p>
                    </div>
                    <div style = "margin-left:40px; margin-top: 40px;" >
                        <h4 class="media-heading" ><a href="view.php?slug=<?php echo $post['slug'];?>"><?php echo $post['title']; ?> </a></h4>
                        <?php echo htmlspecialchars_decode($post['description']); ?>
                </div>
                </div>
            <?php } ?>
        </div>

        <div class="col-md-4">
            <h4>Chose categories</h4>
            <p><?php
            foreach ($tags -> getAllTags() as $tag){ ?>
                <a href="index.php?tag=<?php $tag['tag'] . '<br>'; ?>"><button type="button" class="btn btn-outline-warning
                btn-sm">
                        <?php echo $tag['tag'];?>
                    </button></a>

            <?php } ?>
            </p>
        </div>

    </div>
</div>
