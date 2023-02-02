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
                            <th scope="col">Blog Title</th></th>
                            <th scope="col">Blog Description</th></th>
                            <th scope="col">Blog Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $blog_list_query = " SELECT * FROM blogs ";
                        $blog_list_query_db = mysqli_query($db_connect, $blog_list_query);
                        $serial = 1;
                        foreach ($blog_list_query_db as  $blog) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td><?= $blog['blog_title'] ?></td>
                                <td><?= $blog['blog_description'] ?></td>
                                <td><img width="60px" src="./upload/blog_pic/<?= $blog['blog_image'] ?>" alt=""></td>
                                <td>
                                    <a href="./blog_edit.php?id=<?=$blog['id'] ?>" class="btn btn-outline-warning">Edit</a>
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