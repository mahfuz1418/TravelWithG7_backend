<?php
require_once('./includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>PROFIE</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2"></div>

        <div class="col-xl-8">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Update Your Profile</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="./profile_data.php" enctype="multipart/form-data">

                        <!-- change name field  -->
                        <h5 class="text-center bg-info text-white p-2">Change Your Name</h5>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Name</label>
                            <div>
                                <input type="text" class="form-control" id="name" name="user_name" value="<?= $_SESSION['auth_name'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="update_name">Update Name</button>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-6">
                                <?php
                                if (isset($_SESSION['name_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['name_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['name_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['name_updated'])) { ?>
                                    <h5 class="text-dark mt-3"><?= $_SESSION['name_updated'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['name_updated']);
                                ?>
                            </div>
                        </div>
                        <hr>

                        <!-- change password field  -->
                        <h5 class="text-center bg-info text-white p-2">Change Your Password</h5>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Current Password</label>
                            <div>
                                <input type="password" class="form-control" id="name" name="current_password">
                            </div>
                            <?php
                            if (isset($_SESSION['current_pass_error'])) { ?>
                                <p class="text-danger"><?= $_SESSION['current_pass_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['current_pass_error']);
                            ?>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">New Password</label>
                            <div>
                                <input type="password" class="form-control" id="name" name="new_password">
                                <?php
                                if (isset($_SESSION['new_pass_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['new_pass_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['new_pass_error']);
                                ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Confirm Password</label>
                            <div>
                                <input type="password" class="form-control" id="name" name="confirm_password">
                                <?php
                                if (isset($_SESSION['con_pass_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['con_pass_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['con_pass_error']);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="update_pass">Update Password</button>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-6">
                                <?php
                                if (isset($_SESSION['name_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['name_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['name_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['pass_updated'])) { ?>
                                    <h5 class="text-dark mt-3"><?= $_SESSION['pass_updated'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['pass_updated']);
                                ?>
                            </div>
                        </div>
                        <hr>
                        
                        <!-- upload profile part  -->
                        <h5 class="text-center bg-info text-white p-2">Upload Your Profile Picture</h5>
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">Upload Your Profile</label>
                            <div class="col-8">
                                <div>
                                    <input type="file" class="form-control" id="name" name="profile_pic" value="<?= $_SESSION['auth_name'] ?>">
                                </div>
                                <?php
                                if (isset($_SESSION['profile_updated_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['profile_updated_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['profile_updated_error']);
                                ?>
                            </div>
                            <div class="col-4 text-center">
                                <button type="submit" class="btn btn-primary" name="update_profile">Upload Photo</button>
                            </div>
                            <div>
                                <?php
                                if (isset($_SESSION['profile_updated'])) { ?>
                                    <h5 class="text-dark mt-3 text-center"><?= $_SESSION['profile_updated'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['profile_updated']);
                                ?>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <?php
    require_once('./includes/footer.php');

    ?>