<?php
require_once('./includes/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Guide Profile</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2"></div>

        <div class="col-xl-8">
            <div class="card widget widget-list">
                <div class="card-header">
                    <h5 class="card-title">Add Guide</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="./guide_add_data.php" enctype="multipart/form-data">

                        <!-- change name field  -->
                        <h5 class="text-center bg-info text-white p-2">Add new guide</h5>
                        <div class="row mb-3">
                            <label for="title" class="col-form-label">Guide Name</label>
                            <div>
                                <input type="text" class="form-control" name="guide_name" id="" placeholder="Enter Guide Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="des" class="col-form-label">Guide Title</label>
                            <div>
                                <input type="text" class="form-control" name="guide_title" id="" placeholder="Enter Guide Title Here">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-form-label">Guide Image <p class="text-warning">(Your Image must be jag/png format and size under 10 mb)</p></label>
                            <div>
                                <input type="file" class="form-control" id="image" name="guide_image" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="add_guide">Add Guide</button>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-6">
                                <?php
                                if (isset($_SESSION['size_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['size_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['size_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['ext_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['ext_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['ext_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['image_error'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['image_error'] ?></p>
                                <?php
                                }
                                unset($_SESSION['image_error']);
                                ?>
                                <?php
                                if (isset($_SESSION['success'])) { ?>
                                    <h5 class="text-dark mt-3"><?= $_SESSION['success'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['success']);
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