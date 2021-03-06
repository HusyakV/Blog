<?php include_once ('header.php')?>
<?php include_once ('post.php')?>

<?php
$posts = new Post($db);

if(isset($_POST['btnUpdate'])){
    $result = $posts->updatePost($_POST['title'],$_POST['description'],$_GET['slug']);
    if ($result==true){
        echo "<div class='text-center alert alert-success'>Post updated Successfully!</div>";
    }
}
?>

<div class="container">
    <div class="row justify-content-center">
        <?php foreach ($posts -> getSinglePost($_GET['slug']) as $post){ ?>
        <div class="col-md-8">
            <form action="add.php" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"
                                   value="<?php echo $post['title']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea cols="10" id="editor" name="description" class="form-control"><?php echo $post['description'];  ?></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btnUpdate" class="btn btn-primary">Update</button>
                        </div>

                        <div class="form-group"
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img style="width: 180px;" src="images/<?php echo $post['image'] ?>"
                    </div>
                </div>
        </div>
        <?php } ?>
    </div>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error(error);
        } );
</script>

