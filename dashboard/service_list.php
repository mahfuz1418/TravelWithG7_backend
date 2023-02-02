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
                            <th scope="col">Srvice Title</th></th>
                            <th scope="col">Service Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $service_list_query = " SELECT * FROM services ";
                        $service_list_query_db = mysqli_query($db_connect, $service_list_query);
                        $serial = 1;
                        foreach ($service_list_query_db as  $service) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td><?= $service['service_title'] ?></td>
                                <td><img width="60px" src="./upload/service_pic/<?= $service['service_image'] ?>" alt=""></td>
                                <td>
                                    <a href="./service_delete.php?id=<?=$service['id'] ?>" class="btn btn-danger">Delete</a>
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