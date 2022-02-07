<?php  session_start();
include_once ('header.php'); ?>
<?php
include('post.php');
$post = new Post ($db);
?>

<div class="container">
    <h2>All Posts</h2>

      <?php
      if (!empty($_SESSION['username'])){
          echo "Hello, {$_SESSION['username']}";
      }else{
          echo "You are not logged in";
      }

      ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Create at</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($post ->getPost() as $post) { ?>
            <tr>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo substr($post['description'],0,20); ?></td>
                <td><?php echo date('Y-m-d',strtotime($post['created_at'])); ?></td>

                <td><a href="view.php?slug=<?php echo $post['slug']?>"><button type="submit"
                class="btn btn-outline-success btn-small">View</button></a></td>

                <td><a href="edit.php?slug=<?php echo $post['slug']?>"><button type="submit"
                class="btn btn-outline-primary btn-small">Edit</button></a></td>

                <td><a href="delete.php?slug=<?php echo $post['slug']?>"><button type="submit"
                class="btn btn-outline-danger btn-small">Delete</button></a></td>


        <?php } ?>
            </tr>
        </tbody>
    </table>
</div>