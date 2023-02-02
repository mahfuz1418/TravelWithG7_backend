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
                        $guide_list_query = " SELECT * FROM guids ";
                        $guide_list_query_db = mysqli_query($db_connect, $guide_list_query);
                        $serial = 1;
                        foreach ($guide_list_query_db as  $guide) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td><?= $guide['guide_name'] ?></td>
                                <td><?= $guide['guide_title'] ?></td>
                                <td><img width="60px" src="./upload/guide_pic/<?= $guide['guide_image'] ?>" alt=""></td>
                                <td>
                                    <a href="./guide_delete.php?id=<?=$guide['id'] ?>" class="btn btn-danger">Delete</a>
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