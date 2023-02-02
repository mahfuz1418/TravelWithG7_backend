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
                            <th scope="col">Name</th></th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $admin_list_query = " SELECT * FROM admins ";
                        $admin_list_query_db = mysqli_query($db_connect, $admin_list_query);
                        $serial = 1;
                        foreach ($admin_list_query_db as  $admin) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td><?= $admin['name'] ?></td>
                                <td><?= $admin['email'] ?></td>
                                <td><span class="badge <?= ($admin['role'] == 'admin' ? 'badge-success' : 'badge-warning') ?>"><?= $admin['role'] ?></span></td>
                               
                                <td>
                                    <a href="./user_delete.php?id=<?=$admin['id'] ?>" class="btn btn-danger">Delete</a>
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