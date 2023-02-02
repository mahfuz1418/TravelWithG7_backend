<?php
require_once('./includes/header.php');


?>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">About List</h5>
    </div>
    <div class="card-body">
        <div class="example-container">
            <div class="example-content">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Guide Name</th></th>
                            <th scope="col">Guide Title</th></th>
                            <th scope="col">Guide Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $post_list_query = " SELECT * FROM posts ";
                        $post_list_query_db = mysqli_query($db_connect, $post_list_query);
                        $serial = 1;
                        foreach ($post_list_query_db as  $post) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td><?= $post['post_title'] ?></td>
                                <td><?= $post['post_description'] ?></td>
                                <td><img width="60px" src="./upload/post_pic/<?= $post['post_thumbnil'] ?>" alt=""></td>
                                <td>
                                    <a href="./post_edit.php?id=<?=$post['id'] ?>" class="btn btn-outline-warning">Edit</a>
                                    <a href="./post_delete.php?id=<?=$post['id'] ?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require_once('./includes/footer.php');
?>