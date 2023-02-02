<?php
require_once('./includes/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Add Users</h1>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Create new admin/user</h5>
                </div>
                <div class="card-body">
                    <div class="example-container">
                        <div class="example-content">
                            <form action="./add_users_data.php" method="post">
                                <label for="">Enter new user/admin name</label>
                                <input type="text" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="New User Name" name="name" value="<?= isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '';
                                                                                                                                                                                            unset($_SESSION['old_name']) ?>">
                                <?php
                                if (isset($_SESSION['name_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['name_error'] ?></p>

                                <?php
                                }
                                unset($_SESSION['name_error']);
                                ?>
                                <label for="">Enter new user/admin email address</label>
                                <input type="email" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="New User Email" name="email" value="<?= isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '';
                                                                                                                                                                                                unset($_SESSION['old_email']) ?>">
                                <?php
                                if (isset($_SESSION['email_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['email_error'] ?></p>

                                <?php
                                }
                                unset($_SESSION['email_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['email_exist'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['email_exist'] ?></p>

                                <?php
                                }
                                unset($_SESSION['email_exist']);
                                ?>
                                <label for="">Make a password for user/admin</label>
                                <input type="password" class="form-control form-control-solid-bordered form-control-rounded m-b-sm" aria-describedby="roundedSolidBorderedInputExample" placeholder="Password" name="password">
                                <?php
                                if (isset($_SESSION['pass_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['pass_error'] ?></p>

                                <?php
                                }
                                unset($_SESSION['pass_error']);
                                ?>
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control form-control-solid-bordered form-control-rounded m-b-sm" aria-describedby="roundedSolidBorderedInputExample" placeholder="Confirm Password" name="confirm_password">
                                <?php
                                if (isset($_SESSION['con_pass_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['con_pass_error'] ?></p>

                                <?php
                                }
                                unset($_SESSION['con_pass_error']);
                                ?>
                                <label for="">Select role</label>
                                <select class="form-control form-control-solid-bordered form-control-rounded m-b-sm" name="role" id="">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <button  class="btn btn-primary" type="submit">Create</button>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['acc_created'])) { ?>
                                        <div>
                                            <h5 class="text-success d-inline "><?= $_SESSION['acc_created'] ?></h5>
                                        </div>

                                    <?php
                                    }
                                    unset($_SESSION['acc_created']);
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('./includes/footer.php');
?>